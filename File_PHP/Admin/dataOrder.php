<?php

include('../../DataBase/database.php');
session_start();
mysqli_set_charset($database,'utf8');
if(isset($_POST['from']) and $_POST['from'] !="")
{
  $datef = explode("-", $_POST['from']);
  $datet = explode("-", $_POST['to']);
  $date_f = $datef[1]."/".$datef[2]."/".$datef[0];
  $date_t = $datet[1]."/".$datet[2]."/".$datet[0];
  $from = strtotime(date($date_f));
  $to = strtotime(date($date_t));
  ?>
   <table class="table table-striped table-bordered" >
          <thead>
            <tr>
              <th scope="col">Mã Đơn Hàng</th>
              <th scope="col">Ngày Đặt Hàng</th>
              <th scope="col">Họ Và Tên</th>
              <th scope="col">Số Điện Thoại</th>
              <th scope="col">Địa Chỉ</th>
              <th scope="col">Thông Tin Sản Phẩm</th>
              <th scope="col">Số Lượng Sản Phẩm</th>
              <th scope="col">Hình Sản Phẩm</th>
              <th scope="col">Tổng Số Tiền của sản phẩm</th>
             
            </tr>
          </thead>

          <tbody id="user_data">
            <?php 
              $numorder = 0;
              $numsale = 0;
              $TDT = 0;
              $sel_query="SELECT * FROM `customer`,`order` WHERE customer.idCustomer = order.idCustomer ;";
              $result = mysqli_query($database,$sel_query);
              while($row = mysqli_fetch_assoc($result) ) {
                $date = explode("/", $row['OrderDate']);
                $date_o = $date[1]."/".$date[0]."/".$date[2];
                $dateorder = strtotime(date($date_o));



                if($from <= $dateorder and $dateorder <= $to){
                $id_order = $row['orderID'];
                $sel_order="SELECT * from `orderitem`,`product` where orderitem.product_id = product.productid and oderID='$id_order';";
                $result_order = mysqli_query($database,$sel_order);
                $cols = mysqli_num_rows($result_order);
                $numorder ++;
                $TDT = $TDT + $row['total'];
                
                while($row_col = mysqli_fetch_assoc($result_order)){
                  $numsale = $numsale+$row_col['NumberOfOrders'];
              ?>
              <tr>
                <td scope="col" rowspan="1"><?= $id_order?></td>
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
              
              


            <?php }}}?>
          </tbody>
        </table>
        <div class="container-fluid" id="detail">
      <div>Số Đơn Hàng: <span id="numeberorder"><?= $numorder?></span> Đơn Hàng , Số Sản Phẩm Được Bán:<span id="numbersale"><?= $numsale?></span> Sản Phẩm , Tổng Doanh thu<span id="datetd"> Trước Đến Nay</span> Là :<span id="TDT"><?= $TDT?></span> VND.</div>
    </div>

           <?php 
}else{echo "Fail";}
?>