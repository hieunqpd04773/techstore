<?php 
// $dsn = 'mysql:host=localhost;dbname=managebook';
// 	$username = 'root';
// 	$password = '';
// 	$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"); 
// 	try {
// 		$db = new PDO($dsn, $username,$password,$options);
		
// 	}
// 	catch (PDOException $e){
// 		$error = $e->getMessage();
// 		echo "kết nối lỗi: ".$error;
// 		exit();
// 	}

class Database {
			private static $dsn = 'mysql:host=localhost:3306;dbname=hieustore';
			private static $username = 'root';
			private static $password = '';
			private static $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
											PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"); 
			private static $db;
			private function __construct () {

			}
			public static function getDB(){
				if(!isset(self::$db)){
					try {
                      self::$db = new PDO(self::$dsn, self::$username, self::$password,self::$options);
					}
					catch (PDOException $e){
					$error = $e->getMessage();
					echo "kết nối lỗi: ".$error;
					exit();
					}

				}
			return self::$db;
			}
}

 ?>
