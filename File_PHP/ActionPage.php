<?php
require('../DataBase/database.php');
session_start();
if (isset($_POST['login']))
{//login

   $username = stripslashes($_POST['uname']);
   $username = mysqli_real_escape_string($database,$username);
   $password = stripslashes($_POST['psw']);
   $password = mysqli_real_escape_string($database,$password);
   $select = "SELECT * FROM login WHERE userName = '$username' and password = '$password'";
   $result = mysqli_query($database,$select) or die(mysql_error());
   $rows = mysqli_num_rows($result);
        if($rows==1)
      {
         $_SESSION['username'] = $username;
            // Redirect user to index.php
         header("Location: Mainpage.php ");
        }else
      {
         echo "<div class='form'>
         <font color='#8e1b0e' size='+2'>login không hợp lệ.</font></div>";
      }
}elseif (isset($_POST['create'])) {//signup
  $username = stripslashes($_POST['username']);
   $username = mysqli_real_escape_string($database,$username);
   $password = stripslashes($_POST['psw']);
   $password = mysqli_real_escape_string($database,$password);

    $select = "SELECT * FROM login WHERE userName = '$username'";
   $result = mysqli_query($database,$select) or die(mysql_error());
   $rows = mysqli_num_rows($result);
        if($rows==1)
      {
         echo "<div class='form'>
         
         <center><font color='#8e1b0e'  size='+2'>Tài khoản này đã có rồi </font></center>
         <br>
         <center><a href='signup.php'>quay lại tạo tài khoản mới</a></center>
         </div>";
            // Redirect user to index.php
        
        }
        else{
        $insert_user="INSERT INTO `login` (`idUserName`, `userName`, `password`, `position`) VALUES('','$username','$password','user')";
  
          if ($database->query($insert_user) === TRUE) 
          {
            echo "<center>Bạn đã đăng ký thành công.</br>
            </br>
            <a href='login.php'>Quay lại đăng nhập  </a>
            <center>";
          } 
          else 
          {
            echo "Error: " . $ins_query . "<br>" . $database->error;
          }
      }

}elseif (isset($_POST['MuaHang'])) {
  if (isset($_COOKIE['ProductBuy']) && isset($_COOKIE['NumberBuy']) && isset($_COOKIE['TotalPrice']) and isset($_POST['firstname'])) {

    $orderlists= array();
    $products = $_COOKIE['ProductBuy'];
    $number_ofbuy = $_COOKIE['NumberBuy'];
    $price = $_COOKIE['PriceList'];
    $orderlists = explode(",", $products);
    $numberbuylists = explode(",",$number_ofbuy);
    $pricelist = explode(",",$price);
    $total =  $_COOKIE['TotalPrice'];

    $name = stripslashes($_POST['firstname']);
   $name = mysqli_real_escape_string($database,$name);
   $phone = stripslashes($_POST['phone']);
   $phone = mysqli_real_escape_string($database,$phone);
   $address = stripslashes($_POST['address']);
   $address = mysqli_real_escape_string($database,$address);
   $indenitycard = stripslashes($_POST['indenitycard']);
   $indenitycard = mysqli_real_escape_string($database,$indenitycard);

   $id_custom = 0;

   $select = "SELECT idCustomer  FROM customer WHERE FullName = '$name' and Telephone  = '$phone' and address = '$address' and indenityCard ='$indenitycard'";
   $result = mysqli_query($database,$select) or die(mysql_error());
   
   $rows = mysqli_num_rows($result);
        if($rows==1)
      {
          while($row = mysqli_fetch_assoc($result)) {
         $id_custom = $row['idCustomer'];
       }
        }else
      {
          if(isset($_SESSION["username"]))
          {
            $login = $_SESSION["username"];
            $insert_customer="INSERT INTO `customer` (`idCustomer`,`FullName`,`Telephone`, `address`, `indenityCard`,`userName`) values('','$name','$phone','$address','$indenitycard','$login')";
          }else
          {
            $insert_customer="INSERT INTO `customer` (`idCustomer`,`FullName`,`Telephone`, `address`, `indenityCard`,`userName`) values('','$name','$phone','$address','$indenitycard',null)";
          }

         if ($database->query($insert_customer) === TRUE) 
          {
               $select2 = "SELECT idCustomer  FROM customer WHERE FullName = '$name' and Telephone  = '$phone' and address = '$address' and indenityCard ='$indenitycard'";
                $result2 = mysqli_query($database,$select2) or die(mysql_error());
   
                $rows2 = mysqli_num_rows($result2);
                
                if($rows2==1)
                {
                  while($row2 = mysqli_fetch_assoc($result2)) {
                  $id_custom = $row2['idCustomer'];
                  }
                }

          } 
          else 
          {
            echo "Error: " . $ins_query . "<br>" . $database->error;
          }
      }
      $id_order = 0;
      $orderday= date("Y-m-d");
      $shipdate = date("Y-d-m",strtotime("+7 days"));
      $insert = "INSERT INTO `order` (`orderID`, `idCustomer`, `OrderDate`, `Orderstatus`, `ShipDate`, `total`) 
      VALUES (NULL, '$id_custom', '$orderday', '0', '$shipdate','$total');";
      if ($database->query($insert) === TRUE) 
          {
            $select_order = "SELECT * FROM `order` WHERE `idCustomer` = '$id_custom';";
            $result3 = mysqli_query($database,$select_order);
            while($row = mysqli_fetch_assoc($result3)) {
              $id_order = $row['orderID'];
          }

          } 
          else 
          {
            echo "Error: " . $insert . "<br>" . $database->error;
          }
      $i = 0;
      while($i<count($orderlists))
      {
        $insertitem = "INSERT INTO `orderitem` (`oderID`, `item_iD`, `product_id`, `NumberOfOrders`, `listprice`) VALUES ('$id_order', NULL, '$orderlists[$i]', '$numberbuylists[$i]', '$pricelist[$i]');";
        if($database->query($insertitem) === TRUE) 
          {
            echo "insert complete";
          } 
          else 
          {
            echo "Error: " . $insert . "<br>" . $database->error;
          }
          $i++;
      }









}
}
else{echo "<div class='form'>
         <font color='#8e1b0e' size='+2'>Fail.</font></div>";}
mysqli_close($database)
?>
