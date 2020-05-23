<!doctype html>
<?php 
$products ="";
if(isset($_COOKIE['Customer'])){
$products = $_COOKIE['Customer'];
$k = explode(",", $products);

}
$product_id=$_REQUEST['id_product'];
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
    <link rel="stylesheet" type="text/css" href="../File_CSS/OrderProduct.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">
    <title>ĐỒNG HỒ HƯNG BA</title>
  </head>
    <style>
* {box-sizing: border-box}

.bar {
  width: 100%;
  background-color: #ddd;
 
}

.skills {
  text-align: right;

  color: white;
}

.html {width: 90%; background-color: rgb(247,148,29);}
.css {width: 80%; background-color: rgb(247,148,29);}
.js {width: 65%; background-color: rgb(247,148,29);}
.php {width: 60%; background-color: rgb(247,148,29);}
</style>
</head>
  
  <body>
        <?php include 'PartOfWeb/HeaderBar.php';?>
    

    <?php include 'PartOfWeb/MenuBar.php'?>

    <?php 
    $sel_query="Select * from product WHERE productid = '$product_id';";
              $result = mysqli_query($database,$sel_query);
              while($row = mysqli_fetch_assoc($result)) { ?>
    <div class="addToBag container-fluid">
        <div class="leftBag">
             <img  width="500" src="<?=$row["img"]?>">

        </div>
        <div class="rightBag">
            <p>
                <b>Đồng hồ <?=$row["material"]?> <?=$row["nameProduct"]?></b>
            </p>
            <div>

                        <span id="rating">
                          <?php $rate = 1;
                          while($rate <=5) {
                            if($rate<=$row["rate"]){?>

                          <span class="fa fa-star checked" style="color: orange;"></span>
                        <?php }else{?>
                          
                          <span class="fa fa-star"></span>
                          <?php }$rate++;}?>
                        </span>

            </div>
            <div><span style="text-decoration: line-through;"><?=number_format($row["price"])?> </span><span style="color: red;"><b><span><?=number_format(round($row["price"]*80/100,0))?></span>VND</b></span></div>
            <div id="color">
                <h4>Màu</h4>
                <div class="row">
                    <div class="col-md-3">
                        <img src="../Image/Straps/Strap1.jpg">
                    </div>
                    <div class="col-md-3">
                        <img src="../Image/men_watches/men.webp">
                    </div>
                    <div class="col-md-3">
                        <img src="../Image/men_watches/men.webp">
                    </div>
                    <div class="col-md-3">
                        <img src="../Image/men_watches/men.webp">
                    </div>
                </div>
            </div>
            <div id="strap">
                <h4>Dây đeo</h4>
                <div class="row">
                    <div class="col-md-3">
                        <img src="../Image/Straps/Strap1.jpg">
                    </div>
                    <div class="col-md-3">
                        <img src="../Image/Straps/Strap2.jpg">
                    </div>
                    <div class="col-md-3">
                        <img src="../Image/Straps/strap3.jpg">
                    </div>
                    <div class="col-md-3">
                        <img src="../Image/Straps/strap4.jpg">
                    </div>
                </div>
            </div>
            <button id="addBag"  class="btn-block" ><a  onclick="Cookie()" href="addToBag.php" style="color: white;">Thêm vào giỏ hàng</a></button>
            <hr>
            <div>
                <h4>Sản phẩm chi tiết </h4>
                <p>Tên :<span class="productDetail"><?=$row["nameProduct"]?></span></p>
                <p>Hiệu :<span class="productDetail"><?=$row["brandName"]?></span></p>
                <p>Màu :<span class="productDetail"><?=$row["color"]?></span></p>
                <p>Chất liệu :<span class="productDetail"><?=$row["material"]?></span></p>
                <p>Thể loại :<span class="productDetail"><?=$row["category"]?></span></p>

            </div>


        </div>
    </div>
<?php }?>

    <div class="container-fluid" class ='review'>
        <p>Review Snapshot by <b>PowerReviews</b></p>
        <hr>
        <div class="row">
            <div class="col-md-4 herical" style="text-align: center;padding-top: 80px;border-right: 1px solid rgb(208,208,208);">
                    <h3>3.3</h3>
                    <span id="rating">
                          <span class="fa fa-star checked" style="color: orange;"></span>
                          <span class="fa fa-star checked" style="color: orange;"></span>
                          <span class="fa fa-star checked" style="color: orange;"></span>
                          <span class="fa fa-star"></span>
                          <span class="fa fa-star"></span>
                    </span>
                    <span>21 người Reviews</span><br>
                    <?php include('FeedBackProduct.php') ?>
            </div>
            <div class="col-md-4 herical" style="text-align: center;padding-top: 100px;border-right: 1px solid rgb(208,208,208);">
                <h2  ><span style="background-color: rgb(10,137,0);padding: 10px 30px;color: white;"> 81%</span></h2>
                <p>trong số những người được hỏi muốn giới thiệu điều này cho bạn bè</p>
            </div>
            <div class="col-md-4">
                    <span>5 Sao</span>
                    <div class="bar">
                      <div class="skills html">90%</div>

                    </div>


                    <span>4 Sao</span>
                    <div class="bar">
                      <div class="skills css">80%</div>
                    </div>

                    <span>3 Sao</span>
                    <div class="bar">
                      <div class="skills js">65%</div>
                    </div>


                    <span>2 Sao</span>
                    <div class="bar">
                      <div class="skills spanhp">60%</div>
                    </div>
                    <span>1 Sao</span>
                    <div class="bar">
                      <div class="skills spanhp">60%</div>
                    </div>
            </div>
        </div>

    </div> 
    <hr>
    <div class="commentProduct container-fluid" style="background-color: rgb(245,245,245);">
        <?php include("commentProduct.php") ?>
        
    </div>



    <?php include 'PartOfWeb/InformationContainer.php'?>
    <?php include 'PartOfWeb/Footer.php'?>
 
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