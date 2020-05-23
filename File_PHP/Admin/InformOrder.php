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
    
        <?php include '../../PartOfWeb/HeaderBar.php';?>
        <div class="navbar_menu container-fluid" style="float: left;">
      <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="#"><img src="../Image/Brand/logo.png" class="rounded"></a>
            <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="Women.php">
                          <span><b>KHÁCH HÀNG</b></span><span class="sr-only">(current)</span>
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Admin/InformOrder.php">
                          <span><b>THÔNG TIN ĐẶT HÀNG</b></span>
                    </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="SmartWatches.php">
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
    <span>From</span><input type="date" name="from">
    <span>To</span><input type="date" name="to"> <button class="btn btn-outline-success my-2 my-sm-0"  onclick="LoadProductSearch()">Tìm Kiếm</button>
    </div>
    </div>

    <!--Header bar have features login and dilivery -->
    <div class="website_mainpage">


    <div class="infCustomer container-fluid">

        <table class="table table-striped table-bordered" >
          <thead>
            <tr>
              <th scope="col">STT</th>
              <th scope="col">Chi Tiết Sản Phẩm</th>
              <th scope="col">Giá Tiền Sản Phẩm</th>
              <th scope="col">Ngày Đặt Sản Phẩm</th>
              <th scope="col">Ngày Nhận Sản Phẩm</th>
              <th scope="col">Tên Người Đặt</th>
              <th scope="col">Số Điện Thoại</th>
              <th scope="col">Địa Chỉ</th>
             
            </tr>
          </thead>
          <tbody id="user_data">

          </tbody>
        </table>
    </div>

    <div class="container-fluid">
      Form Sản Phẩm
      <div>Tổng sổ tiền từ ngày mấy đến ngày mấy</div>
    </div>


    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 

  </body>

</html>
<!--Hello -->
<!--https://www.fossil.com/en-us/watches/mens-watches/-->