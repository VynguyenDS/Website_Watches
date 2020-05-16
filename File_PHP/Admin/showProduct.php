   <?php
     include('../../DataBase/database.php');
   if(isset($_POST['nameProduct']) !=''){
   $sql = "SELECT nameProduct,img FROM product";
   $result = mysqli_query($database, $sql);
   if (mysqli_num_rows($result) > 0) {
  // output data of each row
    while($row = mysqli_fetch_assoc($result)) { ?>
      <tr>
        <td><?php $row['nameProduct'] ?></td>
        <td><?php $row['img'] ?></td>
      </tr>
    <?php }}
    else{
      echo "Fail";
    }}  ?>

   

    
 