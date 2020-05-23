<?php?>
 <div class="content container-fluid">
        <hr style="background-color: rgb(255,255,255);">
        <div class="left_content d-none d-lg-block">
           

          <hr style="background-color: rgb(255,255,255);">
          <div class="KindOfWatches">
              <h4>Nhãn Hiệu</h4>
              <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">
                          Sekio
                    </label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">
                          Sapphire
                    </label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">
                          Casio
                    </label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">
                          SmartWaches
                    </label>
              </div>
          </div>
          <hr style="background-color: rgb(255,255,255);">
          <div class="Color">
              <h4>Màu</h4>
              <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">
                          Đen
                    </label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">
                          Xám
                    </label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">
                          Xanh
                    </label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">
                          Đỏ
                    </label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">
                          Xanh
                    </label>
              </div>
            </div>
            <hr style="background-color: rgb(255,255,255);">
            <div class="Material">
                <h4>Chất Liệu</h4>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">
                          Dây Da
                    </label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">
                          Kim Loại
                    </label>
              </div>
            </div>
            <hr style="background-color: rgb(255,255,255);">
            <div class="Category">
                <h4>Thể Loại</h4>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">
                          Đồng Hồ Kim Loại
                    </label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">
                          Đồng Hồ Thông Minh
                    </label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">
                          Đồng Hồ Trẻ Em
                    </label>
                    <br>
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" onclick="LoadProduct()">
                    <label class="form-check-label" for="defaultCheck1">
                          Đồng Hồ Dây Da
                    </label>
                    
                    
                </div>
            </div>
        </div>
        <div class="right_content">
          <div class="row" id="product">
              <?php
              $count=1;
              $gender=1;
              if($gender == 0){$gen = "Nam";}
              else{$gen = "Nữ";}
              $sel_query="Select * from product where Gender = '$gen';";
              $result = mysqli_query($database,$sel_query);
              while($row = mysqli_fetch_assoc($result) and $count<=6) { ?>
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
                            if($rate<=$row["rate"]){?>

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
            </div>
            
          </div> 
    </div>