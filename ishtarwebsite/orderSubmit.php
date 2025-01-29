<?php
include_once "php/config.php";
session_start();


if(isset($_SESSION['clint_id'])){
   $user_id = $_SESSION['clint_id'];
   $rows = mysqli_query($con, "SELECT * FROM orders WHERE order_id = $user_id");

}else{
   echo "<h1 style='padding: 10px; margin:auto;'> هذا الصفحة مخصصة للزبون فقط وهذا ليس حساب زبون عادي </h1>";
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
   <div class="home login" style="min-height: 130vh;">
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
  

         <?php
         
         foreach($rows as $row){

           $images = explode(",",$row['order_images']);
           
            if(!empty($images[1])){

               $image_1 = $images[1];
            }else{
               $image_1 = "";
            }
            if(!empty($images[2])){

               $image_2 = $images[2];
            }else{
               $image_2 ="";
            }

            echo '<div class="with-page">
      <div class="order-printer" style="background-color: #fff;">
         <h1>مطبعة بوابة عشتار </h1>
         <h3 class="wornig_maseg" style="color: #000; background-color: rgba(0, 128, 0, 0.509); font-weight: bold;">رسالة خطا</h3>
         <h3> <span>'.$row['id'].'</span>: ID </h3>
         <h3>رقم الطلب : <span>'.$row['order_id'].'</span></h3>
         <h3>البيج  : <span>'.$row['page_name'].'</span></h3>
         <h3>السعر  : <span>'.$row['order_price'].'</span>  </h3>
         <h3>العنوان   : <span class="ad">'.$row['addres'].'</span></h3>
         <h3>رقم الهاتف   : <span>'.$row['cclaent_number'].'</span></h3>
         <div class="images">
             <img src="php/Orders_images/'.$image_1.'" alt="">
             <img src="php/Orders_images/'.$image_2.'" alt="">
             <img src="php/Orders_images/'.$images[0].'" alt="">
         </div>
         <h1 style="border-bottom: none; border-top: 1px solid #333; color: rgb(17, 70, 230);">تم استلام طلبك بنجاح </h1>
         <p style="text-align: center; font-size: 20px;">سوف نعالج طلبك في اسرع وقت في حال كان هناك اي مشكلة سوف نتواصل معك عبر الرقم المدخل شكرا لاختيارك مطبعة عشتار </p>

     </div>
   </div>';
         }
         
         ?>

         




 </div>
</div>
   <div class="LodeR"><span class="loader"></span></div>



</body>
</html>