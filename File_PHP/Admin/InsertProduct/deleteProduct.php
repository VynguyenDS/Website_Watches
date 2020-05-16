   <?php
   include('../../../DataBase/database.php');
  
   if(isset($_POST['id']) !=''){
   $sql = "DELETE FROM product WHERE productid = '".$_POST["id"]."'";
   $check =mysqli_query($database,$sql);
   if($check){
   	  echo 'Xoá Thành Công';
   } 
   else{
   	echo "Xoá Không Thành Công";
   }
   }

  ?>