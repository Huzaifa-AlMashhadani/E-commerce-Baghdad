<?php
// session_start();


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

   
  <div class="home login">
   <div class="container">
      <nav class="navbar">
         <h2 class="logo">عشتار</h2>
         <ul class="menu-links">
            <li><a href="">الرئيسيه</a></li>
            <li><a href="">الخدمات</a></li>
            <li><a href="#items">العناصر</a></li>
            <li><a href="">اتصل بنا</a></li>
         </ul>
      </nav>
      <div class="contant">
         <div class="text-contct login-form">
            <h2 class="contact-title"> تسجيل الدخول </h2>
            <h3 class="wornig_maseg">رسالة خطا</h3>
           <form action="">
           <label for="number">رقم الهاتف </label>
            <input type="number" name="Phnumber" id="number" />
            <label for="password">كلمة المرور </label>
            <input type="password" name="password" id="password" />
            <button type="submit">تسجيل الدخول</button>
           </form>
                <div class="soshil">
                  <a href="register.php"> انشاء حساب جديد</a>
                </div>
         </div>
      </div>
   </div>
  </div>



   <script src="js/main.js"></script>
   <script src="js/login.js"></script>
</body>
</html>