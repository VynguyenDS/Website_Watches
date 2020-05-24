<?php
  require("../DataBase/database.php");
  session_start();
  mysqli_set_charset($database,'utf8');?>
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
          <?php if(!isset($_SESSION["username"])){?>
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
                        <input type="password" placeholder="Enter Password" name="psw" required>
                          
                        <button id="login" type="submit" name="login" required>Đăng nhập</button>
                        <label>
                          <input type="checkbox" checked="checked" name="remember"> Lưu tài khoản
                            <span>
                              <a  href="signup.php"onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
                                Tạo tài khoản
                              </a>
                          </span>

                        </label>
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
                      <a class="nav-link"  href="#user" role="button" aria-expanded="false" aria-controls="admin"><p><?=$_SESSION["username"]?></p></a>
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
          <!--                      -->
          <li class="nav-item">
              <a class="nav-link " href="../File_PHP/AddToBag.php">
                <i style="color:orange;" class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
          </li>
      </ul>
      </div>
    </div>
    
