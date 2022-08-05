<?php 
class ProductDB{
	public static function get_product(){
		 $db = Database::getDB();
		 $query = "SELECT * FROM product AS b
		 			INNER JOIN categories AS c
		 			ON c.CategoryID = b.categoryID
		 			";

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

	public static function add_product($productID,$pro_name,$pro_price,$pro_number,$pro_discount,$pro_image,$pro_date,$CategoryID,$pro_view,$pro_detail){
       $db = Database::getDB();
       $query = "INSERT INTO product(pro_name,pro_price,pro_number,pro_discount,pro_image,pro_date,CategoryID,pro_view,pro_detail)
       VALUES(:pro_name,:pro_price,:pro_number,:pro_discount,:pro_image,:pro_date,:CategoryID,:pro_view,:pro_detail)";
       try {
        $statement = $db->prepare($query);
        $statement->bindValue(":pro_name", $pro_name);
        $statement->bindValue(":pro_price",$pro_price);
        $statement->bindValue(":pro_number",$pro_number);
        $statement->bindValue(":pro_discount",$pro_discount);
        $statement->bindValue(":pro_image",$pro_image);
        $statement->bindValue(":pro_date",$pro_date);
        $statement->bindValue(":CategoryID",$CategoryID);
        $statement->bindValue(":pro_view",$pro_view);
        $statement->bindValue(":pro_detail",$pro_detail);

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
    public static  function getProductById($ID){
       $db = Database::getDB();
       $query = "SELECT * FROM product  WHERE productID=:ID";
       try {
        $statement = $db->prepare($query);
        $statement->bindValue(':ID',$ID);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_OBJ);
        $statement->closeCursor();
        return $result;

      } catch (PDOException $e) {
        $error = $e->getMessage();
        echo "Lỗi: ".$error;
        exit();
      }
      }
      public static  function getProductByCategoryId($ID){
       $db = Database::getDB();
       $query = "SELECT * FROM product  WHERE categoryID=:ID";
       try {
        $statement = $db->prepare($query);
        $statement->bindValue(':ID',$ID);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        $statement->closeCursor();
        return $result;

      } catch (PDOException $e) {
        $error = $e->getMessage();
        echo "Lỗi: ".$error;
        exit();
      }
      
      }
    public static  function getProductByCategoryId_limit($ID){
      $db = Database::getDB();
      $query = "SELECT * FROM product  WHERE categoryID=:ID limit 3";
      try {
        $statement = $db->prepare($query);
        $statement->bindValue(':ID',$ID);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_OBJ);
        $statement->closeCursor();
        return $result;

      } catch (PDOException $e) {
        $error = $e->getMessage();
        echo "Lỗi: ".$error;
        exit();
      }
    }
    public static function edit_product($productID,$pro_name,$pro_price,$pro_number,$pro_discount,$pro_image,$pro_date,$CategoryID,$pro_view,$pro_detail){
             $db = Database::getDB();
             $query = "UPDATE product SET pro_name=:pro_name,pro_price=:pro_price,pro_number=:pro_number,pro_discount=:pro_discount, pro_image=:pro_image, pro_date=:pro_date, CategoryID=:CategoryID,pro_view=:pro_view, pro_detail=:pro_detail  
             WHERE productID=:ID";
             try {
              $statement = $db->prepare($query);
              $statement->bindValue(':ID',$productID);
              $statement->bindValue(":pro_name", $pro_name);
              $statement->bindValue(":pro_price",$pro_price);
              $statement->bindValue(":pro_number",$pro_number);
              $statement->bindValue(":pro_discount",$pro_discount);
              $statement->bindValue(":pro_image",$pro_image);
              $statement->bindValue(":pro_date",$pro_date);
              $statement->bindValue(":CategoryID",$CategoryID);
              $statement->bindValue(":pro_view",$pro_view);
              $statement->bindValue(":pro_detail",$pro_detail);
              
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
    public static function deleteProductById($ID){
         $db = Database::getDB();
         $query = "DELETE FROM product WHERE productID=:ID";

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
   }
 ?>