<?php
require("../DataBase/database.php");

session_start();
if (isset($_POST['login']))
{//login
    #login
   $username = stripslashes($_POST['uname']);
   $username = mysqli_real_escape_string($database,$username);
   $password = stripslashes($_POST['psw']);
   $password = mysqli_real_escape_string($database,$password);
   $select = "SELECT * FROM login WHERE userName = '$username' and password = '$password'";
   $result = mysqli_query($database,$select) or die(mysql_error());
   $rows = mysqli_num_rows($result);
        if($rows==1)
      {
         $position = "";
         $_SESSION['username'] = $username;
         while($row = mysqli_fetch_assoc($result)) {
         $_SESSION['position'] =  $row['position'];
         $position = $row['position'];
       }
         if( $position== 'Admin')
          {header("Location: MainpageAdmin.php ");}
         else{header("Location: Mainpage.php ");}
        }else
      {
         echo "<div class='form'>
         <font color='#8e1b0e' size='+2'>login không hợp lệ.</font></div>";
      }
}elseif (isset($_POST['feedback'])) {
  # feedback
  if(isset($_POST['fullName']) and $_POST['fullName']!="")
{
  $id = $_POST['feedback'];
  $name = $_POST['fullName'];
  $rate = $_POST['rate'];
  $comment = $_POST['message'];
  $date = date("d")."/".date("m")."/".(date("y")+2000);

  $insert_feedback ="INSERT INTO `feedback` (`idProduct`, `fullName`, `rate`, `Date`, `comment`) VALUES ('$id', '$name', '$rate', '$date', '$comment');";
    
    if ($database->query($insert_feedback) === TRUE) 
    {
      header("Location: OrderProduct.php?id_product=$id");
    }
    else 
    {
        echo "Error:  fail";
    }
  }

} elseif (isset($_POST['create'])) {//signup
  $username = stripslashes($_POST['username']);
  $username = mysqli_real_escape_string($database,$username);
  $password = stripslashes($_POST['psw']);
  $password = mysqli_real_escape_string($database,$password);

  $fullname = stripslashes($_POST['fullname']);
  $fullname = mysqli_real_escape_string($database,$fullname);
  $phone = stripslashes($_POST['phone']);
  $phone = mysqli_real_escape_string($database,$phone);

  $address = stripslashes($_POST['address']);
  $address = mysqli_real_escape_string($database,$address);
  $indenitycard = stripslashes($_POST['indenitycard']);
  $indenitycard = mysqli_real_escape_string($database,$indenitycard);


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
        $insert_user="INSERT INTO `login` (`idUserName`, `userName`, `password`, `position`) VALUES('','$username','$password','customer')";
  
          if ($database->query($insert_user) === TRUE) 
          {
            $insert_userinf ="INSERT INTO `customer` (`idCustomer`,`FullName`,`Telephone`, `address`, `indenityCard`,`userName`) values('','$fullname','$phone','$address','$indenitycard','$username')";
            if ($database->query($insert_userinf) === TRUE) 
          {
            echo "<center>Bạn đã đăng ký thành công.</br>
            </br>
            <a href='Mainpage.php'>Quay lại trang chủ  </a>
            <center>";
          }
           
          else 
          {
            echo "Error:  fail";
          }
          } 
          else 
          {
            echo "Error: " . $ins_query . "<br>" . $database->error;
          }
      }

}elseif (isset($_POST['forget'])) {
  $username = stripslashes($_POST['username']);
  $username = mysqli_real_escape_string($database,$username);
  $password = stripslashes($_POST['psw']);
  $password = mysqli_real_escape_string($database,$password);

  $phone = stripslashes($_POST['phone']);
  $phone = mysqli_real_escape_string($database,$phone);
  $indenitycard = stripslashes($_POST['indenitycard']);
  $indenitycard = mysqli_real_escape_string($database,$indenitycard);

  $select_acc = "SELECT * FROM customer WHERE  userName = '$username' and Telephone ='$phone' and indenityCard = '$indenitycard';";
   $result = mysqli_query($database,$select_acc) or die(mysql_error());
   $rows = mysqli_num_rows($result);
        if($rows==1)
        {
          #####
          $update="update login set password='$password' where userName='$username'";
          $result_update=mysqli_query($database, $update);// or die(mysqli_error());
          $status = "Bạn đã đổi mật khẩu thành công </br></br>
          <a href='Mainpage.php'>Quay lại trang chủ</a>";
          echo '<p style="color:#FF0000;">'.$status.'</p>';
          #####
        }

}
elseif (isset($_POST['MuaHang'])) {
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
      $orderday= date("d")."/".date("m")."/".(date("y")+2000) ;
      $sevendate = strtotime("+7 days");
      $shipdate = date("d",$sevendate)."/".date("m",$sevendate)."/".(date("y",$sevendate)+2000) ;
      $insert = "INSERT INTO `order` (`orderID`, `idCustomer`, `OrderDate`, `OrderStatus`, `ShipDate`, `total`) 
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
            $salenumber = $numberbuylists[$i];
            $select_numbersale= "SELECT NumberSale FROM stores WHERE id_Product = '$orderlists[$i]' ;";
            $result_sale = mysqli_query($database,$select_numbersale);
            while ($row_sale = mysqli_fetch_assoc($result_sale)) {
              $salenumber += $row_sale['NumberSale'];
            }
            $update="update stores set NumberSale='$salenumber' where id_Product='$orderlists[$i]'";
            $result_update=mysqli_query($database, $update);
            setcookie("PriceList", "", time() - 3600);
            setcookie("NumberBuy", "", time() - 3600);
            setcookie("PriceList", "", time() - 3600);
            setcookie("TotalPrice", "", time() - 3600);
            setcookie("Customer", "", time() - 3600);
            

          } 
          else 
          {
            echo "<center>Lỗi Hệ thống  xin vui lòng thử lại sau</center>";
          }
          $i++;
      }
      echo "<center>Mã hoá đơn của bạn là :".$id_order.".</br>
            </br>
            <a href='Mainpage.php'>Quay lại trang chủ  </a>
            <center>";









}
}
else{header("Location: Mainpage.php ");}
mysqli_close($database)
?>
