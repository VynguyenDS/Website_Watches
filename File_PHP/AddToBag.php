<!doctype html>

<html lang="en">
<?php
$orderlists= array();
if (isset($_COOKIE['Customer'])) {

$products = $_COOKIE['Customer'];
$orderlists = explode(",", $products);
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
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">

    <title>Giỏ hàng</title>

  </head>
  <body>    
    <?php include 'PartOfWeb/HeaderBar.php';?>
    

    <?php include 'PartOfWeb/MenuBar.php'?>
    <div class="container-fluid" id="titleShopping">
        <h3>Giỏ Hàng Của Bạn</h3>
        <a href="Mainpage.php" style="border-bottom: 1px solid black;color: black;" target="_top">Tiếp tục mua sắm</a>
    </div>

    <div class="payment container-fluid">
        <div class="leftPayment">
            <hr>
            <!-- TDH = tổng đơn hàng
            GG = giảm giá
            TST là tổng số tiền -->
            <?php
            $TDH = 0 ;
            $GG = 0;
            $TST = 0;
            $i = 0;
            while ($i < count($orderlists)) {
            
            
        $select="Select * from product WHERE productid = '$orderlists[$i]';";
        $result = mysqli_query($database,$select);
        while($row = mysqli_fetch_assoc($result)) { 
            $TDH = $TDH + $row['price'] ;
            $GG = round($TDH*20/100,0);
            $TST = $TDH ;
             ?>
            <div class="row">
                <div class="col-md-2">
                    <img src="<?= $row['img']?>">
                </div>
                <div class="col-md-3">
                    <h4>Sản phẩm chi tiết </h4>
                    <p>Tên :<span class="productDetail"><?=$row['nameProduct']?></span></p>
                    <p>Hiệu :<span class="productDetail"><?=$row['brandName']?></span></p>
                    <p>Màu :<span class="productDetail"><?=$row['color']?></span></p>
                    <p>Chất liệu :<span class="productDetail"><?=$row['material']?></span></p>
                    <p>Thể loại :<span class="productDetail"><?=$row['category']?></span></p>
                </div>
                <div class="col-md-2">
                    <h6>Giá sản phẩm</h6>
                    <p><?=$row['price']?></p>
                </div>
                <div class="col-md-2">
                    <h6>Số lượng</h6>
                    <select id="select<?= $i?>" onchange="NumberOfProduct('select<?= $i?>',<?=$row['price']?>,'TG<?= $i?>',<?= $i?>)">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <h6>Tổng số tiền</h6>
                    <p ><span id="TG<?= $i?>"><?=$row['price']?></span>VND</p>
                    <span class="close" title="Close Modal">&times;</span>
                </div>
            </div>
        <?php } $i++; }?>
                    
        </div>
        <div class="rightPayment">
            <hr style="background-color: rgb(255,255,255);">
            <div  style="background-color: rgb(250,248,246);" >
            <h6>Tổng Số Lượng Đặt Mua</h6>
            <hr>
            <p>Tổng đơn hàng : <span id ="TDH"><?= $TDH?> </span>VND</p>
            <p>Giảm giá : <span id="GG"><?= $GG?> </span>VND</p>
            <p>Số tiền phải trả : <span id="STPT"><?= $TST?></span>VND</p>
            <p>Giao hàng : <span>Miễn phí</span></p>
            <hr>
            <button class="btn-block" >
                <a onclick="Cookie()" href= "BuyProduct.php" style="color: white;">Mua ngay</a>
            </button>
            </div>
            <div id="note" style="background-color: rgb(250,248,246);margin-top: 30px;">
                
                <img src="https://www.fossil.com/on/demandware.static/-/Library-Sites-FossilSharedLibrary/default/dwdf7355b2/images/phone.svg"> <b>Cần giúp đỡ?</b> Gọi số 1-800-449-3056.
                Những hình thức thanh toán nào bạn chấp nhận?.
                Khi nào đơn hàng của tôi sẽ được vận chuyển?.
                Tại sao tôi không thể đặt hàng?.
                Có một câu hỏi? Xem thêm câu hỏi thường gặp.
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
  <script type="text/javascript">
        var array_product = new Array();
        var soluonglist = new Array();
        var togialist = new Array()
        <?php for ($i = 0; $i < count($orderlists); $i++) {?>
            array_product.push(<?= $orderlists[$i]?>);
            soluonglist.push(1);
            togialist.push(document.getElementById('TG<?= $i?>').textContent)
        <?php }  ?>
      function NumberOfProduct(SoLuong,Gia,TongGia,where)
      {
        
        var Sum = document.getElementById('STPT').textContent;
        var SL = document.getElementById(SoLuong).value;
        var TG = document.getElementById(TongGia).textContent;
        soluonglist[where] = SL;
        document.getElementById(TongGia).innerHTML = Gia*SL;
        togialist[where] = Gia*SL;
        document.getElementById('TDH').innerHTML = Sum*1-TG*1+Gia*SL;
        var giam_gia = Math.round((document.getElementById('TDH').textContent)*20/100)
        document.getElementById('GG').innerHTML = giam_gia
        document.getElementById('STPT').innerHTML = (Sum*1-TG*1+Gia*SL)-(giam_gia*1);
      }
      function setCookie(cname,cvalue,exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires=" + d.toGMTString();
            document.cookie = cname + "=" + cvalue + "; expires=" + d.toGMTString();
            }
        function Cookie() {

            setCookie("ProductBuy",array_product, 1);
            setCookie("NumberBuy",soluonglist,1);
            setCookie("TotalPrice",document.getElementById('STPT').textContent,1)
            setCookie("PriceList",togialist,1);
        }
  </script>
</html>

