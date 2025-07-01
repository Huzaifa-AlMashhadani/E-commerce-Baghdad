<?php
session_start();

if($_SESSION["root_id_4448"] === "1"){
    if($_SESSION["user_id"] === "1"){
      
        include_once "php/config.php";

         
        if(! empty($_GET['order_ID'])){
            $stat = $_GET['order_ID'];
            $rows = mysqli_query($con, "SELECT * FROM orders WHERE statues = $stat");

        }else{
            if(!empty($_GET['id']) ){
                $id = $_GET['id'];
                  $rows = mysqli_query($con, "SELECT * FROM orders WHERE id = $id");
    
            
            }else{
                $rows = mysqli_query($con, "SELECT * FROM orders");
    
            }
        }

        
        


        
     
    }else{
      header("location: userdashbord.php");
    }
}else{
  header("location: userdashbord.php");

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/print.css">
    <link rel="stylesheet" href="css/main.css">

    <title>prints orders</title>
</head>
<body>
    <div class="with-page">
        


    <?php 
    foreach($rows as $row){

       $images = $row['order_images'];

       $image = explode(",",$images);

       $img_1 = "";
       $img_2 = "";
       $img_3 = "";

       if(!empty($image[1])){
        $img_1 = $image[1];
       }
       if(!empty($image[2])){
        $img_2 = $image[2];
       }
       if(!empty($image[3])){
        $img_3 = $image[3];
       }

        echo '<div class="order-printer">
            <h1>مطبعة بوابة عشتار </h1>
            <h3> <span>'.$row['id'].'</span>: ID </h3>
            <h3>رقم الطلب : <span>'.$row['order_id'].'</span></h3>
            <h3>البيج  : <span>'.$row['page_name'].'</span></h3>
            <h3>السعر  : <span>'.$row['order_price'].'</span>  </h3>
            <h3>العنوان   : <span class="ad">'.$row['addres'].'</span></h3>
            <h3>رقم الهاتف   : <span>'.$row['cclaent_number'].'</span></h3>
            <h3>الوصف  : <span class="ad">'.$row['descrption'].'</span></h3>
            <div class="images">
                <img src="php/Orders_images/'.$image[0].'" alt="">
                <img src="php/Orders_images/'.$img_1.'" alt="">
                <img src="php/Orders_images/'.$img_2.'" alt="">
                <img src="php/Orders_images/'.$img_3.'" alt="">
            </div>
        </div> 
   ';
             };
    ?>
          
                




    <!-- <div class="order-printer">
            <h1>مطبعة بوابة عشتار </h1>
            <h3> <span>133</span>: ID </h3>
            <h3>رقم الطلب : <span>22</span></h3>
            <h3>البيج  : <span>ليان</span></h3>
            <h3>السعر  : <span>133000</span>  </h3>
            <h3>العنوان   : <span class="ad">بابل الاسكندرية قرب جامع الاسكندرية </span></h3>
            <h3>رقم الهاتف   : <span>07811930693</span></h3>
            <div class="images">
                <img src="images/item-8.jpg" alt="">
                <img src="images/item-5.jpg" alt="">
                 <img src="images/item-8.jpg" alt="">
                <img src="images/item-5.jpg" alt=""> 
            </div>
        </div> -->



        
        
    </div>


</body>
</html>