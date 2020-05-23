<?php 
   include('../../DataBase/database.php');
   
   if(isset($_GET['fullName']) !=''){
   	  
   	$fullName = $_POST['fullName'];
      $Email = $_POST['Email'];
      $danhGia = $_POST['danhGia'];
      $messager = $_POST['messager'];
/*      $getDateTime = $_POST['getDateTime'];*/
   	$sql = "INSERT INTO `feedback`(`fullName`,`email`,`rate`,`comment`) VALUES ('$fullName','$Email','$danhGia','$messager')";
   	$check =mysqli_query($database,$sql);
	   if ($check){ 

	  	  echo "Gửi Thành Công";
	   }
	   else{
	  	  echo "Vui Lòng Kiểm Tra Thông Tin ";
	   }

   }
   else{
   	echo "Xin Vui Lòng Nhập Lại";
   }
?>
