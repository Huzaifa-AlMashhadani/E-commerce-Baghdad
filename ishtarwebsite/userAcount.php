<?php
session_start();

if(!isset($_SESSION["user_id"])){
   if(!isset($_SESSION["clint_id"])){
      header("location: login.php");
   }

}

include_once "php/config.php";

$id = $_SESSION["user_id"];

$sql = mysqli_query($con, "SELECT * FROM users WHERE user_id = $id");

$row = mysqli_fetch_assoc($sql);



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

   
  <div class="home Userdashbord  orderadd  " id="BackgColor">
   <div class="container">
      <nav class="navbar">
         <img src="php/Orders_images/<?php echo $row['profile_img'] ?>" alt="">
         <div class="saerch" style="display: none;"><h4>    <i class="fa-solid fa-magnifying-glass"></i></h4>
            <input type="search" placeholder="... بحث " id="SaerchInput"/>
        </div>
         <ul class="menu-links">
            <li ><a href="userdashbord.php"><i class="fa-solid fa-house"></i> </a></li>
            <li><a href="ordersDashbord.php"><i class="fa-solid fa-boxes-stacked"></i>  </a></li>
            <li ><a href="orderadd.php" id="enabolOrder"><i class="fa-solid fa-circle-plus fa-2xl"></i></a></li>
            <li class="active"><a href="userAcount.php"><i class="fa-solid fa-user"></i> </a></li>
            <li><a href="#darckMode" id="darckMode"><i class="fa-solid fa-moon"></i> </a></li>
            <li><a href="#darckMode" id="darckMode-w"><i class="fa-regular fa-moon"></i> </a></li>


         </ul>
         <h2 class="logo">عشتار</h2>

      </nav>

      <!-- start user profile  -->

      <div class="contant addorder">
         <div class="text-contct orderadd login-form userAcount">
          
          <h2 class="contact-title">  معلومات الحساب  </h2>
          <h3 class="wornig_maseg">رسالة خطا</h3>

           <div class="imageiplod">
          <form action="">
          <label for="image1" class="imageuplod"><img style="height: auto;" src="images/defult.jpg" alt=""  id="Image1"></label>
            <input type="file" accept="image/png, image/jpg, image/jpeg" name="image1" id="image1" />
           </div>
            <label for="name">   الاسم </label>
            <input type="text" name="name" id="name" value="<?php echo $row['name'] ?>" />
            <input type="text" name="image" id="name" style="display: none;" value="<?php echo $row['profile_img'] ?>" />
            <label for="number"> رقم الهاتف  </label>
            <input type="number" name="number" id="number" value="<?php echo $row['Phnumber'] ?>" />
            <label for="adrese"> البريد اللكتروني  </label>
            <input type="email" name="email" value="<?php echo $row['email'] ?>" />
            <div class="btns">
             <button type="submit" class="btnUpdateuserInfo"> تحديث المعلومات </button>
             <button type="submit" id="disbolOrder" style="display: none;"> الغاء </button>
            </div>
            </form>
         </div>
      </div>
      <!-- end user profile  -->

   </div>
   
  </div>


<script src="js/userdashbord.js"></script>
<script src="js/updeteUserInfo.js"></script>

   
</body>
</html> 