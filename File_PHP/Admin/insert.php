<?php 
   include('../../DataBase/database.php');

   if(isset($_POST['nameProduct']) !=''){
   	  
   	$nameProduct = $_POST['nameProduct'];
      $nhanhieu = $_POST['nhanhieu'];
      $color = $_POST['color'];
      $chatlieu = $_POST['chatlieu'];
      $theLoai = $_POST['theLoai'];
      $danhgia = $_POST['danhgia'];
      $giatien = $_POST['giatien']; 
      $thuMuc = $_POST['thuMuc'];
      $filename_Folder = $_POST['hinhAnh']; 
   	$sql = "INSERT INTO `product`( `nameProduct`,`brandName`,`color`,`material`,`category`,`rate`,`price`,`thuMucBoAnh`,`img`) VALUES ('$nameProduct','$nhanhieu','$color','$chatlieu','$theLoai','$danhgia','$giatien','$thuMuc','$filename_Folder')";
   	$check =mysqli_query($database,$sql);
	   if ($check){ 

	  	  echo "Nhập Thông Tin Thành Công";
	   }
	   else{
	  	  echo "Sản Phẩm Này Đã Có Rồi";
	   }

   }
   else{
   	echo "Xin Vui Lòng Nhập Lại";
   }
?>
