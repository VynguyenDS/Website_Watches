<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="../File_CSS/Login.css">
    <link rel="stylesheet" type="text/css" href="../File_CSS/Mainpage.css">
    <link rel="stylesheet" type="text/css" href="../File_CSS/Advertisement1.css">
    <link rel="stylesheet" type="text/css" href="../File_CSS/Advertisement2.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
  
    <title>ĐỒNG HỒ HƯNG BA</title>
  </head>
  <style type="text/css">
          body {font-family: Arial, Helvetica, sans-serif;}
      * {box-sizing: border-box;}

      input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
      }

      input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      input[type=submit]:hover {
        background-color: #45a049;
      }

      .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
      }
</style>
</head>
  </style>
  <body>
        <?php include 'PartOfWeb/HeaderBar.php';?>
        <div class="navbar_menu container-fluid" style="float: left;">
      <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="Mainpage.php"><img src="../Image/Brand/logo.png" class="rounded"></a>
            <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="CustomerInform.php">
                          <span><b>KHÁCH HÀNG</b></span><span class="sr-only">(current)</span>
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="InformOrder.php">
                          <span><b>THÔNG TIN ĐẶT HÀNG</b></span>
                    </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="MainpageAdmin.php">
                    <span ><b>ĐỒNG HỒ</b></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Glasses.php">
                    <span>
                      <b>KÍNH MẮT</b>
                    </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Phukien.php">
                    <span ><b>PHỤ KIỆN</b></span>
                  </a>
                </li>
            </ul>
            <div class="form-inline my-2 my-lg-0" >
              <input class="form-control mr-sm-2" id="search_input" type="search" placeholder="Search" aria-label="Search"  oninput ="LoadProduct()">
              <button class="btn btn-outline-success my-2 my-sm-0"  onclick="LoadProductSearch()">Search</button>
            </div>
      </div>
      </nav>
      <div>
    <span>From</span><input type="date" id="from">
    <span>To</span><input type="date" id="to"> <button class="btn btn-outline-success my-2 my-sm-0"  onclick="showorder()">Tìm Kiếm</button>
    </div>
    </div>

    <!--Header bar have features login and dilivery -->
    <div class="website_mainpage">


    <div class="infCustomer container-fluid" id="change">

        <table class="table table-striped table-bordered" >
          <thead>
            <tr>
              <th scope="col">Mã Đơn Hàng</th>
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
            <?php 
              $numorder = 0;
              $numsale = 0;
              $TDT = 0;
              $sel_query="SELECT * FROM `customer`,`order` WHERE customer.idCustomer = order.idCustomer ;";
              $result = mysqli_query($database,$sel_query);
              while($row = mysqli_fetch_assoc($result) ) {
                $id_order = $row['orderID'];
                $sel_order="SELECT * from `orderitem`,`product` where orderitem.product_id = product.productid and oderID='$id_order';";
                $result_order = mysqli_query($database,$sel_order);
                $cols = mysqli_num_rows($result_order);
                $numorder ++;
                $TDT = $TDT + $row['total'];
                
                while($row_col = mysqli_fetch_assoc($result_order)){
                  $numsale = $numsale+$row_col['NumberOfOrders'];
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
              
              


            <?php }}?>
          </tbody>
        </table>
        <div class="container-fluid" id="detail">
      <div>Số Đơn Hàng: <span id="numeberorder"><?= $numorder?></span> Đơn Hàng , Số Sản Phẩm Được Bán:<span id="numbersale"><?= $numsale?></span> Sản Phẩm , Tổng Doanh thu<span id="datetd"> Trước Đến Nay</span> Là :<span id="TDT"><?= $TDT?></span> VND.</div>
    </div>

    </div>

    


    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
    function showorder()
    {
      var tu =  document.getElementById("from").value;
      var den = document.getElementById("to").value;
      $.post("Admin/dataOrder.php",
    {
      
      from : tu,
      to : den,
      style:"orer",
    },
    function(data,status){
      if(status =="success")
      {
        if(data !="Fail"){
        document.getElementById('change').innerHTML ="";
        document.getElementById('change').innerHTML = data;}
        else{alert("Không tìm thấy kết quả")}

      }
      
    });
    
    }
  </script>
  </body>
  

</html>
<!--Hello -->
<!--https://www.fossil.com/en-us/watches/mens-watches/-->