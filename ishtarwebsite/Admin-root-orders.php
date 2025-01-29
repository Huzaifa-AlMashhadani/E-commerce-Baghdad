<?php
session_start();

if($_SESSION["root_id_4448"] === "1"){
    if($_SESSION["user_id"] === "1"){
    
      include_once "php/config.php";

      $rows = mysqli_query($con, "SELECT * FROM orders WHERE statues != '100'");
    
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- fonts link  -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght,HEXP@160..700,0..100&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/main.css">
   <title>Ishtar</title>
</head>
<body>
   <div class="LodeR"><span class="loader"></span></div>


   
   
  <div class="root-pages home Userdashbord " id="BackgColor">
   <div class="container">
      <nav class="navbar">
         <img src="images/logo.jpg" alt="">
         <div class="saerch" ><h4>    <i class="fa-solid fa-magnifying-glass"></i></h4>
            <input type="search" placeholder="... بحث " id="SaerchInput"/></div>
         <ul class="menu-links">
            <li ><a href="Admin-root-Dashbord.php"><i class="fa-solid fa-house"></i> </a></li>
            <li class="active"><a href="Admin-root-orders.php"><i class="fa-solid fa-boxes-stacked"></i>  </a></li>
            <li><a href="Admin-root-items.php"><i class="fa-solid fa-box"></i></a></li>
            <li><a href="Admin-root-addOrder.php"><i class="fa-solid fa-circle-plus fa-2xl"></i></a></li>
            <li><a href="Admin-root-acount.php"><i class="fa-solid fa-user"></i> </a></li>
            <li ><a href="Admin-root-users.php"><i class="fa-solid fa-users"></i></a></li>
            <li><a href="#darckMode" id="darckMode"><i class="fa-solid fa-moon"></i> </a></li>
            <li><a href="#darckMode" id="darckMode-w"><i class="fa-regular fa-moon"></i> </a></li>
         </ul>
         <h2 class="logo">Dashboard</h2>
      </nav>
      <div class="buttomns">           
                  <button type="submit" class="select_orders" name="btn_600"><a href="print-order.php"> طباعة الكل </a></button>
                  <button type="submit"  class="select_orders" name="btn_200"> <a href="print-order.php?order_ID=200">طباعة المثبت</a></button>
                  <button type="submit" class="select_orders" name="btn_400"><a href="print-order.php?order_ID=400"> طباعة المطبوع  </a></button>
                  <button type="submit" class="delete_orders" name="btn_600"><a href="php/Admin-rootdeleteOrders.php?deOrMAM=33"> حذف الكل </a></button>
                </div> 
      <!-- start root orders  -->
      <div class="root-orders">
       


      <?php 

      foreach($rows as $row){

         $order_id = $row['order_id'] ;
         $sql = mysqli_query($con, "SELECT name, user_id FROM users WHERE user_id = $order_id");
         $img = $row['order_images'];
         $image = explode(",", $img);

       $pagename =  mysqli_fetch_assoc($sql);


       $status = $row['statues'];

       if($status === "600"){
        $status = "منجز";
       }
       if($status === "400"){
        $status = "مطبوع";
       }
       if($status === "200"){
        $status = "مثبت";
       }
       $price = $row['order_price'] /1000;
     $images = $row['order_images'];
     $image = explode(",", $images);

         echo '
         <div class="order" style="margin: 50px auto;">
         <a href="print-order.php?id='.$row['id'].'">
            <div class="imge-name-statues">
               <span class="OrderStatues">'.$status.'</span>
               <h1 class="OrderClantName">'.$row['claent_name'].'</h1>
               <img src="php/Orders_images/'.$image[1].'" alt="">
           </div>
           <div class="detils">
               <span class="OrderID">ID: '.$row['id'].'</span>
               <span class="ClantNumber"> '.$price.'.000 IQD</span>
               <span class="pageName"> '.$pagename['name'].' </span>
           </div>
         </a>
     </div>';
      }
      ?>

        <!--  -->




      </div>
      <!-- end root orders  -->
      
   </div>
   
  </div>


<script src="js/rootOrders.js"></script>
   
</body>
</html>