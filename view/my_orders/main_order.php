<?php
$login_message = '';
$ctrl_order = filter_input(INPUT_POST, 'ctrl_order');
if (empty($ctrl_order)) {
	$ctrl_order = filter_input(INPUT_GET, 'ctrl_order');
	if (empty($ctrl_order)) {
		$ctrl_order = 'main';
	}
}
$userID=filter_input(INPUT_GET, 'userID');
$myOrders=OrdersDB::get_orders_byUser($userID);
include_once('view/v_my_orders_top.php');
switch ($ctrl_order) {
case 'view':

	break;
default:

	break;

}
include_once('view/v_my_orders_top.php');
?>