
<?php

include_once "php/config.php";

$rows = mysqli_query($con, "SELECT * FROM items LIMIT 10")

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

  <div class="home" id="HomePage">
   <div class="container">
      <nav class="navbar">
         <h2 class="logo">عشتار</h2>
         <ul class="menu-links">
            <li><a href="#">الرئيسيه</a></li>
            <li><a href="#servises">الخدمات</a></li>
            <li><a href="allItems.php">كل العناصر </a></li>
            <li><a href="#call">اتصل بنا</a></li>
         </ul>
      </nav>
      <div class="contant">
         <div class="box">
           <div class="card" id="front"> </div>
           <div class="card" id="back"> </div>
           <div class="card" id="left"></div>
           <div class="card" id="rigth"></div>
           <div class="card" id="top"></div>
           <div class="card" id="bottom"></div>
         </div>
         <div class="text-contct home-textcontact">
            <h2 class="contact-title">عشتار خوش اختيار </h2>
            <p>
               مرحبا بكم 
               <br>
            مطبعة عشتار تقدم لكم اجمل الهدايا والمطبوعات بجودة عاليه 
            <br>
            نوفر خدمات الرسم الرقمي والتسويق الكتروني وانشاء الاعلانات والترويج 
            <br>
            </p>
                <div class="soshil">
                  <a href=""><i class="fa-brands fa-facebook"></i></a>
                  <a href=""><i class="fa-brands fa-instagram"></i></a>
                  <a href=""><i class="fa-brands fa-telegram"></i></a>
                  <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                </div>
         </div>
      </div>
   </div>
  </div>

  <!-- start items page  -->
 <div class="itmes" id="items">
   <div class="container">
      <h1 class="title"> <span></span>العناصر <span></span> </h1>
      <div class="saerch">
         <input type="search" name="saerch" id="saerch"><h4>    <i class="fa-solid fa-magnifying-glass"></i></h4>
      </div>
      <div class="items-box">
         <!-- start item  -->
         <?php 
         foreach($rows as $row){
           $images = $row['item_images'];
           $image = explode(",",$images);
            echo '<div class="itme" id="Item">
            <a href="showItem.php?item_id='.$row['item_id'].'" class="item">
               <img src="php/Orders_images/'.$image[1].'" alt="">
            </a>
            <p id="ItemName">'.$row['item_title'] . " " . $row['item_descrption'].' </p>
         </div>';
         }
         ?>

         <!-- end item  -->


      </div>
   </div>
</div>
<!-- end items page  -->

