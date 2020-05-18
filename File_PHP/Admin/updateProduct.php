 
 <?php
  include('../../DataBase/database.php');
  
  if(isset($_POST["id"]) != ''){
  	$id = $_POST["id"] ;
    $nameProduct = $_POST['updateNameProduct'];
    $brandProduct = $_POST['brandProduct'];
    $color = $_POST['color'];
    $chatLieu = $_POST['chatLieu'];
    $theLoai = $_POST['theLoai'];
    $danhGiaSao = $_POST['danhGiaSao'];
    $price = $_POST['price'];
    $gioiTinh = $_POST['gioiTinh'];
    $img = $_POST['img'];
    $thuMucAnh = $_POST['thuMucAnh'];
   	$sql = "UPDATE product SET nameProduct = '$nameProduct',brandName = '$brandProduct',color = '$color',material = '$chatLieu',category = '$theLoai',rate = '$danhGiaSao',price = '$price',Gender = '$gioiTinh',img = '$img',thuMucBoAnh = '$thuMucAnh'  WHERE productid = $id";
   	
    $check =mysqli_query($database,$sql);
    if ($check){
    	echo ('Cật Nhật Thành Công') ;
    }
    else{
    	echo "Cập NHật Không Thành Công";
    }
  }
  else{
    echo "Vui Lòng Đầy Đủ Thông Tin Để Cập Nhật";
  }
