<?php
session_start();

if($_SESSION["root_id_4448"] === "1"){
    if($_SESSION["user_id"] === "1"){
      
    
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

   
  <div class="home Userdashbord" id="BackgColor">
   <div class="container">
      <nav class="navbar">
         <img src="images/logo.jpg" alt="">
         <div class="saerch" style="display: none;"><h4>    <i class="fa-solid fa-magnifying-glass"></i></h4>
            <input type="search" placeholder="... بحث " id="SaerchInput"/></div>
         <ul class="menu-links">
            <li  class="active"><a href="Admin-root-Dashbord.php"><i class="fa-solid fa-house"></i> </a></li>
            <li ><a href="Admin-root-orders.php"><i class="fa-solid fa-boxes-stacked"></i>  </a></li>
            <li><a href="Admin-root-items.php"><i class="fa-solid fa-box"></i></a></li>
            <li><a href="Admin-root-addOrder.php"><i class="fa-solid fa-circle-plus fa-2xl"></i></a></li>
            <li><a href="Admin-root-acount.php"><i class="fa-solid fa-user"></i> </a></li>
            <li><a href="Admin-root-users.php"><i class="fa-solid fa-users"></i></a></li>
            <li><a href="#darckMode" id="darckMode"><i class="fa-solid fa-moon"></i> </a></li>
            <li><a href="#darckMode" id="darckMode-w"><i class="fa-regular fa-moon"></i> </a></li>
         </ul>
         <h2 class="logo">Dashboard</h2>
      </nav>
  
      <!-- start root short tooles -->
       <div class="short-tooles">
        <a href=""><div class="add-order"><i class="fa-solid fa-plus"></i></div></a>
       <a href=""><div class="add-user"><i class="fa-solid fa-user-plus"></i></div></a> 
        <a href=""><div class="add-item"><i class="fa-solid fa-box-open"></i></div></a>
        <a href=""><div class="add-admin"><i class="fa-solid fa-user-shield"></i></div></a>
       </div>
      <!-- end root short tooles -->
      
   </div>
   
  </div>


<script src="js/userdashbord.js"></script>
   
</body>
</html>