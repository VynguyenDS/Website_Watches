<!doctype html>
<html lang="en">
  <?php
  require("../DataBase/database.php");
  session_start();
  mysqli_set_charset($database,'utf8');?>


  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../File_CSS/Mainpage.css">
    <link rel="stylesheet" type="text/css" href="../File_CSS/Login.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">
    <title>ĐỒNG HỒ HƯNG BA</title>
  </head>
  <body>
    

    <!--Header bar have features login and dilivery -->

    <div class="website_mainpage">
    <div class="header_bar container-fluid">
      <div class="header_bar_left">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="padding-left: 20px;">
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <a class="saleoff" href="" style="color: black;border-bottom: 1px solid black;" >
                  <b>UP TO 70% OFF* 500+ FULL-PRICE STYLES + EXTRA 40% OFF* SALE!</b>
                  </a>
              </div>
          <div class="carousel-item">
                 <a class="saleoff" href="" style="color: black;border-bottom: 1px solid black;" >
                  
                    <b>UP TO 70% OFF* 500+ FULL-PRICE STYLES + EXTRA 40% OFF* SALE!</b>
                  </a>
          </div>
          </div>

        </div>
      </div>
      <div class="header_bar_right d-none d-md-block" >
      <ul class="nav justify-content-end">
          <li class="nav-item">
              <a class="nav-link active" href="#">
                  <p>Vận chuyển</p>
              </a>
          </li>
          <li class="nav-item" >
 

                  <div class="dropdown_show">  
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="flag-icon flag-icon-vn" aria-hidden="true"></i>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        
                        <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-la" aria-hidden="true"></i></a>
                        <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-kh" aria-hidden="true"></i></a>
                        <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-th" aria-hidden="true"></i></a>
                        <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn" aria-hidden="true"></i></a>
                      </div>
                  </div>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="HistoryUser.php"><p>Tình trạng đặt hàng</p></a>
          </li>
          <!-- lúc chưa đăng nhập -->
          <?php if(!(isset($_SESSION["username"]) && isset($_SESSION["position"]))){?>
          <li class="nav-item">
              <a class="nav-link" href="#" onclick="document.getElementById('signin').style.display='block'"><p >Đăng nhập</p></a>
              <div id="signin" class="modal">
                
                <form class="modal-content animate" action="ActionPage.php" method="post">
                      <div class="imgcontainer">
                        <span onclick="document.getElementById('signin').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" class="avatar">
                      </div>

                      <div class="container">
                        <label for="uname"><b>Tài khoản</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>

                        <label for="psw"><b>Mật khẩu</b></label>
                        <input type="password" id="showpassword" placeholder="Enter Password" name="psw" required>
                         
                        <button id="login" type="submit" name="login" required>Đăng nhập</button>
                        <input type="checkbox" onclick="Password()">Hiển thị mật khẩu 
                        <label>
                          <input type="checkbox" checked="checked" name="remember"> Lưu tài khoản
                            <span>
                              <a  href="signup.php"onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
                                Tạo tài khoản
                              </a>
                          </span>

                        </label>
                        <br>
                        <h4 style="text-align: center;">Hoặc Đăng Nhập Bằng Mạng Xã Hội</h4><br>
                          <div class="row">

                            <div class="col-md-6">
                              <button class="btn-block btn-primary">
                                
                                Đăng Nhập Facebook
                                
                                      
                                  
                              </button>
                            </div>  
                          <div class="col-md-6">
                          <button class="btn-block btn-danger">
                              
                              Đăng Nhập Gmail
                          </button>
                          </div>
                          </div>
                        
                        
                      </div>

                      <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('signin').style.display='none'" class="cancelbtn">Kết thúc</button>
                      
                        <span class="psw">Quên <a href="ForgotPassword.php">Mật Khẩu?</a></span>
                      </div>
                    </form>
                    
            </div>


          </li>
          <!-- đăng nhập thành công -->
                  <?php }else{
                    if ($_SESSION["position"] =="Admin"){?>
                      <li class="nav-item">
                      <a class="nav-link"  href="MainpageAdmin.php" role="button" aria-expanded="false" aria-controls="admin"><p><?=$_SESSION["username"]?></p></a>
                      </li>
                      <li class="nav-item" >
                          <a class="nav-link" href="../DataBase/logout.php" style="text-decoration: none;"><span style="font-size: 25px;color: black;"><p>Logout</p></span></a>
                      </li>
                  <?php }else{?>
                    <li class="nav-item">
                    <a class="nav-link" href="#user" role="button" aria-expanded="false" aria-controls="user"><p><?=$_SESSION["username"]?></p></a>
                  </li>
                  <li class="nav-item">
                      <br><a href="../DataBase/logout.php" style="text-decoration: none;"><span style="font-size: 25px;color: black;"><p>Logout</p></span></a>
                  </li>    
                  <?php }}?>
                  <!-- -->
          <li class="nav-item">
              <a class="nav-link " href="addToBag.php">
                <i style="color:orange;" class="fa fa-cart-arrow-down" aria-hidden="true"></i>
              </a>
          </li>
      </ul>
      </div>
    </div>

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
                          <span><b>NỮ</b></span><span class="sr-only">(current)</span>
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Men.php">
                          <span><b>NAM</b></span>
                    </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Mainpage.php">
                    <span><b>ĐỒNG HỒ</b></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="SmartWatches.php">
                    <span ><b>ĐỒNG HỒ THÔNG MINH</b></span>
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
                  <a class="nav-link" href="Discount.php">
                    <span ><b>GIẢM GIÁ</b></span>
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
    </div>



    <div class="Best_Seller container-fluid">
        <select class="option_customer"  name="cars" id="orderproduct" onclick="LoadProduct()">
                <option value="all">Tất Cả</option>
                <option value="BCN">Bán Chạy Nhất</option>
                <option value="KHYT">Khách Hàng Yêu Thích</option>
                <option value="GTCDT">Giá Từ Cao Đến Thấp</option>
                <option value="GTTDC">Giá Từ Thấp Đến Cao</option>
        </select>
    </div>



    <div class="content container-fluid">
        <hr style="background-color: rgb(255,255,255);">
        <div class="left_content d-none d-lg-block">
           
          <div class="Gender">
            <h4>Giới Tính</h4>
            <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1[]" onclick="LoadProduct()">
                  <label class="form-check-label" for="defaultCheck1">Nam</label>
                  <br>
                  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1[]" onclick="LoadProduct()">
                  <label class="form-check-label" for="defaultCheck1">Nữ</label>
            </div>
          </div>
          <hr style="background-color: rgb(255,255,255);">
          <div class="KindOfWatches">
              <h4>Nhãn Hiệu</h4>
              <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1[]"onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">Sekio</label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1[]" onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">Sapphire</label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1[]"onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">Casio</label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1[]"onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">SmartWaches</label>
              </div>
          </div>
          <hr style="background-color: rgb(255,255,255);">
          <div class="Color">
              <h4>Màu</h4>
              <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1[]" onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">Đen</label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1[]" onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">Xám</label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1[]" onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">Xanh</label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1[]" onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">Đỏ</label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1[]" onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">Nâu</label>
              </div>
            </div>
            <hr style="background-color: rgb(255,255,255);">
            <div class="Material">
                <h4>Chất Liệu</h4>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1[]" onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">Dây Da</label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1[]" onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">Kim Loại</label>
              </div>
            </div>
            <hr style="background-color: rgb(255,255,255);">
            <div class="Category">
                <h4>Thể Loại</h4>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1[]" onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">Đồng Hồ Kim Loại</label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1[]" onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">Đồng Hồ Thông Minh</label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1[]" onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">Đồng Hồ Trẻ Em</label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1[]" onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">Đồng Hồ Dây Da</label>
                    
                    
                </div>
            </div>
        </div>
        <div class="right_content">
          <div class="row" id="product">
            <!-- php row product -->
            <?php
              $count=1;
              $sel_query="Select * from product;";
              $result = mysqli_query($database,$sel_query);
              while($row = mysqli_fetch_assoc($result) and $count<=6) { 
                $count_rate = 0;
                $id_product = $row['productid'];
                $sel_rate = "Select rate  FROM feedback WHERE idProduct ='$id_product';";
                
                $rate_result = mysqli_query($database,$sel_rate);
                $rows = mysqli_num_rows($result);
                if($rows!=0){
                  $i = 0;
                while($row_rate = mysqli_fetch_assoc($rate_result)) {
                $count_rate += $row_rate['rate'];
                $i ++;
                }
                  
                }
                if ($i == 0) {
                    $i = 1;
                  }
                $count_rate = round($count_rate/$i);
                ?>
              <div class="col-md-4">  
                    <div class="card shadow" >
                      <a href="OrderProduct.php?id_product=<?=$row["productid"]?>">
                      <div class="inner">
                        <img class="card-img-top rounded " src="<?=$row["img"]?>" alt="Card image cap">
                      </div>
                      </a>
                      <div class="card-body text-left">
                        <p class="card-text" style="text-align: left;">
                          <?=$row["nameProduct"]?>
                        </p>
                       <span id="rating">
                          <?php $rate = 1;
                          while($rate <=5) {
                            if($rate<=$count_rate){?>

                          <span class="fa fa-star checked" style="color: orange;"></span>
                        <?php }else{?>
                          
                          <span class="fa fa-star"></span>
                          <?php }$rate++;}?>
                        </span>
                        <div><span><?= number_format($row["price"])?></span>VND</div>

                      </div>
                    </div>          
              </div>
              <?php $count++; } ?>
              <!--  -->
                            
                            
            </div>

            
          </div> 
    </div>


    <div style="margin-left: 760px;padding-top:10px;position: relative;top: 10px;float: left;">
       <button type="button" class="btn btn-light" style="font-size: 20px;border:1px solid black;"  onclick="AddView()">Xem Thêm</button>
     </div>


   <div class="Information_container container-fluid">
      <hr style="background-color: rgb(255,255,255);">
      <div>
        <h5>Đây là thời gian để cập nhật diện mạo của bạn với đồng hồ nam của chúng tôi</h5>
        <p>
          Đã đến lúc cập nhật tủ quần áo của bạn và thêm một số tính linh hoạt cho vẻ ngoài được làm mới, cập nhật. Không có cách nào tốt hơn để hoàn thành nhiệm vụ này hơn là với những người đàn ông đẹp trai của chúng ta. Từ smartwatches đến truyền thống, chúng tôi đã có những gì bạn muốn. Bộ sưu tập đồng hồ dành cho nam giới của chúng tôi đã được tạo ra để cung cấp các mặt hàng chủ lực theo phong cách dễ dàng chuyển từ phòng họp sang sân bóng rổ. Chúng thêm một lớp phong cách cho diện mạo của bạn cho dù bạn ở đâu.
        </p>
        <p>
        Bạn có thể nhìn một phần và cảm nhận nó với một trong những chiếc đồng hồ đẹp trai dành cho nam giới của chúng tôi, được thiết kế để trở thành điểm nhấn hoàn thiện cho bất kỳ trang phục nào trên đầu trang. Chúng tôi biết bạn muốn ăn mặc để gây ấn tượng bất cứ nơi nào bạn đi, đó là lý do tại sao họ phục vụ cho lối sống độc đáo của bạn. Cá nhân hóa đồng hồ của bạn với dây đeo có thể thay thế, mặt đồng hồ thông minh có thể tùy chỉnh và các vật liệu khác nhau. Da và thép không gỉ làm cho đồng hồ nam của chúng ta đủ bền để đứng trước thử thách của thời gian trong khi trông sang trọng và tinh tế.
        </p>
      </div>
    </div>

        <div class="footer container-fluid" style="margin-top: 10px;margin-bottom: 20px;">
      <hr>
      <div class="left_footer">
        <h4>Tiếp Tục Trup Cập</h4>
        <input type="text" id="email" name="email" placeholder="Enter Email Address">
        <div id="icon_clicks" style="float: right;margin-right: 40px;">
          <i class="fa fa-arrow-right" style="font-size:20px"></i>
        </div>
        <div>
          <p>Bằng cách đăng ký nhận bản tin của chúng tôi, bạn đồng ý với chính sách bảo mật của chúng tôi. * (áp dụng hạn chế và loại trừ)</p>
        </div>
        <div class="row" style="margin-top: 10px;margin-left: 1px;">
          <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/%C4%90%E1%BB%93ng-H%E1%BB%93-m%E1%BA%AFt-k%C3%ADnh-H%C6%B0ng-Ba-330176140738646/?ref=bookmarks">
              <i class="fa fa-facebook-square" style="font-size:24px;color: rgb(80,80,80);"></i>
          </a>
          <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/%C4%90%E1%BB%93ng-H%E1%BB%93-m%E1%BA%AFt-k%C3%ADnh-H%C6%B0ng-Ba-330176140738646/?ref=bookmarks">
              <i class="fa fa-instagram"style="font-size:24px;color: rgb(80,80,80);"></i>
          </a>
          <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/%C4%90%E1%BB%93ng-H%E1%BB%93-m%E1%BA%AFt-k%C3%ADnh-H%C6%B0ng-Ba-330176140738646/?ref=bookmarks">
              <i class="fa fa-snapchat" style="font-size:24px;color: rgb(80,80,80);"></i>
          </a>
          <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/%C4%90%E1%BB%93ng-H%E1%BB%93-m%E1%BA%AFt-k%C3%ADnh-H%C6%B0ng-Ba-330176140738646/?ref=bookmarks">
          <i class="fa fa-twitter-square" style="font-size:24px;color: rgb(80,80,80);"></i>
          </a>
        </div>
      </div>
      <div class="right_footer">
        <div class="row">
          <div class="col-md-4">
            <h4>Đồng Hồ Hưng Ba</h4>
          </div>
          <div class="col-md-4">
            <h4>Chăm Sóc Khách Hàng</h4>
          </div>
          <div class="col-md-4">
            <h4>Liên Hê Với Chúng Tôi</h4>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <a href="">Sản Phẩm</a>
          </div>
          <div class="col-md-4">
            <a href="">Dịch Vụ</a>
          </div>
          <div class="col-md-4">
            <a href=""><a href=""><b>Cơ sở 1 :</b> 258 Phạm Văn Đồng</a></a>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4">
            <a href="">Mắt Kính</a>
          </div>
          <div class="col-md-4">
            <a href="">Order Status</a>
          </div>
          <div class="col-md-4">
            <a href=""><a href=""><b>Cơ sở 2 :</b> 258 Phạm Văn Đồng</a></a>
          </div>
        </div>


        <div class="row">
          <div class="col-md-4">
            <a href="">Phụ Kiện</a>
          </div>
          <div class="col-md-4">
            <a href="">Order Status</a>
          </div>
          <div class="col-md-4">
            <a href=""><b>Số Điện Thoại :</b> 0966368339</a>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <a href="">Fossil Group</a>
          </div>
          <div class="col-md-4">
            <a href="">Order Status</a>
          </div>
          <div class="col-md-4">
            <a href=""><b>Email :</b>HungBa@gmail.com</a></a>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
      $('.carousel').carousel({
        interval: 2000
      })
    </script>
    <script>
// Get the modal
var modal = document.getElementById('signin');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script type="text/javascript">
  function Password(){
    var x  = document.getElementById("showpassword");
    if (x.type == "password"){
      x.type = "text";
    } 
  }
</script>

<script type="text/javascript">
  var number_of_show = 6;
  function AddView()
  {
    number_of_show = number_of_show +6;
    LoadProduct();
  }
  function LoadProduct() {
    
    var arraycheck = new Array();
    var check =document.getElementsByClassName('form-check-input');
    var search_input = document.getElementById('search_input').value;
    var order_chose = document.getElementById('orderproduct').value;
    for (var i = 0; i < check.length; i++) {

      if(check[i].checked == true)
      {
        
        arraycheck.push(document.getElementsByClassName('form-check-label')[i].textContent)
      }else
      {
        arraycheck.push("")
      }

    }


    $.post("ProductData.php",
    {
      chosecheck: arraycheck,
      orderchose : order_chose,
      search: search_input,
      count : number_of_show,
    },
    function(data,status){
      if(status =="success")
      {
        document.getElementById('product').innerHTML ="";
        document.getElementById('product').innerHTML = data;
      }
      
    });
  }
</script>
  </body>
</html>
