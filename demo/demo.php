   <?php
    include('../DataBase/database.php');
    
    

  ?>
  <?php
   $sql = "SELECT nameProduct,img FROM product";
   $result = mysqli_query($database, $sql);
   if (mysqli_num_rows($result) > 0) {
  // output data of each row
    while($row = mysqli_fetch_assoc($result)) { ?>
        <div class="col-md-4">                     
            <div class="card shadow">
              <a href="OrderProduct.php">
                <div class="inner">
                    <img  class="card-img-top rounded " src="<?php echo $row['img']; ?>" alt="Card image cap">
                </div>
              </a>
              <div class="card-body text-left">
                  <p class="card-text" style="text-align: left;">
                          The Minimalist Three-Hand Brown Leather Watch
                  </p>
                  <span id="rating">
                    <span class="fa fa-star checked" style="color: orange;"></span>
                    <span class="fa fa-star checked" style="color: orange;"></span>
                    <span class="fa fa-star checked" style="color: orange;"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </span>
                <div>1.000.000VND</div>

                </div>
                </div>  
                         
        </div>
    <?php }}  ?>
   

    
 