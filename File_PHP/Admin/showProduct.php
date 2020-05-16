   
   <?php
  include('../../DataBase/database.php');
   $sql = "SELECT productid,nameProduct,brandName,color,material,category,rate,price,thuMucBoAnh,img FROM product";
   $result = mysqli_query($database, $sql);
   if (mysqli_num_rows($result) > 0) {
  
    while($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?php echo  $row['productid']?></td>
        <td><?php echo  $row['nameProduct']?></td>
        <td><?php echo  $row['brandName']?></td>
        <td><?php echo  $row['color']?></td>
        <td><?php echo  $row['material']?></td>
        <td><?php echo  $row['category']?></td>
        <td><?php echo  $row['rate']?></td>

        <td><?php echo  $row['price']?></td>
        <td><?php echo  $row['thuMucBoAnh']?></td>
        <td><img height="150" width="150" src= <?php echo  $row['img']?> ></td>
        <td>
          <button type="button" onclick="document.getElementById('updateForm').style.display='block'" style="width:auto;"  name="Update"  class="btn btn-warning btn-xs Update" id= <?php echo $row['productid']?>>
            Update
          </button>
          
          <div id="updateForm" class="modal">
              <form class="modal-content animate" action="/action_page.php" method="post">
                <div class="imgcontainer">
                  <span onclick="document.getElementById('updateForm').style.display='none'" class="close" title="Close Modal">&times;</span>
                  <img src="img_avatar2.png" alt="Avatar" class="avatar">
                </div>

                <div class="container">
                  <label for="uname"><b>Username</b></label>
                  <input type="text" placeholder="Enter Username" name="uname" required>

                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="psw" required>
                    
                  <button type="submit">Login</button>
                </div>

              </form>
            </div>
          
        </td>
        <td>
          <button type="button"  name="remove_details" class="btn btn-danger btn-xs Remove" id= <?php echo  $row['productid']?>>
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
      var id = $(this).attr("id");
      
      $.ajax({
        url:"Admin/updateProduct.php",
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

    function load_data(){
      $.ajax({
          url:"Admin/showProduct.php",
          method:"POST",
          success:function(data){
            $('#user_data').html(data);
            
          }
        })
      };
  });
</script>   
