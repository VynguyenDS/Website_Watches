<?php 
require("../DataBase/database.php");
session_start();
mysqli_set_charset($database,'utf8');
if (isset($_POST['count'])) {
  $limit = $_POST['count'] ;
}

$count=1;
              $sel_query="SELECT * from product WHERE category = 'Đồng Hồ Thông Minh';";
              $result = mysqli_query($database,$sel_query);
              while($row = mysqli_fetch_assoc($result) and $count<=$limit) { 
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