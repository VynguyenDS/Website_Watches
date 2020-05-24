 <?php
     require('../DataBase/database.php');
    
 

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
    <div>
      <input type="text" id="orderId" placeholder="Nhập mã đơn hàng vào đây"><button onclick="showorder()">Tìm đơn hàng</button>
    </div>
    <div class="historyCustomer container-fluid">

        <table class="table table-striped table-bordered" >
          <thead>
            <tr>
              <th scope="col">Mã Đơn Hàng</th>
              <th scope="col">Tổng số tiền đơn hàng</th>
              <th scope="col">Ngày Đặt Hàng</th>
              <th scope="col">Họ Và Tên</th>
              <th scope="col">Số Điện Thoại</th>
              <th scope="col">Địa Chỉ</th>
              <th scope="col">Thông Tin Sản Phẩm</th>
              <th scope="col">Số Lượng Sản Phẩm</th>
              <th scope="col">Hình Sản Phẩm</th>
              <th scope="col">Tổng Số Tiền của sản phẩm</th>
              


 
            </tr>
          </thead>
          <tbody id="user_data">
            <?php if(isset($_SESSION["username"])){
              $username = $_SESSION["username"];
              
              $sel_query="SELECT * FROM `customer`,`order` WHERE customer.idCustomer = order.idCustomer 
              and userName = '$username';";
              $result = mysqli_query($database,$sel_query);
              while($row = mysqli_fetch_assoc($result) ) {
                $id_order = $row['orderID'];
                $sel_order="Select * from `orderitem`,`product` where orderitem.product_id = product.productid and oderID='$id_order';";
                $result_order = mysqli_query($database,$sel_order);
                $cols = mysqli_num_rows($result_order);
                
                while($row_col = mysqli_fetch_assoc($result_order)){
              ?>
              <tr>
                <td scope="col" rowspan="1"><?= $id_order?></td>

                <td scope="col" rowspan="1"><?= $row['OrderDate']?></td>
                <td scope="col" rowspan="1"><?= $row['FullName']?></td>
                <td scope="col" rowspan="1"><?= $row['Telephone']?></td>
                <td scope="col" rowspan="1"><?= $row['address']?></td>
                <td scope="col" >
                    Tên Sản Phẩm: <?= $row_col['nameProduct']?><br>
                    Nhà Sản Xuất: <?= $row_col['brandName']?><br>
                    Màu : <?= $row_col['color']?><br>
                    Chất Liệu: <?= $row_col['material']?><br>
                    Thể Loại :<?= $row_col['category']?>
                    

                </td>
                <td scope="col" ><?= $row_col['NumberOfOrders'] ?></td>
                <td scope="col" ><img class="card-img-top rounded " src="<?=$row_col["img"]?>" alt="Card image cap"></td>
                <td scope="col" ><?= number_format($row_col['price']*$row_col['NumberOfOrders']) ?> VND</td>
                </tr>
              
              


            <?php }}}?>
          </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
    function showorder()
    {
      var search =  document.getElementById("orderId").value;

      $.post("searchHistory.php",
    {
      
      id : search,
    },
    function(data,status){
      alert(data);
      if(status =="success")
      {

        if(data !="Fail"){
        document.getElementById('user_data').innerHTML ="";
        document.getElementById('user_data').innerHTML = data;}
        else{alert("Không tìm thấy kết quả")}

      }
      
    });
    }
  </script>
</html>
