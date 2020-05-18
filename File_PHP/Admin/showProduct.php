   
   <?php
  include('../../DataBase/database.php');
   $sql = "SELECT productid,nameProduct,brandName,color,material,category,rate,price,Gender,thuMucBoAnh,img FROM product";
   $result = mysqli_query($database, $sql);
   if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
       $idProduct = $row['productid'] ;
        ?>
      <tr id='<?php echo $row['productid']?>'>
        <td class="data"><?php echo  $row['productid']?></td>
        <td class="data"><?php echo  $row['nameProduct']?></td>
        <td class="data"><?php echo  $row['brandName']?></td>
        <td class="data"><?php echo  $row['color']?></td>
        <td class="data"><?php echo  $row['material']?></td>
        <td class="data"><?php echo  $row['category']?></td>
        <td class="data"><?php echo  $row['rate']?></td>
        <td class="data"><?php echo  $row['price']?></td>
        <td class="data"><?php echo  $row['Gender']?></td>    
        <td class="data"><span class="data_image" style="display:none"><?php echo  $row['img']?></span><img   height="150" width="150" src= <?php echo  $row['img']?> ></td>
        <td class="data"><?php echo  $row['thuMucBoAnh']?></td>
        <td>
          <button type="button" onclick="document.getElementById('updateForm').style.display='block'" style="width:auto;"  name="Update"  class="btn btn-warning btn-xs Update" id= '<?php echo $row['productid']?>'>
            Update
          </button>
          
          <div id="updateForm" class="modal">
              <form  class="modal-content animate" action="/action_page.php"  method="post">
                <div class="imgcontainer">
                  <span onclick="document.getElementById('updateForm').style.display='none'" class="close" title="Close Modal">&times;</span>
                  <img src="" id="img_avt" alt="Avatar" class="avatar" width="150">
                </div>

                <div class="container">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                      
                             <input type="hidden" id="updateID" name="updateID" >
                          
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                             <label for="updateNameProduct">Tên Sản Phẩm</label>
                             <input type="text" id="updateNameProduct" name="updateNameProduct"    >
                             
                        </div>

                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                               <label for="updateNhanhieu">Nhãn Hiệu</label>
                                <select id="updateNhanhieu" name="updateNhanhieu">
                                  <option value="Sekio">Sekio </option>
                                  <option value="Sapphire">Sapphire</option>
                                  <option value="Casio">Casio</option>
                                  <option value="SmartWatches">SmartWatches</option>
                                </select>
                      </div>
                      <div class="form-group col-md-6">
                              <label for="updateColor">Màu</label>
                              <select id="updateColor" name="updateColor">
                                <option value="Đen">Đen </option>
                                <option value="Màu Xám">Xám</option>
                                <option value="Xanh">Xanh</option>
                                <option value="Nâu">Nâu</option>
                              </select>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-4">
                          
                        <label for="updateChatlieu">Chất Liệu</label>
                        <select id="updateChatlieu" name="updateChatlieu">
                          <option value="Dây Da">Dây Da </option>
                          <option value="Kim Loại">Kim Loại</option>
                        </select>

                      </div>
                      <div class="form-group col-md-4">
                            
                        <label for="updateTheLoai">Thể Loại</label>
                        <select id="updateTheLoai" name="updateTheLoai">
                          <option value="Đồng Hồ Kim Loại">Đồng Hồ Kim Loại </option>
                          <option value="Đồng Hồ Thông Minh">Đồng Hồ Thông Minh</option>
                          <option value="Đồng Hồ Trẻ Em">Đồng Hồ Trẻ Em</option>
                          <option value="Đồng Hồ Dây Da">Đồng Hồ Dây Da</option>
                        </select>

                      </div>
                      <div class="form-group col-md-4">
                            
                        <label for="updateDanhgia">Đánh Giá Sao</label>
                        <select id="updateDanhgia" name="updateDanhgia">
                          <option value="1">1 </option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>

                      </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="updateGiatien">Giá Tiền</label>
                            <input type="text" id="updateGiatien" name="updateGiatien">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="updateGender">Giới Tính :</label>
                            <select id="updateGender" name="updateGender">
                                  <option value="Nam">Nam</option>
                                  <option value="Nữ">Nữ</option>
                            </select>
                         </div>   
                   </div>

                    <div class="Folder_Image">
                    <label for="updateThuMuc">Chọn Thư Mục Để Bỏ Ảnh </label>
                      <select id="updateThuMuc" name="updateThuMuc">
                          <option value="men_watches">Đồng Hồ Nam </option>
                          <option value="women_watches">Đồng Hồ Nữ</option>
                          <option value="Smart_Watches">Đồng Hồ Thông Minh</option>
                          <option value="Glasses">Mắt Kính</option>
                          <option value="Accessories">Phụ Kiện</option>
                    </select>
                    </div>

                    <div class="Folder_Image">
                    <label for="updateHinhAnh">Chọn Ảnh: </label>
                    <input type="file" id="updateHinhAnh" name="updateHinhAnh">

                    <input type="text"  id="updateAnh" name="imgPath">
                    </div>
                    <span id="helo" class="text-danger"></span>  
                    <button style="text-align: center;" type="button" class="btn-block btn-success Save" 
                    name="Save">Cập Nhật</button>
                    
                  
                </div>

              </form>
                      
            </div>
            
        </td>
        <td>
          <button type="button"  name="remove_details" class="btn btn-danger btn-xs Remove" id= '<?php echo $row['productid']?>'>
              Remove
          </button>

        </td>
      </tr>

