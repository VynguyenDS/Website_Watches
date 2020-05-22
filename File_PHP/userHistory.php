 <?php
    include('../DataBase/database.php');
    
 

  ?>
<!doctype html>
<html lang="en">
  <head>
       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../File_CSS/Mainpage.css">
    <link rel="stylesheet" type="text/css" href="../File_CSS/Advertisement1.css">
    <link rel="stylesheet" type="text/css" href="../File_CSS/Advertisement2.css">
    <link rel="stylesheet" type="text/css" href="../File_CSS/women.css">
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">
    <title>Lịch Sử Đơn Hàng</title>
  </head>
  <body>    
    <?php include 'PartOfWeb/HeaderBar.php';?>
        <div class="infCustomer container-fluid">

        <table class="table table-striped table-bordered" >
          <thead>
            <tr>
              <th scope="col">Mã Đặt Hàng</th>
              <th scope="col">Tên Sản Phẩm</th>
              <th scope="col">Nhãn Hiệu</th>
              <th scope="col">Màu </th>
              <th scope="col">Chất Liệu</th>
              <th scope="col">Thể loại</th>
             
              <th scope="col">Giá tiền/VND</th>
             
              <th scope="col">Sản Phẩm Ảnh</th>
    
              <th scope="col">Người Đặt</th>
              
            </tr>
          </thead>
          <tbody id="user_data">

          </tbody>
        </table>
    </div>

    

   
    


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
         var number_of_show = 6;
  function AddView()
  {
    number_of_show = number_of_show +6;
    LoadProduct();
  }
  function LoadProduct() {
    
    var arraycheck = new Array("Nam","");
    var check =document.getElementsByClassName('form-check-input');
    var search_input = "";
    var order_chose = document.getElementById('orderproduct').value;
    for (var i = 0; i < check.length; i++) {

      if(check[i].checked == true)
      {
        
        arraycheck.push(document.getElementsByClassName('form-check-label')[i].textContent)
      }else
      {
        arraycheck.push("")
      }

    }


    $.post("ProductData.php",
    {
      chosecheck: arraycheck,
      orderchose : order_chose,
      search: search_input,
      count : number_of_show,
    },
    function(data,status){
      if(status =="success")
      {
        document.getElementById('product').innerHTML ="";
        document.getElementById('product').innerHTML = data;
      }
      
    });
  }
    </script>
  </body>
</html>
