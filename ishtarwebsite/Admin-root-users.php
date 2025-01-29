<?php
session_start();

if($_SESSION["root_id_4448"] === "1"){
    if($_SESSION["user_id"] === "1"){
      
      include_once "php/config.php";
      $sql = mysqli_query($con, "SELECT * FROM users");
    
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
            <li ><a href="Admin-root-orders.php"><i class="fa-solid fa-boxes-stacked"></i>  </a></li>
            <li><a href="Admin-root-items.php"><i class="fa-solid fa-box"></i></a></li>
            <li><a href="Admin-root-addOrder.php"><i class="fa-solid fa-circle-plus fa-2xl"></i></a></li>
            <li><a href="Admin-root-acount.php"><i class="fa-solid fa-user"></i> </a></li>
            <li class="active"><a href="Admin-root-orders.php"><i class="fa-solid fa-users"></i></a></li>
            <li><a href="#darckMode" id="darckMode"><i class="fa-solid fa-moon"></i> </a></li>
            <li><a href="#darckMode" id="darckMode-w"><i class="fa-regular fa-moon"></i> </a></li>
         </ul>
         <h2 class="logo">Dashboard</h2>
      </nav>
  
      <!-- start root orders  -->
      <div class="root-orders">
       




     <?php
      foreach($sql as $row){
     $img = $row['profile_img'];

     if(!empty($img)){
         $image = $row['profile_img'];
     }else{
      $image = "defult.jpg";
     }

         echo '
         <div class="order user">
   <a href="">
      <div class="imge-name-statues">
         <span class="OrderStatues" style="display: none;">Statues</span>
         <h1 class="OrderClantName"> ' . $row['name'] . ' </h1>
         <h1 class="OrderClantName"> ' . $row['Phnumber'] . ' </h1>
         <img src="php/Orders_images/' . $image . '" alt="">
     </div>
     <div class="detils">
         <span class="OrderID"></span>
         <span class="ClantNumber"> </span>
         <span class="pageName"> </span>
     </div>
   </a>
</div>';
      }
?>

  <!-- <div class="order user"> profile_img
   <a href="">
      <div class="imge-name-statues">
         <span class="OrderStatues" style="display: none;">Statues</span>
         <h1 class="OrderClantName">سلام ابصراوي</h1>
         <img src="images/item-10.jpg" alt="">
     </div>
     <div class="detils">
         <span class="OrderID"></span>
         <span class="ClantNumber"> </span>
         <span class="pageName"> </span>
     </div>
   </a>
</div> -->



      </div>
      <!-- end root orders  -->
      
   </div>
   
  </div>


<script src="js/rootOrders.js"></script>
   
</body>
</html>