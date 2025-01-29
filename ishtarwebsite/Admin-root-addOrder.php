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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- fonts link  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght,HEXP@160..700,0..100&family=Tajawal:wght@200;300;400;500;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/main.css" />
    <title>Ishtar</title>
  </head>
  <body>
   <div class="LodeR"><span class="loader"></span></div>

    <div class="root-pages home Userdashbord" id="BackgColor">
      <div class="container">
        <nav class="navbar">
          <img src="images/logo.jpg" alt="" />
          <div class="saerch">
            <h4><i class="fa-solid fa-magnifying-glass"></i></h4>
            <input type="search" placeholder="... بحث " id="SaerchInput" />
          </div>
          <ul class="menu-links">
            <li ><a href="Admin-root-Dashbord.php"><i class="fa-solid fa-house"></i> </a></li>
            <li ><a href="Admin-root-orders.php"><i class="fa-solid fa-boxes-stacked"></i>  </a></li>
            <li><a href="Admin-root-items.php"><i class="fa-solid fa-box"></i></a></li>
            <li class="active"><a href="Admin-root-addOrder.php"><i class="fa-solid fa-circle-plus fa-2xl"></i></a></li>
            <li><a href="Admin-root-acount.php"><i class="fa-solid fa-user"></i> </a></li>
            <li><a href="Admin-root-orders.php"><i class="fa-solid fa-users"></i></a></li>
            <li><a href="#darckMode" id="darckMode"><i class="fa-solid fa-moon"></i> </a></li>
            <li><a href="#darckMode" id="darckMode-w"><i class="fa-regular fa-moon"></i> </a></li>
          </ul>
          <h2 class="logo">
            <h2 class="add-order">
              <span><i class="fa-solid fa-square-plus"></i></span>
            </h2>
          </h2>
        </nav>

        <!-- start form add order  -->
        <div class="contant addorder">
          <div class="text-contct orderadd login-form" id="Add_Form_Order">
          <h3 class="wornig_maseg">رسالة خطا</h3>

          <form action="">
          <div class="imageiplod">
              <label for="image1" class="imageuplod">
                <span>صورة الطباعة</span>
                <img src="images/deflot.png" alt="" id="Image1" />
              </label>
              <input
                type="file"
                accept="image/png, image/jpg, image/jpeg"
                name="image1"
                id="image1"
              />
              <label for="image2" class="imageuplod">
                <span>صورة النموذج</span>
                <img src="images/deflot.png" alt="" id="Image2" />
              </label>
              <input
                type="file"
                accept="image/png, image/jpg, image/jpeg"
                name="image2"
                id="image2"
              />
            </div>
            <div class="imageiplod">
           
            </div>
            <label for="pagename"> اسم البيج او العميل  </label>
            <input type="text" name="pagename" />
            <label for="ordernumber"> رقم الطلب   </label>
            <input type="number" name="ordernumber" />
            <label for="Clantnumber"> رقم هاتف المستلم </label>
            <input type="number" name="Clantnumber" />
            <label for="adrese">   العنوان الكامل  </label>
            <input type="text" name="adrese" />
            <label for="password"> السعر الكامل  </label>
            <label for="ClintPrice" id="PriceWorin"> </label>
            <input type="number" name="ClintPrice" id="ClintPrice"/>
            <label for="descrption" id="PriceWorin"> الوصف او الملاحضات </label>
            <textarea name="descrption" id="descrption"></textarea>
            <div class="btns">
              <button type="submit">ارسال</button>
              <button type="submit" id="disbolOrder" class="DisOrderForm">
                الغاء
              </button>
          </form>
            </div>
          </div>
        </div>
        <!-- end form add order  -->
      
      </div>
    </div>

    <script src="js/rootOrders.js"></script>
    <script src="js/Admin-root-addorder.js"></script>
  </body>
</html>
