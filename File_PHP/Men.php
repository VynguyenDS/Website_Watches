w <?php
    include('../DataBase/database.php');
    
 

  ?>
  <!--testting github--><!--testting github-->
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
    <title>Đồng hồ nữ</title>
  </head>
  <body>    
    <?php include 'PartOfWeb/HeaderBar.php';?>
    

    <?php include 'PartOfWeb/MenuBar.php'?>
    <!-- Take note-->



    <div class="container-fluid" style="background-color: rgb(241,240,240);float: left;">
    	<div class="container">
        <div class="row">
            <div class="col-md-12" style="text-align: center;">
            <h4>Đồng Hồ Nam</h4>
            </div>
        </div>
    	<div class="row">
  
    		<div class="col-md-2" style="text-align: center;">
    			<img src="../Image/men_watches/men.webp">
    			<div><a href="" style="color: black;">Nữ</a></div>
    			
    		</div>
    		<div class="col-md-2" style="text-align: center;">
    			<img src="../Image/men_watches/men.webp">
    			<div><a href="" style="color: black;">Nam</a></div>
    		</div>
    		<div class="col-md-2" style="text-align: center;">
    			<img src="../Image/men_watches/men.webp">
    			<div><a href="" style="color: black;">Đồng hồ</a></div>
    		</div>
    		<div class="col-md-2" style="text-align: center;">
    			<img src="../Image/men_watches/men.webp">
    			<div><a href="" style="color: black;">Đồng hồ thông minh</a></div>
    		</div>
    		<div class="col-md-2" style="text-align: center;">
    			<img src="../Image/men_watches/men.webp">
    			<div><a href="" style="color: black;">Mắt kính</a></div>
    		</div>
    		<div class="col-md-2" style="text-align: center;">
    			<img src="../Image/men_watches/men.webp">
    			<div><a href="" style="color: black;">Phụ kiện</a></div>
    		</div>
    	</div>
    	</div>
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
              $sel_query="Select * from product where Gender='Nam';";
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
                $count_rate = round($count_rate/$i); ?>
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
                          <!-- rate -->
                          <?php $rate = 1;
                          while($rate <=5) {
                            if($rate<=$count_rate){?>

                          <span class="fa fa-star checked" style="color: orange;"></span>
                        <?php }else{?>
                          
                          <span class="fa fa-star"></span>
                          <?php }$rate++;}?>
                          <!-- -->
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


   <!--testting github--><!--testting github--><!--testting github-->

    <div style="margin-left: 760px;padding-top:10px;position: relative;top: 10px;float: left;">
       <button type="button" class="btn btn-light" style="font-size: 20px;border:1px solid black;"  onclick="AddView()">Xem Thêm</button>
     </div>
     <?php include 'PartOfWeb/InformationContainer.php'?>
     <?php include 'PartOfWeb/Footer.php'?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
  var number_of_show = 6;
  function AddView()
  {
    number_of_show = number_of_show +6;
    LoadProduct();
  }
  function LoadProduct() {
    
    var arraycheck = new Array("Nam","");
    var check =document.getElementsByClassName('form-check-input');
    var search_input = ""
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


    $.post("ProductDataGender.php",
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
<!--testting github--><!--testting github--><!--testting github-->