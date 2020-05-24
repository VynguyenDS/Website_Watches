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


    <link rel="stylesheet" type="text/css" href="../File_CSS/Smart_watches.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">
    <title>ĐỒNG HỒ HƯNG BA</title>
  </head>
  <body>


        <?php include 'PartOfWeb/HeaderBar.php';?>
  


        <?php include 'PartOfWeb/MenuBar.php'?>


        <div class="container-fluid kind_of_watches">
            <div style="padding: 20px;">
            <ul>
                <li><a href="">GEN 5</a></li>
                <li><a href="">SPORT</a></li>
                <li><a href="">GEN 4</a></li>
                <li><a href="">HYBRID HR</a></li>
                <li><a href="">APPLE WATCHES</a></li>
                <li><a href="">HYBRID</a></li>
            </ul>
            </div>
        </div>


        <div class="container-fluid ad_smart_watches " style="text-align: center;">
            <div>
              <h2><b>Đồng hồ thông minh - Khám phá tất cả</b></h2>
               <p>Cuộn để khám phá thêm về iPhone® của chúng tôi- và</p>
                <p>  Đồng hồ thông minh tương thích Android ™.</p>
            </div>
        </div>


        <div class="container-fluid apple_component_3">
          <div class="row">
              <div class="col-md-6" style="background-color: rgb(238,230,224);">  
                    <div class="card shadow" style="background-color: rgb(238,230,224);">
                        <img class="card-img-top rounded img-fluid w-100 " src="../Image/Product/apple-watch-series-5-40-44mm-anh-thuc-te-day-deo-min.jpg" alt="Card image cap">
                      
                      <div class="card-body text-left">
                        <p class="card-text" style="text-align: left;">
                          The Minimalist Three-Hand Brown Leather Watch1
                        </p>

                      </div>
                    </div>          
              </div>
              <div class="col-md-6" style="background-color: rgb(238,230,224);">  
                    <div class="card shadow" style="background-color: rgb(238,230,224);">     
                    <img class="card-img-top rounded " src="../Image/Product/1984110.jpg" alt="Card image cap" style="background-color: rgb(238,230,224);">           
                    <div class="card-body text-left">
                        <p class="card-text" style="text-align: left;">
                          The Minimalist Three-Hand Brown Leather Watch
                        </p>
                      </div>
                  </div>          
              </div>

          </div>
        </div>


        <div class="container-fluid">
              <div class="row">
              <img src="../Image/Smart_Watches/apple-watch-series-6.jpg"  class="img-fluid w-100" >  
              </div>        
        </div>



        <div class="container-fluid">
            <div class="row">
              <div class="col-md-6" style="background-color: rgb(238,230,224);">  
                    <div class="card shadow" style="background-color: rgb(238,230,224);" >                  
                      <img class="card-img-top rounded " src="../Image/Smart_Watches/apple1.jpg" alt="Card image cap">
                      <div class="card-body text-left">
                        <p class="card-text" style="text-align: left;">
                          The Minimalist Three-Hand Brown Leather Watch
                        </p>
                      </div>
                    </div>          
              </div>
              <div class="col-md-6" style="background-color: rgb(238,230,224);">  
                    <div class="card shadow" style="background-color: rgb(238,230,224);">
                      <img class="card-img-top rounded " src="../Image/Smart_Watches/apple2.jpg" alt="Card image cap" style="background-color: rgb(238,230,224);">
                      <div class="card-body text-left">
                        <p class="card-text" style="text-align: left;">
                          The Minimalist Three-Hand Brown Leather Watch
                        </p>
                      </div>
                    </div>          
              </div>
            </div>
        </div>



        <div class="container-fluid">
              <div class="row">
              <img src="../Image/Smart_Watches/34173-original.jpg"  class="img-fluid w-100" >  
              </div>        
        </div>


        <div class="container-fluid">
          <div class="row" id="showProduct">
          <?php
            $count=1;
              $sel_query="SELECT * from product WHERE category = 'Đồng Hồ Thông Minh';";
              $result = mysqli_query($database,$sel_query);
              while($row = mysqli_fetch_assoc($result) and $count<=4) { 
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
          
              <div class="col-md-3" style="background-color: rgb(238,230,224);">  
                    <div class="card shadow" style="background-color: rgb(238,230,224);" >  
                    <a href="OrderProduct.php?id_product=<?=$row["productid"]?>">       
                      <img class="card-img-top rounded " src="<?=$row["img"]?>" alt="Card image cap" style="background-color: rgb(238,230,224);">
                    </a>
                      <div class="card-body text-left">
                        <p class="card-text" style="text-align: left;">
                          <?=$row["nameProduct"]?><br>
                          
                          <span id="rating">
                          <?php $rate = 1;
                          while($rate <=5) {
                            if($rate<=$count_rate){?>

                          <span class="fa fa-star checked" style="color: orange;"></span>
                        <?php }else{?>
                          
                          <span class="fa fa-star"></span>
                          <?php }$rate++;}?>
                        </span>

                          
                        </p>
                        <div><span><?= number_format($row["price"])?></span>VND</div>
                      </div>
                    </div>          
              </div>
              <?php $count++; } ?>
              <!--  -->

            </div>
        </div>

<div style="margin-left: 760px;padding-top:10px;position: relative;top: 10px;float: left;">
       <button type="button" class="btn btn-light" style="font-size: 20px;border:1px solid black;"  onclick="AddView()">Xem Thêm</button>
     </div>
         <?php include 'PartOfWeb/InformationContainer.php';?>


         <?php include 'PartOfWeb/Footer.php';?>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="text/javascript">
  var number_of_show = 4;
  function AddView()
  {
    number_of_show = number_of_show +4;
    LoadProduct();
  }
  function LoadProduct() {
  


    $.post("AddMoreWatch.php",
    {
      count : number_of_show,
    },
    function(data,status){
      if(status =="success")
      {
        document.getElementById('showProduct').innerHTML ="";
        document.getElementById('showProduct').innerHTML = data;
      }
      
    });
  }
</script>
</html>