<?php }}
?>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 

<script type="text/javascript">
  $(document).ready(function(){

    $('.Remove').click(function(){
      var id = $(this).attr("id");
      $.ajax({
        url:"Admin/deleteProduct.php",
        method:"POST",
        data: {
          id : id ,
          

        },
        success:function(data){
          alert(data);
          load_data();
        }
      });
    });



    $('.Update').click(function(){

      var updateNameProduct = $('#updateNameProduct').val();
      var id = $(this).attr("id");
      $('tr').each(function(){

        var idproduct = ($(this).find('.data:eq(0)').text());      
        var nameProduct = ($(this).find('.data:eq(1)').text());      
        var brandProduct = ($(this).find('.data:eq(2)').text());      
        var color = ($(this).find('.data:eq(3)').text());      
        var chatLieu = ($(this).find('.data:eq(4)').text());      
        var theLoai = ($(this).find('.data:eq(5)').text());      
        var danhGiaSao = ($(this).find('.data:eq(6)').text());      
        var price = ($(this).find('.data:eq(7)').text());      
        var gioiTinh = ($(this).find('.data:eq(8)').text());      
        var img = ($(this).find('.data_image:eq(0)').text()); 

        var thuMucAnh = ($(this).find('.data:eq(10)').text());        
        var imgPath = img.replace('C:fakepath','');
  
        
        if (id == idproduct){
            document.getElementById("img_avt").src = img;
            $('#updateID').val(id);  

            $('#updateNameProduct').val(nameProduct);
            $('#updateNhanhieu').val(brandProduct);
            $('#updateColor').val(color);
            $('#updateChatlieu').val(chatLieu);
            $('#updateTheLoai').val(theLoai);
            $('#updateDanhgia').val(danhGiaSao);
            $('#updateGiatien').val(price);
            $('#updateGender').val(gioiTinh);
            $('#updateAnh').val(img);
            $('#updateThuMuc').val(thuMucAnh); 
      }
      });
    });
    $('.Save').click(function(){ 
          
          var id = $('#updateID').val();     
          var uploadhinhAnh = $('#updateHinhAnh').val();
          var filename = uploadhinhAnh.replace(/C:\\fakepath\\/,'');
          var hinhAnh = '../Image/'+$('#updateThuMuc').val()+'/'+filename;
          
          if (uploadhinhAnh == ''){

              $.ajax({
                  url:"Admin/updateProduct.php",
                  method : "POST",
                  data : {
                    id : id ,
                    updateNameProduct : $('#updateNameProduct').val() ,
                    brandProduct : $('#updateNhanhieu').val() ,
                    color : $('#updateColor').val() ,
                    chatLieu : $('#updateChatlieu').val() ,
                    theLoai : $('#updateTheLoai').val() ,
                    danhGiaSao : $('#updateDanhgia').val() ,
                    price : $('#updateGiatien').val() ,
                    gioiTinh : $('#updateGender').val() ,
                    img : $('#updateAnh').val(),
                    thuMucAnh : $('#updateThuMuc').val() ,

                  },
                  success : function(data){
                    alert(data);
                    load_data();
                  }
            });

          }
          else{
              $.ajax({
                  url:"Admin/updateProduct.php",
                  method : "POST",
                  data : {
                    id : id ,
                    updateNameProduct : $('#updateNameProduct').val() ,
                    brandProduct : $('#updateNhanhieu').val() ,
                    color : $('#updateColor').val() ,
                    chatLieu : $('#updateChatlieu').val() ,
                    theLoai : $('#updateTheLoai').val() ,
                    danhGiaSao : $('#updateDanhgia').val() ,
                    price : $('#updateGiatien').val() ,
                    gioiTinh : $('#updateGender').val() ,

                    img : hinhAnh,
                    thuMucAnh : $('#updateThuMuc').val() ,

                  },
                  success : function(data){
                    alert(data);
                    load_data();
                  }
            });
          }

    });


    function load_data(){
      $.ajax({
          url:"Admin/showProduct.php",
          method:"POST",
          success:function(data){
            $('#user_data').html(data);
            
          }
        });
      }
  });
</script>   
