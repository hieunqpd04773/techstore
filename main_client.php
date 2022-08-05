<?php
$login_message = '';
$controller = filter_input(INPUT_POST, 'controller');
if (empty($controller)) {
	$controller = filter_input(INPUT_GET, 'controller');
	if (empty($controller)) {
		$controller = 'main';
	}
}
$categories = CategoryDB::get_categories();
include_once('view/v_header.php');
if(isset($_SESSION['check_login_0'])){
	$info=$_SESSION['check_login_0'];
	include_once('view/v_info.php');
}elseif(isset($_SESSION['check_login_1'])){
	$info=$_SESSION['check_login_1'];
	include_once('view/v_info.php');
}
elseif(isset($_SESSION['check_login_2'])){
	$info=$_SESSION['check_login_2'];
	include_once('view/v_info.php');
}
elseif(isset($_SESSION['check_login_3'])){
	$info=$_SESSION['check_login_3'];
	include_once('view/v_info.php');
}
else{
	include_once('view/v_logins.php');
}

include_once('view/v_menu.php');
switch ($controller) {

case 'main': //vô trang đầu tiên
	$cateIndex=  CategoryDB::get_categories_index();
	include 'view/v_index.php';
	break;
//vô trang đầu tiên
case 'login': //khi nhấn nút login
	$username = filter_input(INPUT_POST, 'username');
	$user_pass = filter_input(INPUT_POST, 'user_pass');
//MD5($pass)
	$result = userDB::check_login($username, $user_pass);

	if (empty($result)) {
		$login_message = 'You must login to view page';
		include 'view/v_index.php';
	} else {
		if ($result[0]['user_role'] == 0) {
			$_SESSION['check_login_0'] = $result[0];
			include 'controller/c_0/main_0.php';
		} elseif ($result[0]['user_role'] == 1) {
			$_SESSION['check_login_1'] = $result[0];
			include 'controller/c_1/main_1.php';
		} elseif ($result[0]['user_role'] == 2) {
			$_SESSION['check_login_2'] = $result[0];
			include 'controller/c_2/main_2.php';
		} elseif ($result[0]['user_role'] == 3) {
			$_SESSION['check_login_3'] = $result[0];
			include 'controller/c_3/main_3.php';
		}

	}

break;
case 'signup':
	include 'view/v_signups.php';
	break;
case 'save_user':
	$userID="";
	$username=filter_input(INPUT_POST,'username');
	$user_name=filter_input(INPUT_POST,'user_name');
	$user_pass=filter_input(INPUT_POST,'user_pass');
	$user_email=filter_input(INPUT_POST,'user_email');
	$user_phone=filter_input(INPUT_POST,'user_phone');
	$user_address=filter_input(INPUT_POST,'user_address');
	$user_role=filter_input(INPUT_POST,'user_role');
	$path = getcwd().'/content/images/users';
		if (isset($_FILES['user_image'])){
			$fileName = $_FILES['user_image']['name'];
			if (!empty($fileName)) {
				$source = $_FILES['user_image']['tmp_name'];
				$target = $path.'\\'.$fileName;
				$success = move_uploaded_file($source,$target);
				$user_image = $fileName;
			}
			else {
				$user_image = '';
			}
		}
	$count_result = userDB::add_user($username,$user_name,$user_pass,$user_email,$user_phone,$user_image,$user_address,$user_role);
	if ($count_result==1) {
		echo "<p> $count_result rows was inserted with ID: $username </p>";
	}
	else {
		echo "No rows were inserted";
	};
	$cateIndex=  CategoryDB::get_categories_index();
	include 'view/v_index.php';
	break;
//dieu huong san pham
case 'list_product_byID':
	$cate_id= filter_input(INPUT_GET, 'categoryID');
	$cate_name= CategoryDB:: getCategoryById($cate_id);
	$list_product= ProductDB::getProductByCategoryId($cate_id);
	include 'view/v_listproduct.php';
	break;
case 'detail_product':
	$pro_id= filter_input(INPUT_GET, 'ID');
	$pro= ProductDB::getProductById($pro_id);
	include 'view/v_detail.php';
	break;
case 'add_cart':
	$productID=filter_input(INPUT_POST, 'productID');
	$pro_name=filter_input(INPUT_POST, 'pro_name');
	$pro_image=filter_input(INPUT_POST, 'pro_image');
	$pro_price=filter_input(INPUT_POST, 'pro_price');
	$number=filter_input(INPUT_POST, 'number');
	$pro_total=(int)($pro_price)* (int)($number);
	if(!empty($_SESSION['mycart'])){
		$cart=$_SESSION['mycart'];
		// Kiểm tra lần thứ 2 mua hàng đã có id phần tử mảng hay chưa dùng hàm array_key_exists
		if(array_key_exists($productID,$cart)){
			$cart[$productID]=array(
				"productID"=> $productID,
				"pro_name" =>$pro_name,
				"pro_image" =>$pro_image,
				"pro_price"=>(int)$pro_price,
				"number"=>(int)$cart[$productID]['number']+(int)$number,
				"pro_total"=>(int)$pro_total
			);
		}else{
			$cart[$productID]=array(
				"productID"=> $productID,
				"pro_name" =>$pro_name,
				"pro_image" =>$pro_image,
				"pro_price"=>(int)$pro_price,
				"number"=>(int)$number,
				"pro_total"=>(int)$pro_total
			);
		}
	}else{
		$cart[$productID]=array(
			"productID"=> $productID,
			"pro_name" =>$pro_name,
			"pro_image" =>$pro_image,
			"pro_price"=>(int)$pro_price,
			"number"=>(int)$number,
			"pro_total"=>(int)$pro_total
		);
	}
	$_SESSION['mycart']=$cart;
	/*$sp_add=[$productID,$pro_name,$pro_image,$pro_price,$number];
	/*$_SESSION['mycart']=[$productID,$pro_name,$pro_image,$pro_price,$number];*/
	/*array_push($_SESSION['cccc'],$sp_add);
	/*session_destroy();*/
	include_once('view/v_cart.php');
	break;
case 'view_cart':
	include_once('view/v_cart.php');
	break;
case 'delete_cart':
	$ID=filter_input(INPUT_GET, 'ID');
	unset($_SESSION['mycart'][$ID]);
	include_once('view/v_cart.php');
	break;
case 'insert_order':
	$order_total=filter_input(INPUT_POST, 'order_total');
	$order_address=filter_input(INPUT_POST, 'order_address');
	$order_note=filter_input(INPUT_POST, 'order_note');
	$order_date= date("Y-m-d H:i:s");
	$order_status=filter_input(INPUT_POST, 'order_status');
	$userID=filter_input(INPUT_POST, 'userID');
	$_SESSION['ID_USER']=$userID;
	$count_result=0;
	$order_ID=OrdersDB::insertOrder($order_total,$order_address,$order_note,$order_date,$order_status,$userID);

	foreach ($_SESSION['mycart'] as $cart){
		$productID=$cart['productID'];
		$number=$cart['number'];
		$price=$cart['pro_price'];
		$count_result+=OrdersDB::insertOrderDetail($order_ID,$productID,$number,$price);
	}
	if ($count_result>=1) {
		echo "<p> $count_result rows was delete with ID: $order_ID </p>";
	}
	else {
		echo "error";
	}
	unset($_SESSION['mycart']);
	$myOrders=OrdersDB::get_orders_byUser($userID);
	include_once('view/v_my_orders.php');
	break;
case 'my_orders':
	$userID=filter_input(INPUT_GET, 'userID');
	$_SESSION['ID_USER']=$userID;
	$myOrders=OrdersDB::get_orders_byUser($userID);
	include_once('view/v_my_orders.php');
	break;
case 'my_orders_detail':
	$myOrders=OrdersDB::get_orders_byUser($_SESSION['ID_USER']);
	$order_ID=filter_input(INPUT_GET, 'order_ID');
	$detail=OrdersDB::get_orderDetailByID($order_ID);
	
	include_once('view/v_my_orders.php');
	break;
case 'huydon':
	$ID=filter_input(INPUT_GET, 'ID');
	OrdersdB::cancel_orderByID($ID);
	$myOrders=OrdersDB::get_orders_byUser($_SESSION['ID_USER']);
	include_once('view/v_my_orders.php');
	break;
case 'c_0':
	include 'controller/c_0/main_0.php';
	break;
case 'c_1':
	include 'controller/c_1/main_1.php';
	break;
case 'c_2':
	include 'controller/c_2/main_2.php';
	break;
default:
	# code...
	break;

}

//footer
include_once('view/v_footer.php');
?>