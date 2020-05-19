<!DOCTYPE html>
<html>
<head>
  <title>Quên mật khẩu</title>

</head>
<style type="text/css">
  body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}
.container {
  padding: 16px;
}
</style>
<body>



<div id="id01" class="modal">
  <form class="modal-content" action="ActionPage.php" method="POST">
    <div class="container">
      <h1>Đăng ký tài khoản</h1>
      <p>Xin vui lòng điền vào mẫu thông tin dưới đây</p>
      <hr>
      <label for="email"><b>Tên tài khoản</b></label>
      <input type="text" placeholder="Enter account" name="username" required>

      <label for="email"><b>Số điện thoại </b></label>
      <input type="text" placeholder="Enter phone number" name="phone" required>

      <label for="email"><b>Số chứng minh</b></label>
      <input type="text" placeholder="Enter indenity card number" name="indenitycard" required>

      <label for="psw"><b>Mật khẩu</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Nhập lại mật khẩu </b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

      <div class="clearfix">
        
        <button type="submit" name="forget"  class="signupbtn btn-lg btn-block" style="width: 100%;"  required>Đỗi mật khẩu</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>