<?php
session_start();

if (!isset($_SESSION['user_id'])) {
   header("location: login.php");
}


if ($_GET['Chack_id']) {

   include_once "php/config.php";
   $id = $_GET['Chack_id'];
   $sql = mysqli_query($con, "SELECT * FROM orders WHERE id = $id");


   if ($sql) {

      $row = mysqli_fetch_assoc($sql);


      $imagesArry = $row['order_images'];
      $price = $row['order_price'];

      if ($imagesArry) {
         $images = explode(",", $imagesArry);
      } else {
         header("location: allItems.php");
      }
   } else {
      header("location: allItems.php");
   }
} else {
   header("location: allItems.php");
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

   <div class=" ShowTtem home" style="height: auto;">
      <div class="container" style="position: static;">



       
         <!-- start show item page  -->
         <div class="contant addorder Addorder" style="
   position: fixed;
    z-index: 1;
    background: rgba(0, 0, 0, 0.84);
    top: -191px;
    width: 100%;
    left: 0px;
    display: none;
    min-height: 120vh;
    overflow-x: auto;">
            <div class="text-contct orderadd login-form" style="transform: translate(-50%, -39%); height:auto;">

               <h2 class="contact-title"> انشاء طلب </h2>

               <form action="#" enctype="multipart/form-data" class="Orderfordata" hidden>

                  <div class="chacher" style="display: none;">

                     <h2 class="contact-title"> دفع زين كاش </h2>
                     <img src="images/item-1.jpg" alt="" style="width: 100%;">
                     <p style="line-height: 2;">
                        افتج محفظة زين كاش الخاصة بك <br>
                        اختر ارسال الاموال <br>
                        ادخل الرقم الموضح في الصورة او امسح رمز الباركود الرقمي <br>
                        ارسل الاموال وخذ لقطة للشاشة <br>
                        ارفق لقطة الشاشة هنا واضغط ارسال <br>


                     </p>
                     <h3 class="wornig_maseg">رسالة خطا</h3>

                     <div class="imageiplod" style="
   display: flex;
    /* grid-template-columns: repeat(2, 50px); */
    justify-content: center;
    justify-items: center;">
                        <label for="image3" class="imageuplod"> <span>ارفع الصورة هنا</span> <img src="images/deflot.png" alt="" name="image3" id="Image3">
                        </label>
                        <input type="file" accept="image/png, image/jpg, image/jpeg" name="image3" id="image3" />
                     </div>
                     <input type="text" name="ClintPrice" id="ClintPrice" value="<?php echo "test" ?>" hidden />
                     <label for="chakDescrption" id="PriceWorin"> الوصف او الملاحضات </label>
                     <textarea name="chakDescrption" id="descrption"></textarea>
                     <div class="btns">
                        <button type="submit" class="sned"> ارسال </button>
                        <button type="button" id="disbolOrder" class="disbolOrder CHdisebol"> الغاء </button>

                     </div>
                  </div>

                  <div class="datatext">
                     <div class="imageiplod">
                        <label for="image1" class="imageuplod"> <span>صورة النموذج</span> <img src="images/deflot.png" alt="" name="image1" id="Image1">
                        </label>
                        <input type="file" accept="image/png, image/jpg, image/jpeg" name="image1" id="image1" />
                        <label for="image2" class="imageuplod"> <span>صورة الطباعة </span> <img src="images/deflot.png" alt="" name="image2" id="Image2">
                        </label>
                        <input type="file" accept="image/png, image/jpg, image/jpeg" name="image2" id="image2" />
                     </div>
                     <label for="ordernumber" hidden> رقم الطلب </label>
                     <input type="number" name="ordernumber" hidden id="ordernumber" />
                     <label for="name"> ادخل اسمك </label>
                     <input type="text" name="name" id="name" />
                     <label for="number"> رقم هاتف فعال </label>
                     <input type="number" name="number" id="number" />
                     <label for="email">العنوان الكامل </label>
                     <input type="text" name="adrese" />
                     <label for="password" hidden> المبلغ الكامل </label>
                     <label for="password" id="PriceWorin" hidden> </label>
                     <input type="text" name="ClintPrice" id="ClintPrice" value="" hidden />
                     <label for="descrption" id="PriceWorin"> الوصف او الملاحضات </label>
                     <textarea name="descrption" id="descrption"></textarea>
                     <div class="btns">
                        <button type="button" class="Sned"> التالي </button>
                        <button type="button" id="disbolOrder" class="DisbolOrder"> الغاء </button>
                     </div>
                  </div>
               </form>

            </div>
         </div>
         <div class="show-item" style="">

            <div class="ContactShowImage">
               <h2 class="TitleItem"></h2>
               <div class="price"> <span style="font-size: 34px;"><?php echo $price ?>,000 IQD</span> 

               <p><?php echo $row['descrption'] ?></p>



               </div>
               <button class="addtoCard" style="padding: 0;">
                  <a href="php/chakOrder.php?rejet_id=<?php echo $row['id'] ?>" style="padding: 10px;
    background: red;
    border-radius: 4px;
        color: #fff;
    text-decoration: none;
"> رفض</a></button>
                     <button class="addtoCard"> <a href="php/chakOrder.php?acept_id=<?php echo $row['id'] ?>" style="padding: 10px;
    background: var(--main-color);
    border-radius: 4px;
       color: #fff;
    text-decoration: none;
">موافقة</a> </button>



            </div>
            <div class="imageslider" style="    max-width: 100%;
    margin: auto;">
               <img src="php/Orders_images/<?php echo $images[0] ?>" alt="">
            </div>
         </div>
         <!-- end show item page  -->

      </div>

   </div>

   <!-- more product html code  -->

   <!-- more product html code  -->


   <script src="js/showImage.js"></script>
</body>

</html>