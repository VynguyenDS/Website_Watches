<?php
require('../DataBase/database.php');
session_start();
if (isset($_POST['login']))
{//login

   $username = stripslashes($_POST['uname']);
   $username = mysqli_real_escape_string($database,$username);
   $password = stripslashes($_POST['psw']);
   $password = mysqli_real_escape_string($database,$password);
    $query = "SELECT * FROM login WHERE userName = '$username' and password = '$password'";
   $result = mysqli_query($database,$query) or die(mysql_error());
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

    $query = "SELECT * FROM login WHERE userName = '$username'";
   $result = mysqli_query($database,$query) or die(mysql_error());
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
        $ins_query="insert into login values('','$username','$password','user')";
  
  if ($database->query($ins_query) === TRUE) 
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

}else{echo "<div class='form'>
         <font color='#8e1b0e' size='+2'>Fail YEAHHHH.</font></div>";}
?>
