

<?php 
session_start();

if(!isset($_SESSION["user_id"])){
   if(!isset($_SESSION["clint_id"])){
      header("location: login.php");
   }

}

if($_GET['item_id']){
   
include_once "php/config.php";
$id = $_GET['item_id'];
$sql = mysqli_query($con, "SELECT * FROM items WHERE item_id = $id");


if($sql){

   $row = mysqli_fetch_assoc($sql);
   

  $imagesArry = $row['item_images'];

  if($imagesArry){
   $images = explode(",", $imagesArry);

  }else{
      header("location: allItems.php");

  }


}else{
   header("location: allItems.php");

}
}else{
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



      <nav class="navbar">
         <h2 class="logo">عشتار</h2>
         <ul class="menu-links">
            <li><a href="index.php">الرئيسيه</a></li>
            <li><a href="index.php#servises">الخدمات</a></li>
            <li><a href="allItems.php">كل العناصر </a></li>
            <li><a href="index.php#call">اتصل بنا</a></li>
         </ul>
      </nav>
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
        <div class="text-contct orderadd login-form" style="transform: translate(-50%, -23%); height:auto;">
         
      

       <form action="#" enctype="multipart/form-data" class="Orderfordata">
         
         <div class="chacher" style="display: none;">

         <h2 class="contact-title">  دفع زين كاش </h2>
         <img src="images/images.jfif" alt="" style="width: 100%;">
            <p style="line-height: 2;">
               افتج محفظة زين كاش الخاصة بك <br>
               اختر ارسال الاموال <br>
            ادخل الرقم الموضح في الصورة او    امسح رمز الباركود الرقمي <br>
           ارسل الاموال وخذ لقطة للشاشة <br>
           ارفق لقطة الشاشة هنا واضغط ارسال <br>


            </p>
            <h3 class="wornig_maseg">رسالة خطا</h3>

         <div class="imageiplod" style="
   display: flex;
    /* grid-template-columns: repeat(2, 50px); */
    justify-content: center;
    justify-items: center;">
           <label for="image3" class="imageuplod"> <span>ارفع الصورة هنا</span>      <img src="images/deflot.png" alt=""  name="image3" id="Image3">
           </label>
           <input type="file" accept="image/png, image/jpg, image/jpeg" name="image3" id="image3" />
          </div>
           <input type="text" name="ClintPrice" id="ClintPrice" value="<?php echo $price['item_price'] ?>" hidden/>
           <label for="chakDescrption" id="PriceWorin">  الوصف او الملاحضات </label>
           <textarea name="chakDescrption" id="descrption"></textarea>
           <div class="btns">
            <button type="submit" class="sned"> ارسال </button>
            <button type="button" id="disbolOrder" class="disbolOrder CHdisebol"> الغاء </button>

           </div>
         </div>
   
         <div class="datatext">    <div class="imageiplod">
           <label for="image1" class="imageuplod"> <span>صورة النموذج</span>            <img src="images/deflot.png" alt=""  name="image1" id="Image1">
           </label>
           <input type="file" accept="image/png, image/jpg, image/jpeg" name="image1" id="image1" />
           <label for="image2" class="imageuplod"> <span>صورة الطباعة </span>            <img src="images/deflot.png" alt="" name="image2"  id="Image2">
           </label>
           <input type="file" accept="image/png, image/jpg, image/jpeg" name="image2" id="image2" />
          </div>
          <label for="ordernumber" hidden>  رقم الطلب </label>
          <input type="number" name="ordernumber" hidden id="ordernumber" />
           <label for="name">   ادخل اسمك </label>
           <input type="text" name="name" id="name" />
           <label for="number"> رقم هاتف فعال </label>
           <input type="number" name="number" id="number" />
           <label for="email">العنوان الكامل </label>
           <input type="text" name="adrese"  />
           <label for="password" hidden> المبلغ الكامل  </label>
           <label for="password" id="PriceWorin" hidden>   </label>
           <input type="text" name="ClintPrice" id="ClintPrice" value="<?php echo  $row['UserPrice'] / 1000?>" hidden/>
           <label for="descrption" id="PriceWorin">  الوصف او الملاحضات </label>
           <textarea name="descrption" id="descrption"></textarea>
           <div class="btns">
            <button type="button" class="Sned"> التالي </button>
            <button type="button" id="disbolOrder" class="DisbolOrder"> الغاء </button>
           </div></div>
       </form>

        </div>
     </div>
   <div class="show-item">

    <div class="ContactShowImage">
          <h2 class="TitleItem"><?php echo $row['item_title'] ?></h2>
          <div class="images">
            <div class="activeImage active" id="activeImage">
              <img src="php/Orders_images/<?php echo $images[0] ?>" alt="">
          </div>
          <div class="activeImage active" id="activeImage">
            <img src="php/Orders_images/<?php echo $images[1] ?>"alt="">
        </div>
        <div class="activeImage active" id="activeImage">
          <img src="php/Orders_images/<?php echo $images[2] ?>" alt="">
      </div>
            <div class="activeImage" id="activeImage">
                <img src="php/Orders_images/<?php echo $images[3] ?>" alt=""  class="noactive">
            </div>



            
         </div>
          <p><?php echo $row['item_descrption'] ?></p>
             
     
             <div class="price">         <span class="com"><?php echo $row['UserPrice'] / 1000 + 16;  ?>,000  IQD</span>    <span><?php $price = $row['UserPrice'] / 1000; echo $price ?>,000 IQD</span>

             </div>
             <button  class="addtoCard">اطلب الان </button> 
             
             
    </div>
    <div class="imageslider">
        <img src="php/Orders_images/<?php echo $images[0] ?>" alt="" >
    </div>
   </div>
  <!-- end show item page  -->
      
   </div>
   
  </div>

  <!-- more product html code  -->
     <!-- start items page  -->
 <div class="itmes more-product" id="items">
  <div class="container">
     <div class="saerch">
     </div>
     <div class="items-box">

     <?php 

     $rows = mysqli_query($con, "SELECT * FROM items WHERE item_id != $id");
     

         foreach($rows as $row_1){


            $imagesArry_2 = $row_1['item_images'];
            $Images_2 = explode("," , $imagesArry_2);

            echo '<div class="itme" id="Item">
           <a href="?item_id=' .$row_1['item_id'].'">
              <img src="php/Orders_images/' .$Images_2[0].'" alt="">
           </a>
           <p id="ItemName">' .$row_1['item_descrption'].' </p>
        </div>';
           
         }

     ?>

        
     </div>
  </div>
</div>
<!-- end items page  -->
  <!-- more product html code  -->


<script src="js/showImage.js"></script>   
</body>
</html>