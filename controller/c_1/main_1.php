<?php 
$action = filter_input(INPUT_POST, 'action');
if (empty($action)) {
	$action = filter_input(INPUT_GET, 'action');
	if (empty($action)) {
		$action = 'default';
	}
}
include_once('view/admin_1/header.php');
switch ($action) {
		case 'default':
		include('view/admin_1/default.php');
		break;
///////////	het default	///////////////////
case 'list_products':
		$categorys =  CategoryDB::get_categories();
		$products = ProductDB::get_product();
		include('view/admin_1/list_pro.php');
		break;
case 'edit_product':
		$productID = filter_input(INPUT_GET,'ID');
		$category =  CategoryDB::get_categories();
		$product = ProductDB::getProductById($productID);
		$categoryID = filter_input(INPUT_GET,'categoryID');		
		include('view/admin_1/edit_pro.php');
		break;
case 'update_product':
	$productID = filter_input(INPUT_POST,'productID');
	$pro_name = filter_input(INPUT_POST,'pro_name');
	$pro_price = filter_input(INPUT_POST,'pro_price');
	$pro_number = filter_input(INPUT_POST,'pro_number');
	$pro_discount = filter_input(INPUT_POST,'pro_discount');
	$pro_date = filter_input(INPUT_POST,'pro_date');
	$CategoryID = filter_input(INPUT_POST,'CategoryID');
	$pro_view = filter_input(INPUT_POST,'pro_view');
	$pro_detail = filter_input(INPUT_POST,'pro_detail');
		///
		$path = getcwd().'/content/images/products';
		if (isset($_FILES['pro_image'])){
			$fileName = $_FILES['pro_image']['name'];
			if (!empty($fileName)) {
				$source = $_FILES['pro_image']['tmp_name'];
				$target = $path.'\\'.$fileName;
				$success = move_uploaded_file($source,$target);
				$pro_image = $fileName;
			}
			else {
				$pro_image = filter_input(INPUT_POST,'pro_image1');
			}
		}

		$count_result = ProductDB::edit_product($productID,$pro_name,$pro_price,$pro_number,$pro_discount,$pro_image,$pro_date,$CategoryID,$pro_view,$pro_detail);
		if ($count_result==1) {		 	
			echo "<p> Đã Update  $count_result mẫu tin thành công</p>";					 	
		} else {echo "Lỗi";}
		$categorys =  CategoryDB::get_categories();
		$products = ProductDB::get_product();
		include('view/admin_1/list_pro.php');
		break;
case 'delete_product':
		$productID = filter_input(INPUT_GET,'ID');
		$count_result = ProductDB::deleteProductById($productID);
		if ($count_result==1) {
			echo "<p> $count_result rows was delete with ID: $productID </p>";
		}
		else {
			echo "error";
		}
		$categorys =  CategoryDB::get_categories();
		$products = ProductDB::get_product();
		include('view/admin_1/list_pro.php');
		break;
		
case 'add_product':
		$category =  CategoryDB::get_categories();
		include('view/admin_1/add_pro.php');
		break;
case 'save_product':
		$productID = "";
		$pro_name = filter_input(INPUT_POST,'pro_name');
		$pro_price = filter_input(INPUT_POST,'pro_price');
		$pro_number = filter_input(INPUT_POST,'pro_number');
		$pro_discount = filter_input(INPUT_POST,'pro_discount');
		$pro_date = filter_input(INPUT_POST,'pro_date');
		$CategoryID = filter_input(INPUT_POST,'CategoryID');
		$pro_view = filter_input(INPUT_POST,'pro_view');
		$pro_detail = filter_input(INPUT_POST,'pro_detail');
		$path = getcwd().'/content/images/products';
		if (isset($_FILES['pro_image'])){
			$fileName = $_FILES['pro_image']['name'];
			if (!empty($fileName)) {
				$source = $_FILES['pro_image']['tmp_name'];
				$target = $path.'\\'.$fileName;
				$success = move_uploaded_file($source,$target);
				$pro_image = $fileName;
			}
			else {
				$pro_image = '';
			}
		}

		$count_result = ProductDB::add_product($productID,$pro_name,$pro_price,$pro_number,$pro_discount,$pro_image,$pro_date,$CategoryID,$pro_view,$pro_detail);
		if ($count_result==1) {
			echo "<p> $count_result rows was inserted with ID: $productID </p>";
		}
		else {
			echo "No rows were inserted";
		}
		$categorys =  CategoryDB::get_categories();
		$products = ProductDB::get_product();
		include('view/admin_1/list_pro.php');
		break;
	case 'search_book':
	$name_search = filter_input(INPUT_POST,'name_search');
	if(empty($name_search ))
	{
		$book=array();	
	}
	else {

		$book=searchDB::search_book($name_search);
	  
	}
	
	include_once ('view/v_0/search_book.php');
	break;
//////////////////// hết product///////////
case 'list_category':
		$categories = CategoryDB::get_categories();
		include('view/admin_1/list_cate.php');
		break;
case 'edit_category':
		$ID = filter_input(INPUT_GET, 'ID');
		$category =  CategoryDB::getCategoryById ($ID);

		include('view/admin_1/edit_cate.php');
		break;
case 'update_category':
		$categoryID = filter_input(INPUT_POST, 'categoryID');
		$categoryname = filter_input(INPUT_POST, 'categoryname');
		$cate_role = filter_input(INPUT_POST, 'cate_role');
		$path = getcwd().'/content/images/products';
		if (isset($_FILES['cate_img'])){
			$fileName = $_FILES['cate_img']['name'];
			if (!empty($fileName)) {
				$source = $_FILES['cate_img']['tmp_name'];
				$target = $path.'\\'.$fileName;
				$success = move_uploaded_file($source,$target);
				$cate_img = $fileName;
			}
			else {
				$cate_img = filter_input(INPUT_POST, 'cate_img1');
			}
		}

		$count_result = CategoryDB::edit_category($categoryID ,$categoryname,$cate_img,$cate_role);
		if ($count_result==1) {		 	
			echo "<p> Đã Update  $count_result mẫu tin thành công</p>";					 	
		} else {echo "Lỗi";}
		$categories = CategoryDB::get_categories();
		include('view/admin_1/list_cate.php');
		break;
case 'delete_category':
		$ID = filter_input(INPUT_GET, 'ID');
		$count_result = CategoryDB::deleteCategoryById ($ID);
		if ($count_result==1) {
			echo "<p> $count_result rows was delete with ID: $ID </p>";
		}
		else {
			echo "error";
		}
		break;
case 'add_category':
		include('view/admin_1/add_cate.php');
		break;
case 'save_category':
		$categoryID = "";
		$categoryname = filter_input(INPUT_POST, 'categoryname');
		$cate_role = filter_input(INPUT_POST, 'cate_role');

		$path = getcwd().'/content/images/products';
		if (isset($_FILES['cate_img'])){
			$fileName = $_FILES['cate_img']['name'];
			if (!empty($fileName)) {
				$source = $_FILES['cate_img']['tmp_name'];
				$target = $path.'\\'.$fileName;
				$success = move_uploaded_file($source,$target);
				$cate_img = $fileName;
			}
			else {
				$cate_img = '';
			}
		}

		$count_result = CategoryDB::add_category($categoryID ,$categoryname,$cate_img,$cate_role );
		if ($count_result==1) {
			echo "<p> $count_result rows was inserted with ID: $categoryID </p>";
		}
		else {
			echo "No rows were inserted";
		}
		break;
case 'search_category':
		$name_search = filter_input(INPUT_POST,'name_search');
	if(empty($name_search ))
	{
		$categories=array();	
	}
	else {

		$categories=searchDB::search_category($name_search);
		if(empty($categories)) {
			echo "Không Tìm Thấy Vui Lòng Tìm Lại!!";
		}
	  
	}
	
	include_once ('view/v_0/search_category.php');
	break;
/////////////	hết category	//////////////////////

//////////////// start user /////////////////
case 'add_user':
	include('view/admin_1/add_user.php');
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
	}
	$users= userDB::getusers();
	include('view/admin_1/list_users.php');
	break;
