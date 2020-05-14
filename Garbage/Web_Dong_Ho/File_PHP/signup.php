<!DOCTYPE html>
<html>
<head>
  <title>Đăng ký</title>

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
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Đăng ký tài khoản</h1>
      <p>Xin vui lòng điền vào mẫu thông tin dưới đây</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Mật khẩu</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Nhập lại mật khẩu </b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Lưu tài khoản
      </label>

      <p>Khi tạo ra tài khoản bạn phải chấp nhận <a href="#" style="color:dodgerblue">Điều khoản và quyền riêng tư</a>.</p>

      <div class="clearfix">
        
        <button type="submit" class="signupbtn btn-lg btn-block" style="width: 100%;" >Đăng ký</button>
      </div>
    </div>
  </form>
</div>
</body>
</html>