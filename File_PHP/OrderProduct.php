<!doctype html>
<?php 
require('../DataBase/database.php');
mysqli_set_charset($database,'utf8');
$products ="";
if(isset($_COOKIE['Customer'])){
$products = $_COOKIE['Customer'];
$k = explode(",", $products);

}
$product_id=$_REQUEST['id_product'];
?>
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
    <link rel="stylesheet" type="text/css" href="../File_CSS/menu_bar.css">
    <link rel="stylesheet" type="text/css" href="../File_CSS/Login.css">
    <link rel="stylesheet" type="text/css" href="../File_CSS/OrderProduct.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">
    <title>Đồng hồ nữ</title>
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
    $count_rate = 0;
    $sel_rate = "Select rate  FROM feedback WHERE idProduct = '$product_id';";
    $rate_result = mysqli_query($database,$sel_rate);
    $i = 0;
    while($row_rate = mysqli_fetch_assoc($rate_result)) {
        $count_rate += $row_rate['rate'];
        $i ++;
    }
    $count_rate = round($count_rate/$i);
    $sel_query="Select * from product WHERE productid = '$product_id';";
    $result = mysqli_query($database,$sel_query);
    while($row = mysqli_fetch_assoc($result)) { ?>
    <div class="addToBag container-fluid">
        <div class="leftBag">
             <img class="w-70" src="<?=$row["img"]?>">

        </div>
        <div class="rightBag">
            <p>
                <b>Đồng hồ <?=$row["material"]?> <?=$row["nameProduct"]?></b>
            </p>
            <div>

                        <span id="rating">
                          <?php $rate = 1;
                          while($rate <=5) {
                            if($rate<=$count_rate){?>

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
                    <h3><?= $count_rate?></h3>
                    <span id="rating">
                        <?php $rate = 1;
                          while($rate <=5) {
                            if($rate<=$count_rate){?>

                          <span class="fa fa-star checked" style="color: orange;"></span>
                        <?php }else{?>
                          
                          <span class="fa fa-star"></span>
                          <?php }$rate++;}?>
                    </span>
                    <span><?= $i?> người Reviews</span><br>
                    <!---->
                    <button  type="button" class="btn btn-dark"
style="color: white;margin-top: 10px;background-color: rgb(11,123,193)" onclick="document.getElementById('FeedBack').style.display='block'">
                Khảo Sát Sản Phẩm
</button>
<div id="FeedBack" class="modal">
            <form class="modal-content animate" action="ActionPage.php" method="post">
              <h4 style="text-align:center;">Khảo Sát Về Chất Lượng Sản Phẩm</h4>
              <div class="imgcontainer">
                <span onclick="document.getElementById('FeedBack').style.display='none'" class="close" title="Close Modal">&times;</span>  
              </div>

              <div class="container" style="text-align: left;">
                <label for="fullName"><b>Họ Và Tên :</b></label>
                <input type="text" placeholder="Enter Username" name="fullName" required>

                <label for="Email"><b>Đánh giá:</b></label>
                  <select class="option_customer"  name="rate" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>

                <div class="form-group">
                        <label for="exampleFormControlTextarea1">Tin Nhắn :</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" required></textarea>
                </div>
                
                <button type="submit" name="feedback" value="<?= $product_id?>" class="btn btn-dark btn-block">Gửi</button>
              </div>

            </form>
</div>
                    <!---->
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
        <form style="background-color: rgb(245,245,245);">
  <fieldset>
        <div class="container-fluid"> 
            <img src="../Image/icon/messenger.webp" width="30" style="position: relative;bottom: 5px;"> &#8287; <span style="font-size: 30px;">Review</span>
        </div>
         <div id="comment" class="container-fluid" style="background-color: white;margin-bottom: 10px;">
            <?php 
              $sel_query="Select * FROM feedback WHERE idProduct = $product_id;";
              $result = mysqli_query($database,$sel_query);
              while($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="comment_customer" style="padding-left: 50px;">
                    <span><b>Bởi: </b></span><span><?= $row['fullName']?></span><br>
                    <span><?= $row['comment']?></span><br>
                    <?php 
                    $rate_coment = 0;
                    while($rate_coment<5){
                        if($rate_coment< $row['rate']){?>
                    <span class="fa fa-star checked" style="color: orange;"></span>
                    <?php }$rate_coment++;}?>
                    <br>
                    <span>Thời gian:<?= $row['Date']?></span><br>
                    <span></span>
                </div>
                <hr>
            <?php }?>
        </div>
          </fieldset>

</form>
    </div>
    <?php include 'PartOfWeb/InformationContainer.php'?>
    <?php include 'PartOfWeb/Footer.php'?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!--  Master Origin-->
<script>
  var modal = document.getElementById('FeedBack');
  window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
  }
</script>
    <script type="text/javascript">
         function setCookie(cname,cvalue,exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires=" + d.toGMTString();
            document.cookie = cname + "=" + cvalue + "; expires=" + d.toGMTString();
            }
        function Cookie() {
            var order = [<?= $products?>];
            order.push("<?= $product_id?>")

            setCookie("Customer",order, 1);
            alert("Sản phẩm đã thêm vào giỏ")
     }
    </script>
<!--testting github-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<!--testting github-->

<!--testting github-->

<!--testting github-->

<!--testting github-->

<!--testting github-->