<!-- start servises html code -->
     <div class="servises" id="servises">
      <h1 class="title"> <span class="black"></span>خدمات مميزة <span class="black"></span></h1>
      <div class="container">
         <div class="servise">
            <img src="images/social-media-marketing.png" alt="img is not working">
            <h1>اعلان ممول </h1>
            <p> المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذ لهذه الأحرف. خمسة قرون من الزمن لم تقضي على </p>

                <a href="" class="item-show">معرفة المزيد</a>
                <a href="" class="item-buy">اطلب الان</a>
         </div>
         <div class="servise">
            <img src="images/art.png" alt="img is not working">
            <h1>   تسويق الكتروني  </h1>
            <p> المحتوى ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على         </p>
                <a href="" class="item-show">معرفة المزيد</a>
                <a href="" class="item-buy">اطلب الان</a>
         </div>
         <div class="servise">
            <img src="images/marketing (1).png" alt="img is not working">
            <h1>ترويج</h1>
            <p> المحتوى) ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذ لهذه الأحرف. خمسة قرون من الزمن لم تقضي على </p>
                <a href="" class="item-show">معرفة المزيد</a>
                <a href="" class="item-buy">اطلب الان</a>
         </div>
      </div>
     </div>

 <!-- end servises html code  -->


 <!-- start lins style html code  -->

     <div class="lins-style">
      <div class="container">
         <!-- start cared  -->
         <div class="image-left image-card">
            <a href=""><img src="images/item-1.jpg" alt=""></a>
            <div class="cont">
               <h1>طباعة على الكفر   </h1>
               <p>اطبع اجمل الذكريت وابقيها في غلاف موبايلك او اطبع رمز شركك الخاص </p>
               <div class="box"></div>
            </div>
         </div>
         <!-- end card  -->

         <div class="image-left image-left-2 image-card">
            <a href=""><img src="images/item-8.jpg" alt=""></a>
            <div class="cont">
               <h1>منيو الكتروني   </h1>
               <p> المطعم الفخم يحتاج شي مخلتلف متوفر منيو الكتروني عبر الباركود</p>
               <div class="box"></div>
            </div>
         </div>

         <div class="image-right image-card">
            <div class="box"></div>
           <a href="allItems.php"><img src="images/item-13.jpg" alt=""></a> 
            <div class="cont">
               <h1>رسم رقمي </h1>
               <p> احصل على رسمتك الرقمية بجودة عاليه واحترافيه مع طباعة بجدوة عاليه جدا </p>
            </div>
         </div>
      </div>
     </div>
 <!-- start laern more  -->

 <div class="laern-more">
   <div class="container">
      <div class="contact">
         <div class="lins"></div>
        <div class="text">
         <h3>اصنع الذكرى الاجمل </h3>
         <p>لمحتوى ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من</p>
        </div>
        <div class="buttons">
         <a href="" class="show">عرض المزيد</a>
         <a href="" class="buy">اطلب الان</a>
        </div>
      </div>
      <div class="images-show">
         <a href="allItems.php"><img src="images/item-6.jpg" alt=""></a>
         <a href="allItems.php"><img src="images/item-5.jpg" alt=""></a>
         <a href="allItems.php"><img src="images/item-1.jpg" alt=""></a>
                  <a href="allItems.php" class="show">$149.99</a>
         <a href="allItems.php"><img src="images/item-7.jpg" alt=""></a>
         <a href="allItems.php" class="show">$149.99</a>
         <a href="allItems.php" class="buy">$94.99</a>
         <a href="allItems.php" class="buy">$94.99</a>
      </div>
   </div>
  </div>

     
     <div class="lins-style lins-style-2">
      <div class="container">
         <div class="image-left image-card">
           <a href="allItems.php"><img src="images/item-1.jpg" alt=""></a> 
            <div class="cont">
               <h1>رسم رقمي </h1>
               <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.loren5 Lorem, ipsum dolor.</p>
               <div class="box"></div>
            </div>
         </div>

         <div class="image-right image-card">
            <div class="box"></div>
            <a href="allItems.php"><img src="images/item-13.jpg" alt=""></a>
            <div class="cont">
               <h1>رسم رقمي </h1>
               <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.loren5 Lorem, ipsum dolor.</p>
            </div>
         </div>
      </div>
     </div>


     <div class="laern-more laern-more-2">
      <div class="container">
         <div class="contact">
            <div class="lins"></div>
           <div class="text">
            <h3>اصنع الذكرى الاجمل </h3>
            <p>لمحتوى ويُستخدم في صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع شكلي لهذه الأحرف. خمسة قرون من</p>
           </div>
           <div class="buttons">
            <a href="allItems.php" class="show">عرض المزيد</a>
            <a href="allItems.php" class="buy">اطلب الان</a>
           </div>
         </div>
         <div class="images-show">
            <a href="allItems.php"><img src="images/item-6.jpg" alt=""></a>
            <a href="allItems.php"><img src="images/item-5.jpg" alt=""></a>
            <a href="allItems.php"><img src="images/item-1.jpg" alt=""></a>
                     <a href="" class="show">$149.99</a>
            <a href=""><img src="images/item-7.jpg" alt=""></a>
            <a href="" class="show">$149.99</a>
            <a href="" class="buy">$94.99</a>
            <a href="" class="buy">$94.99</a>
         </div>
      </div>
     </div>
      <!-- end laern more  -->
 <!-- end lins style html code  -->


 <!-- start call us html code  -->
 
 <div class="call" id="call">
   <div class="paymaunt">
      <h2 class="title"> طرق الدفع  </h2>
      <div class="pay"> <h2>زين كاش </h2> <img src="images/zinecash.png" alt=""></div>
      <div class="pay"> <h2>ماستر كارد</h2> <img src="images/master.png" alt=""></div>
   </div>
   <div class="addrese">
      <h2>موقع وعنوان المطبعة </h2>
      <ul>
         <li>العنوان : بغداد السيدية شارع التجاري </li>
         <li>رقم الهاتف : 07811930693 </li>
         <li>رقم الهاتف  واتساب : 07711930693 </li>
         <li>info@ishtar.com : البريد اللكتروني  </li>
      

      </ul>
   </div>
 </div>

 <!-- end call us html code  -->

<!-- start footer  -->
<footer class="footer">
   <div class="coshil"><a href=""><i class="fa-brands fa-facebook"></i></a><a href=""><i class="fa-brands fa-instagram"></i></a><a href=""><i class="fa-brands fa-telegram"></i></a><a href=""><i class="fa-brands fa-x-twitter"></i></a></div>
   <div class="copyright"><i class="fa-regular fa-copyright"></i> 2021 - 2024 ishtarc (PTY) LTD all rights reserved.</div>
   <h3 class="ishtar-logo"> عشتار </h3>
</footer>
<!-- end footer  -->



   <script src="js/main.js"></script>
</body>
</html>