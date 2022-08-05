<?php 
class searchDB{
  public static function search_book($value){
         $db = Database::getDB();
         // $query = "SELECT * FROM books WHERE name LIKE :value";
         $query = "SELECT * FROM books AS b
          INNER JOIN categories AS c
          ON c.CategoryID = b.categoryID
          WHERE name LIKE :value
          ";
         try {
          $statement = $db->prepare($query);
          $statement->bindValue(":value", "%$value%");
          $statement -> execute();
          $result = $statement->fetchAll(PDO::FETCH_OBJ);
          return $result;
        } catch (PDOException $e) {
          $error = $e->getMessage();
          echo "Lỗi: ".$error;
          exit();
        }
      }

  public static function search_student($value){
         $db = Database::getDB();
         $query = "SELECT * FROM students WHERE name LIKE :value";
         
         try {
          $statement = $db->prepare($query);
          $statement->bindValue(":value", "%$value%");
          $statement -> execute();
          $result = $statement->fetchAll(PDO::FETCH_OBJ);
          return $result;
        } catch (PDOException $e) {
          $error = $e->getMessage();
          echo "Lỗi: ".$error;
          exit();
        }
      }
    
     public static function search_category($value){
         $db = Database::getDB();
         $query = "SELECT * FROM categories WHERE categoryname LIKE :value";
         
         try {
          $statement = $db->prepare($query);
          $statement->bindValue(":value", "%$value%");
          $statement -> execute();
          $result = $statement->fetchAll(PDO::FETCH_OBJ);
          return $result;
        } catch (PDOException $e) {
          $error = $e->getMessage();
          echo "Lỗi: ".$error;
          exit();
        }
      }
      public static function search_receipt($value){
         $db = Database::getDB();
         $query = "SELECT * FROM receipts WHERE cardID LIKE :value";
         
         try {
          $statement = $db->prepare($query);
          $statement->bindValue(":value", "%$value%");
          $statement -> execute();
          $result = $statement->fetchAll(PDO::FETCH_OBJ);
          return $result;
        } catch (PDOException $e) {
          $error = $e->getMessage();
          echo "Lỗi: ".$error;
          exit();
        }
      }
    }
 ?>