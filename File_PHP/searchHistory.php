<?php

require("../DataBase/database.php");
session_start();
mysqli_set_charset($database,'utf8');
if(isset($_POST['id']) and $_POST['id'] !="")
{
  $id = $_POST['id'];
  $sel_query="SELECT idCustomer FROM `order` WHERE orderID = '$id';";
              $result = mysqli_query($database,$sel_query);
              $rows = mysqli_num_rows($result);
              if($rows ==0)
              {
                echo "Fail";
              }else{
                $id_customer=0;
              while($row = mysqli_fetch_assoc($result) ) 
              {
                $id_customer = $row['idCustomer'];
              }

              $sel_="SELECT * FROM `customer`,`order` WHERE customer.idCustomer = order.idCustomer and customer.idCustomer = '$id_customer' 
              and orderID = '$id';";
              $result = mysqli_query($database,$sel_);
              while($row = mysqli_fetch_assoc($result) ) {
                $sel_order="SELECT * from `orderitem`,`product` WHERE orderitem.product_id = product.productid and oderID='$id';";
                $result_order = mysqli_query($database,$sel_order);
                $cols = mysqli_num_rows($result_order);
                
                while($row_col = mysqli_fetch_assoc($result_order)){
              ?>
              <tr>
                <td scope="col" rowspan="1"><?= $id?></td>
                <td scope="col" rowspan="1"><?= number_format($row['total'])?> VND</td>
                <td scope="col" rowspan="1"><?= $row['OrderDate']?></td>
                <td scope="col" rowspan="1"><?= $row['FullName']?></td>
                <td scope="col" rowspan="1"><?= $row['Telephone']?></td>
                <td scope="col" rowspan="1"><?= $row['address']?></td>
                <td scope="col" >
                    Tên Sản Phẩm: <?= $row_col['nameProduct']?><br>
                    Nhà Sản Xuất: <?= $row_col['brandName']?><br>
                    Màu : <?= $row_col['color']?><br>
                    Chất Liệu: <?= $row_col['material']?><br>
                    Thể Loại :<?= $row_col['category']?>
                    

                </td>
                <td scope="col" ><?= $row_col['NumberOfOrders'] ?></td>
                <td scope="col" ><img class="card-img-top rounded " src="<?=$row_col["img"]?>" alt="Card image cap"></td>
                <td scope="col" ><?= number_format($row_col['price']*$row_col['NumberOfOrders']) ?> VND</td>
                </tr>
              
              


            <?php }}

















            }
}else{echo "Fail";}
?>