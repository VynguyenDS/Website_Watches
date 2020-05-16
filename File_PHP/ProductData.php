<?php 
require("../DataBase/database.php");
session_start();
mysqli_set_charset($database,'utf8');
if(isset($_POST['chosecheck']))
{
	$emty = 0;
	$check = array();
	$check=$_POST['chosecheck'] ;
	for ($i=0; $i < count($check); $i++) { 
		if($check[$i] == ""){$emty ++;}
	}
}
if (isset($_POST['orderchose'])) {
	$order = $_POST['orderchose'] ;
}
if(isset($_POST['search']))
{
$search = stripslashes($_POST['search']);
$search = mysqli_real_escape_string($database,$search);
}
		

	# just chose checkbox
	if($emty < count($check) and $order =='all'){
        $sel_query="Select * from product WHERE (Gender ='$check[0]' OR Gender='$check[1]'
              		OR brandName ='$check[2]' OR brandName ='$check[3]' OR brandName ='$check[4]' OR brandName ='$check[5]' OR color ='$check[6]'  
              		OR color ='$check[7]' OR color ='$check[8]' OR color ='$check[9]'  OR color ='$check[10]' OR material ='$check[11]' 
              		OR material ='$check[12]' OR category ='$check[13]' OR category ='$check[14]' OR category ='$check[15]'
              		OR category ='$check[16]') AND nameProduct LIKE '%$search%';";
    }
    # just chose order
    elseif($emty >=count($check) and $order =='BCN')
    {
    	$sel_query="Select * from product WHERE nameProduct LIKE '%$search%' ORDER BY NumberSale DESC;";
    }
    elseif($emty >=count($check) and $order =='KHYT')
    {
    	$sel_query="Select * from product WHERE nameProduct LIKE '%$search%' ORDER BY rate DESC;";
    }
    elseif($emty >=count($check) and $order =='GTCDT')
    {
    	$sel_query="Select * from product WHERE nameProduct LIKE '%$search%' ORDER BY price DESC;";
    }
    elseif($emty >=count($check) and $order =='GTTDC')
    {
    	$sel_query="Select * from product WHERE nameProduct LIKE '%$search%' ORDER BY price ASC;";
    }
    # chose checkbox and order

    elseif($emty <count($check) and $order =='BCN')
    {
    	$sel_query="Select * from product WHERE (Gender ='$check[0]' OR Gender='$check[1]'
              		OR brandName ='$check[2]' OR brandName ='$check[3]' OR brandName ='$check[4]' OR brandName ='$check[5]' OR color ='$check[6]'  
              		OR color ='$check[7]' OR color ='$check[8]' OR color ='$check[9]'  OR color ='$check[10]' OR material ='$check[11]' 
              		OR material ='$check[12]' OR category ='$check[13]' OR category ='$check[14]' OR category ='$check[15]'
              		OR category ='$check[16]') AND nameProduct LIKE '%$search%' ORDER BY NumberSale DESC;";
    }
    elseif($emty <count($check) and $order =='KHYT')
    {
    	$sel_query="Select * from product WHERE (Gender ='$check[0]' OR Gender='$check[1]'
              		OR brandName ='$check[2]' OR brandName ='$check[3]' OR brandName ='$check[4]' OR brandName ='$check[5]' OR color ='$check[6]'  
              		OR color ='$check[7]' OR color ='$check[8]' OR color ='$check[9]'  OR color ='$check[10]' OR material ='$check[11]' 
              		OR material ='$check[12]' OR category ='$check[13]' OR category ='$check[14]' OR category ='$check[15]'
              		OR category ='$check[16]') AND nameProduct LIKE '%$search%' ORDER BY rate DESC;";
    }
    elseif($emty <count($check) and $order =='GTCDT')
    {
    	$sel_query="Select * from product WHERE (Gender ='$check[0]' OR Gender='$check[1]'
              		OR brandName ='$check[2]' OR brandName ='$check[3]' OR brandName ='$check[4]' OR brandName ='$check[5]' OR color ='$check[6]'  
              		OR color ='$check[7]' OR color ='$check[8]' OR color ='$check[9]'  OR color ='$check[10]' OR material ='$check[11]' 
              		OR material ='$check[12]' OR category ='$check[13]' OR category ='$check[14]' OR category ='$check[15]'
              		OR category ='$check[16]') AND nameProduct LIKE '%$search%' ORDER BY price DESC;";
    }
    elseif($emty <count($check) and $order =='GTTDC')
    {
    	$sel_query="Select * from product WHERE (Gender ='$check[0]' OR Gender='$check[1]'
              		OR brandName ='$check[2]' OR brandName ='$check[3]' OR brandName ='$check[4]' OR brandName ='$check[5]' OR color ='$check[6]'  
              		OR color ='$check[7]' OR color ='$check[8]' OR color ='$check[9]'  OR color ='$check[10]' OR material ='$check[11]' 
              		OR material ='$check[12]' OR category ='$check[13]' OR category ='$check[14]' OR category ='$check[15]'
              		OR category ='$check[16]') AND nameProduct LIKE '%$search%' ORDER BY price ASC;";
    }

    else
    {
        $sel_query="Select * from product WHERE nameProduct LIKE '%$search%';";

    }



 $count =1;
 $result = mysqli_query($database,$sel_query);
 	while($row = mysqli_fetch_assoc($result) and $count<=6) { ?>
        <div class="col-md-4">  
          <div class="card shadow" >
             <div class="inner">
                <img class="card-img-top rounded " src="<?=$row["img"]?>" alt="Card image cap">
             </div>

             <div class="card-body text-left">
                <p class="card-text" style="text-align: left;">
                    <?=$row["nameProduct"]?>
                </p>
                <span id="rating">
                <!-- rate -->
                    <?php $rate = 1;
                    while($rate <=5) {
                      if($rate<=$row["rate"]){?>

                        <span class="fa fa-star checked" style="color: orange;"></span>
                        <?php }else{?>
                          
                        <span class="fa fa-star"></span>
                        <?php }$rate++;}?>
                        <!-- -->
                        </span>
                        <div><span><?=$row["price"]?></span>VND</div>

            </div>
         </div>          
      </div>
<?php $count++; }?>
              		
              