<?php 

class CategoryDB{
  public static function get_categories(){
         $db = Database::getDB();
         $query = "SELECT * FROM categories";

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
      public static function get_categories_index(){
        $db = Database::getDB();
        $query = "SELECT * FROM categories Where cate_role=1 order by cate_role DESC LIMIT 3";

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
      ////////////////
  public static  function getCategoryById ($ID){
       $db = Database::getDB();
       $query = "SELECT * FROM categories  WHERE CategoryID=:ID";
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
      ///////////
  public static function deleteCategoryById($ID){
         $db = Database::getDB();
         $query = "DELETE FROM categories WHERE categoryID=:ID";

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
            /////////
  public static function edit_category($ID,$categoryname,$cate_img,$cate_role){
             $db = Database::getDB();
             $query = "UPDATE categories SET categoryname=:categoryname,cate_img=:cate_img,cate_role=:cate_role WHERE categoryID=:ID";
             try {
              $statement = $db->prepare($query);
              $statement->bindValue(':ID',$ID);
              $statement->bindValue(':categoryname',$categoryname);
              $statement->bindValue(':cate_img',$cate_img);
              $statement->bindValue(':cate_role',$cate_role);
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
           /////////////////////
  public static function add_category($categoryID,$categoryname,$cate_img,$cate_role ){
           $db = Database::getDB();
           $query = "INSERT INTO categories(categoryname,cate_img,cate_role)
           VALUES(:categoryname,:cate_img,:cate_role)";
           try {
            $statement = $db->prepare($query);
          
            $statement->bindValue(":categoryname",$categoryname);
            $statement->bindValue(":cate_img",$cate_img);
            $statement->bindValue(":cate_role",$cate_role);

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