<?php 
class OrdersDB{
    public static function get_orders(){
        $db = Database::getDB();
		 $query = "SELECT * FROM orders order by order_ID DESC";

		 try {
		  $statement = $db->prepare($query);
		  $statement -> execute();
		  $result = $statement->fetchAll(PDO::FETCH_OBJ);
		  return $result;

		} catch (PDOException $e) {
		  $error = $e->getMessage();
		  echo "Lỗi: ".$error;
		  exit();
		}
    }
	public static function get_orderByID($ID){
        $db = Database::getDB();
		 $query = "SELECT * FROM orders WHERE order_ID=:ID";

		 try {
		  $statement = $db->prepare($query);
		  $statement->bindValue(':ID',$ID);
		  $statement -> execute();
		  $result = $statement->fetch(PDO::FETCH_OBJ);
		  return $result;

		} catch (PDOException $e) {
		  $error = $e->getMessage();
		  echo "Lỗi: ".$error;
		  exit();
		}
    }
	public static function get_orderDetailByID($ID){
        $db = Database::getDB();
		 $query = "SELECT * FROM orders_detail WHERE order_ID=:ID";

		 try {
		  $statement = $db->prepare($query);
		  $statement->bindValue(':ID',$ID);
		  $statement -> execute();
		  $result = $statement->fetchAll(PDO::FETCH_OBJ);
		  return $result;

		} catch (PDOException $e) {
		  $error = $e->getMessage();
		  echo "Lỗi: ".$error;
		  exit();
		}
    }
	public static function get_orders_byUser($ID){
        $db = Database::getDB();
		 $query = "SELECT * FROM orders Where userID =:ID order by order_ID DESC";

		 try {
		$statement = $db->prepare($query);
		  $statement->bindValue(':ID',$ID);
		  $statement -> execute();
		  $result = $statement->fetchAll(PDO::FETCH_OBJ);
		  return $result;


		} catch (PDOException $e) {
		  $error = $e->getMessage();
		  echo "Lỗi: ".$error;
		  exit();
		}
    }
    public static function get_orders_waiting(){
        $db = Database::getDB();
		 $query = "SELECT * FROM orders Where order_status =1 order by order_ID DESC";

		 try {
		  $statement = $db->prepare($query);
		  $statement -> execute();
		  $result = $statement->fetchAll(PDO::FETCH_OBJ);
		  return $result;


		} catch (PDOException $e) {
		  $error = $e->getMessage();
		  echo "Lỗi: ".$error;
		  exit();
		}
    }
	public static function confirm_orderByID($ID){
		$db = Database::getDB();
		$query = "UPDATE orders SET order_status=2 WHERE order_ID=:ID";
		try {
		$statement = $db->prepare($query);
		$statement->bindValue(':ID',$ID);
		$statement->execute();
		$count = $statement->rowCount(); //xac định số dòng được thêm vào
		$statement->closeCursor();//đóng kết nối tới database
		return $count;
		} catch (PDOException $e) {
		$error = $e->getMessage();
		echo "Lỗi: ".$error;
		exit();
		}
   }
   public static function cancel_orderByID($ID){
	$db = Database::getDB();
	$query = "UPDATE orders SET order_status=5 WHERE order_ID=:ID";

	try {
	$statement = $db->prepare($query);
	$statement->bindValue(':ID',$ID);
	$statement->execute();
	$count = $statement->rowCount(); //xac định số dòng được thêm vào
	$statement->closeCursor();//đóng kết nối tới database
	return $count;
	} catch (PDOException $e) {
	$error = $e->getMessage();
	echo "Lỗi: ".$error;
	exit();
	}
}
   public static function deleteOrderById($ID){
	$db = Database::getDB();
	$query = "DELETE FROM orders WHERE order_ID=:ID";

	try {
   $statement = $db->prepare($query);
   $statement->bindValue(':ID',$ID);
   $statement->execute();
  $count = $statement->rowCount(); //xac định số dòng được thêm vào
   $statement->closeCursor();//đóng kết nối tới database
   return $count;
 } catch (PDOException $e) {
   $error = $e->getMessage();
   echo "Lỗi: ".$error;
   exit();
 }
}
public static function updateOrder($order_ID,$order_address,$order_note,$order_date,$order_status){
	$db = Database::getDB();
	$query="UPDATE orders SET order_address=:order_address,order_note=:order_note,order_date=:order_date,order_status=:order_status
	WHERE order_ID=:order_ID";
	try {
		$statement = $db->prepare($query);
		$statement->bindValue(':order_ID',$order_ID);
		$statement->bindValue(":order_address", $order_address);
		$statement->bindValue(":order_note",$order_note);
		$statement->bindValue(":order_date",$order_date);
		$statement->bindValue(":order_status",$order_status);
		$statement ->execute();
		$count = $statement->rowCount();
		  $statement->closeCursor();//đóng kết nối tới database         
		  return $count;

		} catch (PDOException $e) {
		 $error = $e->getMessage();
		 echo "Lỗi: ".$error;
		 exit();
	   }
}
public static function insertOrder($order_total,$order_address,$order_note,$order_date,$order_status,$userID){
	$db = Database::getDB();
	$query= "INSERT INTO orders(order_total,order_address,order_note,order_date,order_status,userID)
	VALUES(:order_total,:order_address,:order_note,:order_date,:order_status,:userID)";
	try {
        $statement = $db->prepare($query);
        $statement->bindValue(":order_total", $order_total);
        $statement->bindValue(":order_address",$order_address);
        $statement->bindValue(":order_note",$order_note);
        $statement->bindValue(":order_date",$order_date);
        $statement->bindValue(":order_status",$order_status);
        $statement->bindValue(":userID",$userID);
        $statement ->execute();
   		$count = $statement->rowCount(); //xac định số dòng được thêm vào	
   		return $db->lastInsertId();

         } catch (PDOException $e) {
           $error = $e->getMessage();
           echo "Lỗi: ".$error;
           exit();
         }
}
public static function insertOrderDetail($order_ID,$productID,$number,$price){
	$db = Database::getDB();
	$query= "INSERT INTO orders_detail(order_ID,productID,number,price)
	VALUES(:order_ID,:productID,:number,:price)";
	try {
		$productID=5;  $statement = $db->prepare($query);
        $statement->bindValue(":order_ID", $order_ID);
        $statement->bindValue(":productID",$productID);
        $statement->bindValue(":number",$number);
        $statement->bindValue(":price",$price);;
        $statement ->execute();
		$count = $statement->rowCount(); //xac định số dòng được thêm vào
		$statement->closeCursor();//đóng kết nối tới database
		return $count;

         } catch (PDOException $e) {
           $error = $e->getMessage();
           echo "Lỗi: ".$error;
           exit();
         }
}
}
?>