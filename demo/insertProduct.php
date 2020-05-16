<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../File_CSS/Mainpage.css">
    <link rel="stylesheet" type="text/css" href="../File_CSS/Login.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
  
    <title>ĐỒNG HỒ HƯNG BA</title>
  </head>
  <style type="text/css">
          body {font-family: Arial, Helvetica, sans-serif;}
      * {box-sizing: border-box;}

      input[type=text], select, textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
      }

      input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      input[type=submit]:hover {
        background-color: #45a049;
      }

      .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
      }
</style>
</head>
  </style>
  <body>
    

    <!--Header bar have features login and dilivery -->
    <div class="website_mainpage">


    <div class="navbar_menu container-fluid" style="float: left;">
      <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="#"><img src="../Image/Brand/logo.png" class="rounded"></a>
            <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="../Admin/Women.php">
                          <span><b>NỮ</b></span><span class="sr-only">(current)</span>
                    </a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Admin/Men.php">
                          <span><b>NAM</b></span>
                    </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../Admin/SmartWatches.php">
                    <span ><b>ĐỒNG HỒ THÔNG MINH</b></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../Admin/Glasses.php">
                    <span>
                      <b>KÍNH MẮT</b>
                    </span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../Admin/Customer.php">
                    <span ><b>KHÁCH HÀNG</b></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../Admin/Ordered.php">
                    <span ><b>ĐẶT HÀNG</b></span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../Admin/Phukien.php">
                    <span ><b>PHỤ KIỆN</b></span>
                  </a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0" >
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" >
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
      </div>
      </nav>
    </div>


    <div class="infCustomer container-fluid">
        <table class="table table-striped table-bordered" >
          <thead>
            <tr>
              <th scope="col">STT</th>
              <th scope="col">Tên Sản Phẩm</th>
              <th scope="col">Nhãn Hiệu</th>
              <th scope="col">Màu </th>
              <th scope="col">Chất Liệu</th>
              <th scope="col">Thể loại</th>
              <th scope="col">Đáng giá</th>
              <th scope="col">Giá tiền</th>
              <th scope="col">Ảnh</th>
              <th scope="col">Update</th>
              <th scope="col">Delete</th>
              
            </tr>
          </thead>
          <tbody id="user_data">
             
              
          </tbody>
        </table>
    </div>



    <div class="container">
          <form method="get">
            <div class="form-row">
            <div class="form-group col-md-12">
                 <label for="nameProduct">Tên Sản Phẩm</label>
                 <input type="text" id="nameProduct" name="nameProduct">
                 <span id="enterNameProduct" class="text-danger"></span>  
            </div>

          </div>


          <div class="form-row">
            <div class="form-group col-md-6">
                     <label for="nhanhieu">Nhãn Hiệu</label>
                      <select id="nhanhieu" name="nhanhieu">
                        <option value="Sekio">Sekio </option>
                        <option value="Sapphire">Sapphire</option>
                        <option value="Casio">Casio</option>
                        <option value="SmartWatches">SmartWatches</option>
                      </select>
            </div>
            <div class="form-group col-md-6">
                    <label for="color">Màu</label>
                    <select id="color" name="color">
                      <option value="Đen">Đen </option>
                      <option value="Màu Xám">Xám</option>
                      <option value="Xanh">Xanh</option>
                      <option value="Nâu">Nâu</option>
                    </select>
            </div>
          </div>


          <div class="form-row">
            <div class="form-group col-md-4">
                
              <label for="chatlieu">Chất Liệu</label>
              <select id="chatlieu" name="chatlieu">
                <option value="Dây Da">Dây Da </option>
                <option value="Kim Loại">Kim Loại</option>
              </select>

            </div>
            <div class="form-group col-md-4">
                  
              <label for="theLoai">Thể Loại</label>
              <select id="theLoai" name="theLoai">
                <option value="Đồng Hồ Kim Loại">Đồng Hồ Kim Loại </option>
                <option value="Đồng Hồ Thông Minh">Đồng Hồ Thông Minh</option>
                <option value="Đồng Hồ Trẻ Em">Đồng Hồ Trẻ Em</option>
                <option value="Đồng Hồ Dây Da">Đồng Hồ Dây Da</option>
              </select>

            </div>
            <div class="form-group col-md-4">
                  
              <label for="danhgia">Đánh Giá Sao</label>
              <select id="danhgia" name="danhgia">
                <option value="Một">1 </option>
                <option value="Hai">2</option>
                <option value="Ba">3</option>
                <option value="Bốn">4</option>
                <option value="Năm">5</option>
              </select>

            </div>
          </div>


          <label for="giatien">Giá Tiền</label>
          <input type="text" id="giatien" name="giatien">
          <label for="ThuMuc">Chọn Thư Mục Để Bỏ Ảnh </label>
            <select id="Folder" name="ThuMuc">
                <option value="men_watches">Đồng Hồ Nam </option>
                <option value="women_watches">Đồng Hồ Nữ</option>
                <option value="Smart_Watches">Đồng Hồ Thông Minh</option>
                <option value="Glasses">Mắt Kính</option>
                <option value="Accessories">Phụ Kiện</option>
              </select><br> 
            <div class="custom-file">
             

              <label for="img">Chọn Ảnh:</label>
              <input onclick="Hello()"  type="file" id="img" name="img" accept="image/*"><br>

              <span id = 'myIgmPath'></span>
          </div>

          <button style="text-align: center;" type="button" class="btn-block btn-primary" 
          name="insert" id ="insert">Insert</button>
          <button style="text-align: center;" type="submit" class="btn-block btn-primary" 
          name="save" id ="Save">Lưu</button>
          <input type="hidden" name="row_id" id="hidden_row_id" />
          </form>
         

      </div>


    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
     
    <script type="text/javascript">
    $(document).ready(function(){ 
     var count = 0 ;
     $('#insert').click(function(){
      var  nameProduct = '';
      var brandProduct = $('#nhanhieu').val();
      var color = $('#color').val();
      var chatlieu = $('#chatlieu').val();
      var theLoai = $('#theLoai').val();
      var danhgia = $('#danhgia').val();
      var thuMuc = $('#Folder').val();  
      var giatien = $('#giatien').val();
      var filename = $('#img').val();
      var filename = filename.replace(/C:\\fakepath\\/,'');
      var filename = '../../../Image/'+thuMuc+'/'+filename;
      if($('#nameProduct').val() == ''){

        error_nameProduct = 'Vui Lòng Nhập các trường ';
        $('#enterNameProduct').text(error_nameProduct);
        nameProduct = ''
      }
      else{
        error_nameProduct = '';
        $('#enterNameProduct').text(error_nameProduct);
        nameProduct =  $('#nameProduct').val();
        
      }
      
      if(nameProduct == '')
      {
         return false ; 

      }
      else{
        if($('#insert').text() == 'Insert'){
          count = count + 1;
          output = '<tr id="row_'+count+'">';
          output += '<td>'+count+'</td>';
          output += '<td>'+nameProduct+'</td>';
          output += '<td>'+brandProduct+'</td>';
          output += '<td>'+color+'</td>';
          output += '<td>'+chatlieu+'</td>';
          output += '<td>'+theLoai+'</td>';
          output += '<td>'+danhgia+'</td>';
          output += '<td>'+giatien+'VND'+'</td>';
          output += '<td>'+'<img src ='+filename+' width = 150px height = 150px >'+'</td>';
          output += '<td><button type="button" name="Update" class="btn btn-warning btn-xs Update" id="'+count+'">Update</button></td>';  
          output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></td>';
          output += '</tr>';
          $('#user_data').append(output);
        }

      }
      $.ajax({
       
            method:"get",
            data:{
              nameProduct : nameProduct ,
              brandProduct : brandProduct,
              color : color,
              chatlieu : chatlieu,
              theLoai : theLoai,
              danhgia : danhgia,
              giatien : giatien,
              filename : filename,
            },  
            success: function (data) {
              alert(data);
            }
          });

     });


      $(document).on('click', '.remove_details', function(){
          var row_id = $(this).attr("id");
            if(confirm("Are you sure you want to remove this row data?"))
              {
               $('#row_'+row_id+'').remove();
              }
              else
              {
               return false;
              }
      });

     
      $('#save').click(function(){
            var  nameProduct = '123123';
            var brandProduct = $('#nhanhieu').val();
            
            var color = $('#color').val();
            var chatlieu = $('#chatlieu').val();
            var theLoai = $('#theLoai').val();
            var danhgia = $('#danhgia').val();
            var thuMuc = $('#Folder').val();  
            var giatien = $('#giatien').val();
            var filename = $('#img').val();
            var filename = filename.replace(/C:\\fakepath\\/,'');
            var filename = '../../../Image/'+thuMuc+'/'+filename;
          
          $.ajax({
            url:"insert.php",
            method:"get",
            data:{
              nameProduct : nameProduct ,
              brandProduct : brandProduct,
              color : color,
              chatlieu : chatlieu,
              theLoai : theLoai,
              danhgia : danhgia,
              giatien : giatien,
              filename : filename,
            },  
            success: function (data) {
            
              $('#user_data').append(data);
            }
          });
        });
  });
  </script>

  </body>

</html>
<!--Hello -->
<!--https://www.fossil.com/en-us/watches/mens-watches/-->