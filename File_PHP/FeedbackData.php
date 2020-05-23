<?php 
require("../DataBase/database.php");
session_start();
mysqli_set_charset($database,'utf8');
if(isset($_POST['Name']) and $_POST['Name']!="")
{
	$id = $_POST['Id'];
	$name = $_POST['Name'];
	$rate = $_POST['Rate'];
	$comment = $_POST['Feedback'];
	$date = date("d")."/".date("m")."/".(date("y")+2000);

	$insert_feedback ="INSERT INTO `feedback` (`idProduct`, `customerName`, `rate`, `Date`, `comment`) VALUES ('$id', '$name', '$rate', '$date', '$comment');";
    
    if ($database->query($insert_feedback) === TRUE) 
    {
        $sel_query="Select * FROM feedback WHERE idProduct = $product_id;";
        $result = mysqli_query($database,$sel_query);
		while($row = mysqli_fetch_assoc($result)) { ?>
    		<div class="comment_customer" style="padding-left: 50px;">
     			<span><b>Bởi: </b></span><span><?= $row['customerName']?></span><br>
     			<span><?= $row['comment']?></span><br>
      			<?php 
         			$rate_coment = 0;
         			while($rate_coment<5){
            			if($rate_coment< $row['rate']){?>
                			<span class="fa fa-star checked" style="color: orange;"></span>
                	<?php }$rate_coment++;}?>
                <br>
                <span>Thời gian:<?= $row['Date']?></span><br>
                <span></span>
   		 	</div>
    		<hr>
            <?php }
    }
           
    else 
    {
        echo "Error:  fail";
    }


}
?>