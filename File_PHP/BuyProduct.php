<!doctype html>
<html lang="en">
<?php
$orderlists= array();
if (isset($_COOKIE['ProductBuy']) && isset($_COOKIE['NumberBuy']) && isset($_COOKIE['TotalPrice'])) {

$products = $_COOKIE['ProductBuy'];
$number_ofbuy = $_COOKIE['NumberBuy'];
$orderlists = explode(",", $products);
$numberbuylists = explode(",",$number_ofbuy);
$total =  $_COOKIE['TotalPrice'];
}
else
{
  header("Location: AddToBag.php ");
}
?>   
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
    <link rel="stylesheet" type="text/css" href="../File_CSS/menu_bar.css">
    <link rel="stylesheet" type="text/css" href="../File_CSS/Login.css">
    
    <link rel="stylesheet" type="text/css" href="../File_CSS/AddToBag.css">
    <link rel="stylesheet" type="text/css" href="../File_CSS/BuyProduct.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">

    <title>Mua hàng</title>

  </head>
  <body>    
    <?php include 'PartOfWeb/HeaderBar.php';?>
    

    <?php include 'PartOfWeb/MenuBar.php'?>

    <div class="container-fluid" id="titleBuy" style="padding-left: 50px;" >
        <h3>Mua Hàng</h3>
        <a href="Mainpage.php" style="border-bottom: 1px solid black;color: black;" target="_top">Tiếp tục mua sắm</a>
    </div>

    <hr>

    
    <div class="container-fluid" style="margin-top: 50px;">
                <div class="row">
                  <div class="col-75">
                    <div class="container">
                      <form action="ActionPage.php" method="POST">
                      
                        <div class="row">
                          <div class="col-50">
                            <h3>Thanh Toán</h3>
                            <label for="fname"><i class="fa fa-user"></i> Họ Và Tên</label>
                            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                            <label for="phone"><i class="fa fa-envelope"></i> Số điện thoại</label>
                            <input type="text" id="email" name="phone" placeholder="john@example.com">
                            <label for="adr"><i class="fa fa-address-card-o"></i> Địa Chỉ</label>
                            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                            <label for="city"><i class="fa fa-institution"></i> số chứng minh</label>
                            <input type="text" id="city" name="indenitycard" placeholder="New York">

                            <div class="row">
                              <div class="col-50">
                                <label for="state">Tỉnh</label>
                                <input type="text" id="state" name="state" placeholder="NY">
                              </div>
                              <div class="col-50">
                                <label for="zip">Zip</label>
                                <input type="text" id="zip" name="zip" placeholder="10001">
                              </div>
                            </div>
                          </div>

                          <div class="col-50">
                            <h3>Thanh Toán</h3>
                            <label for="fname">Thẻ được chấp nhận</label>
                            <div class="icon-container">
                              <i class="fa fa-cc-visa" style="color:navy;"></i>
                              <i class="fa fa-cc-amex" style="color:blue;"></i>
                              <i class="fa fa-cc-mastercard" style="color:red;"></i>
                              <i class="fa fa-cc-discover" style="color:orange;"></i>
                            </div>
                            <label for="cname">Tên Thẻ</label>
                            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                            <label for="ccnum">Số Thẻ Tín Dụng</label>
                            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                            <label for="expmonth">Ngày Hết Hạn</label>
                            <input type="text" id="expmonth" name="expmonth" placeholder="September">
                            <div class="row">
                              <div class="col-50">
                                <label for="expyear">Năm Hết Hạn</label>
                                <input type="text" id="expyear" name="expyear" placeholder="2018">
                              </div>
                              <div class="col-50">
                                <label for="cvv">CVV</label>
                                <input type="text" id="cvv" name="cvv" placeholder="352">
                              </div>
                            </div>
                          </div>
                          
                        </div>
                        <label>
                          <input type="checkbox" checked="checked" name="sameadr"> Địa chỉ giao hàng giống như thanh toán
                        </label>
                        <input type="submit" value="Xác Nhận Mua Hàng" style="background-color: rgb(36,36,36);" class="btn" name= 'MuaHang'>
                      </form>
                    </div>
                  </div>
                  <div class="col-25">
                    <div class="container">

                      <h4>Số Lượng <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
                      <?php $i = 0;
                        while ($i < count($orderlists)) {
            
            
                        $select="Select * from product WHERE productid = '$orderlists[$i]';";
                        $result = mysqli_query($database,$select);
                        while($row = mysqli_fetch_assoc($result)) { ?>
                        <p><a href="#"><?= $numberbuylists[$i]?> <?=$row['nameProduct']?></a> <span class="price"><?=round($row['price']*80/100)?> VND</span></p>
                      <?php }$i++; }?>
                      <hr>
                      <p>Total <span class="price" style="color:black"><b><?= round($total)?> VND</b></span></p>
                    </div>
                  </div>
                </div>
                </div>
  
    <?php include 'PartOfWeb/InformationContainer.php'?>
    <?php include 'PartOfWeb/Footer.php'?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

