<?php
class userDB {
	public static function getusers() {
		$db = Database::getDB();
		$query = "SELECT * FROM users ";

		try {
			$statement = $db->prepare($query);
			$statement->execute();
			$result = $statement->fetchAll(PDO::FETCH_OBJ);
			return $result;

		} catch (PDOException $e) {
			$error = $e->getMessage();
			echo "Lỗi: " . $error;
			exit();
		}
	}
	public static function getUserById($ID){
		$db = Database::getDB();
		$query = "SELECT * FROM users WHERE userID=:ID ";

		try {
			$statement = $db->prepare($query);
			$statement->bindValue(':ID',$ID);
			$statement->execute();
			$result = $statement->fetch(PDO::FETCH_OBJ);
			$statement->closeCursor();
			return $result;

		} catch (PDOException $e) {
			$error = $e->getMessage();
			echo "Lỗi: " . $error;
			exit();
		}
	}
	public static function add_user($username,$user_name,$user_pass,$user_email,$user_phone,$user_image,$user_address,$user_role){
		$db = Database::getDB();
		$query= "INSERT INTO users(username,user_name,user_pass,user_email,user_phone,user_image,user_address,user_role)
		VALUES(:username,:user_name,:user_pass,:user_email,:user_phone,:user_image,:user_address,:user_role)";

		try{
			$statement=$db->prepare($query);
			$statement->bindValue(":username", $username);
			$statement->bindValue(":user_name", $user_name);
			$statement->bindValue(":user_pass", $user_pass);
			$statement->bindValue(":user_email", $user_email);
			$statement->bindValue(":user_phone", $user_phone);
			$statement->bindValue(":user_image", $user_image);
			$statement->bindValue(":user_address", $user_address);
			$statement->bindValue(":user_role", $user_role);

			$statement ->execute();
   				$count = $statement->rowCount(); //xac định số dòng được thêm vào
   				$statement->closeCursor();//đóng kết nối tới database
   				return $count;

        }catch (PDOException $e) {
           $error = $e->getMessage();
           echo "Lỗi: ".$error;
           exit();
         }
	
	}
	public static function check_login($username, $user_pass) {
		$db = Database::getDB();
		$query = "SELECT * FROM users WHERE username = :username AND user_pass = :user_pass ";
		try {
			$statement = $db->prepare($query);
			$statement->bindValue(':username', $username);
			$statement->bindValue(':user_pass', $user_pass);
			$statement->execute();
			$result = $statement->fetch();
			return $result;

		} catch (PDOException $e) {
			$error = $e->getMessage();
			echo "Lỗi: " . $error;
			exit();
		}
	}
	public static function deleteUserById($ID){
		$db = Database::getDB();
		$query ="DELETE FROM users WHERE userID=:ID";

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
	public static function edit_user($userID,$username,$user_name,$user_pass,$user_email,$user_phone,$user_image,$user_address,$user_role){
		$db = Database::getDB();
		$query="UPDATE users SET username=:username,user_name=:user_name,user_pass=:user_pass,user_email=:user_email,user_phone=:user_phone,user_image=:user_image,user_address=:user_address,user_role=:user_role
		WHERE userID=:ID";

		try{
			$statement=$db->prepare($query);
			$statement->bindValue(":ID", $userID);
			$statement->bindValue(":username", $username);
			$statement->bindValue(":user_name", $user_name);
			$statement->bindValue(":user_pass", $user_pass);
			$statement->bindValue(":user_email", $user_email);
			$statement->bindValue(":user_phone", $user_phone);
			$statement->bindValue(":user_image", $user_image);
			$statement->bindValue(":user_address", $user_address);
			$statement->bindValue(":user_role", $user_role);

			$statement ->execute();
				$count = $statement->rowCount(); //xac định số dòng được thêm vào
				$statement->closeCursor();//đóng kết nối tới database
				return $count;

		}catch (PDOException $e) {
		$error = $e->getMessage();
		echo "Lỗi: ".$error;
		exit();
		}
	}
	public static function sign($sign) {
		$db = Database::getDB();
		$query = "INSERT INTO users(email, pass)
       VALUES(:email,:pass)";

		try {
			$statement = $db->prepare($query);
			$statement->bindValue(":email", $sign['email']);
			$statement->bindValue(":pass", $sign['pass']);
			$statement->execute();
			$count = $statement->rowCount(); //xac định số dòng được thêm vào
			$statement->closeCursor(); //đóng kết nối tới database
			return $count;

		} catch (PDOException $e) {
			$error = $e->getMessage();
			echo "Lỗi: " . $error;
			exit();
		}
	}

}
?>