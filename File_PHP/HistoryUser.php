 <?php
    include('../DataBase/database.php');
    
 

  ?>
<!doctype html>
<html lang="en">
  <head>
       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../File_CSS/Mainpage.css">
    <link rel="stylesheet" type="text/css" href="../File_CSS/Advertisement1.css">
    <link rel="stylesheet" type="text/css" href="../File_CSS/Advertisement2.css">
    <link rel="stylesheet" type="text/css" href="../File_CSS/women.css">
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">
    <title>Lịch Sử Đặt Hàng</title>
  </head>
  <body>    
    <?php include 'PartOfWeb/HeaderBar.php';?>
    

    <?php include 'PartOfWeb/MenuBar.php'?>
    



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <div class="historyCustomer container-fluid">

        <table class="table table-striped table-bordered" >
          <thead>
            <tr>
              <th scope="col">STT</th>
              <th scope="col">Thông Tin Sản Phẩm</th>
              <th scope="col">Số Lượng Sản Phẩm</th>
              <th scope="col">Tổng Số Tiền</th>
              <th scope="col">Ngày Giờ Đặt Hàng</th>
              <th scope="col">Họ Và Tên</th>
              <th scope="col">Số Điện Thoại</th>
              <th scope="col">Địa Chỉ</th>

 
            </tr>
          </thead>
          <tbody id="user_data">

          </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
