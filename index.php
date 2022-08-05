<?php
include_once 'model/database.php';
include_once 'model/m_product.php';
include_once 'model/m_categories.php';
include_once 'model/m_orders.php';
include_once 'model/m_users.php';
include_once 'model/m_search.php';

$lifetime = 2 * 60 * 60;
$path = '/';
session_set_cookie_params($lifetime, $path);
session_start();

$login_message = '';
$role = filter_input(INPUT_POST, 'role');
if (empty($role)) {
	$role = filter_input(INPUT_GET, 'role');
	if (empty($role)) {
		$role = 'main';
	}
}

switch ($role) {
case 'main': //vô trang đầu tiên
	include 'main_client.php';
	break;
//vô trang đầu tiên
case 'signup':

	include 'view/v_signup.php';
	break;

case 'login': //khi nhấn nút login
		$username = filter_input(INPUT_POST, 'username');
		$user_pass = filter_input(INPUT_POST, 'user_pass');
//MD5($pass)
		$result = userDB::check_login($username, $user_pass);

		if (empty($result)) {
			echo "('Sai Username hoặc mật khẩu');";
			include 'main_client.php';
		} else {
			if ($result['user_role'] == 0) {
				$_SESSION['check_login_0'] = $result;
				include 'controller/c_0/main_0.php';
			} elseif ($result['user_role'] == 1) {
				$_SESSION['check_login_1'] = $result;
				include 'controller/c_1/main_1.php';
			} elseif ($result['user_role'] == 2) {
				$_SESSION['check_login_2'] = $result;
				include 'controller/c_2/main_2.php';
			} elseif ($result['user_role'] == 3) {
				$_SESSION['check_login_3'] = $result;
				include 'main_client.php';
			}

		}
	break;
case 'logout':
	unset($_SESSION['ID_USER']);
	unset($_SESSION['check_login_0']);
	unset($_SESSION['check_login_1']);
	unset($_SESSION['check_login_2']);
	unset($_SESSION['check_login_3']);
	$categories = CategoryDB::get_categories();
	include 'main_client.php';
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

?>