case 'list_users':
	$users= userDB::getusers();
	include('view/admin_1/list_users.php');
	break;
case 'delete_user':
	$ID = filter_input(INPUT_GET, 'ID');
	$count_result = userDB::deleteUserById ($ID);
	if ($count_result==1) {
		echo "<p> $count_result rows was delete with ID: $ID </p>";
	}
	else {
		echo "error";
	}
	$users= userDB::getusers();
	include('view/admin_1/list_users.php');
	break;
case 'edit_user':
	$ID = filter_input(INPUT_GET, 'ID');
	$user= userDB::getUserById($ID);
	include('view/admin_1/edit_user.php');
	break;
case 'update_user':
	$userID=filter_input(INPUT_POST,'userID');
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
				$user_image = filter_input(INPUT_POST,'user_image1');
			}
		}
	$count_result = userDB::edit_user($userID,$username,$user_name,$user_pass,$user_email,$user_phone,$user_image,$user_address,$user_role);
	if ($count_result==1) {
		echo "<p> $count_result rows was updated with ID: $username </p>";
	}
	else {
		echo "No rows were updated";
	}
	$users= userDB::getusers();
	include('view/admin_1/list_users.php');
	break;
///////////////////// ORDERS /////////////////////////
case 'list_orders':
	$orders= OrdersDB:: get_orders();
	include('view/admin_1/list_orders.php');
	break;
case 'wait_orders':
	$orders= OrdersDB:: get_orders_waiting();
	include('view/admin_1/list_orders_confirm.php');
	break;
case 'confirm_order':
	$ID= filter_input(INPUT_GET,'ID');
	$count_result = OrdersDB::confirm_orderByID($ID);
	if ($count_result==1) {
		echo "<p> $count_result Đơn hàng vừa được xác nhận với ID: $ID </p>";
	}
	else {
		echo "error";
	}
	$orders= OrdersDB:: get_orders();
	include('view/admin_1/list_orders.php');
	break;
case 'detail_order':
	$ID=filter_input(INPUT_GET,'ID');
	$details= OrdersDB:: get_orderDetailByID($ID);
	include('view/admin_1/detail_order.php');
	break;
case 'delete_order':
	$ID=filter_input(INPUT_GET,'ID');
	$count_result = OrdersDB::deleteOrderById ($ID);
	if ($count_result==1) {
		echo "<p> $count_result Order was delete with ID: $ID </p>";
	}
	else {
		echo "error";
	}
	$orders= OrdersDB:: get_orders();
	include('view/admin_1/list_orders.php');
	break;
case 'search_receipt':
		$name_search = filter_input(INPUT_POST,'name_search');
	if(empty($name_search ))
	{
		$receipt=array();	
	}
	else {

		$receipt=searchDB::search_receipt($name_search);
		
		if(empty($receipt)) {
			
			echo "Không Tìm Thấy Vui Lòng Tìm Lại!!";
		}
		else {
			
		   $student = studentDB::getStudentByID($receipt[0]->cardID);
		}
	  
	}
	
	include_once ('view/v_0/search_receipt.php');
	break;
/////////////	hết receipt	//////////////////////
		 default:
		# code...
		 break;
		}
		include_once('view/admin_1/footer.php');


		?>