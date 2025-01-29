<?php



$id = $_GET['item_id'];
if(isset($_GET['item_id'])){
  include_once 'php/config.php';

  

 $sql =  mysqli_query($con, "SELECT * FROM items WHERE item_id = $id");
 $row = mysqli_fetch_assoc($sql);


 

 
    

}else{
    header("location: ordersDashbord.php");
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

  <div class="home Userdashbord  orderadd" id="BackgColor">
   <div class="container">
      <nav class="navbar">
         <img src="images/logo.jpg" alt="">
         <div class="saerch" style="display: none;"><h4>    <i class="fa-solid fa-magnifying-glass"></i></h4>
            <input type="search" placeholder="... بحث " id="SaerchInput"/>
        </div>
        <ul class="menu-links">
            <li ><a href="Admin-root-Dashbord.php"><i class="fa-solid fa-house"></i> </a></li>
            <li ><a href="Admin-root-orders.php"><i class="fa-solid fa-boxes-stacked"></i>  </a></li>
            <li><a href="Admin-root-items.php"><i class="fa-solid fa-box"></i></a></li>
            <li><a href="Admin-root-addOrder.php"><i class="fa-solid fa-circle-plus fa-2xl"></i></a></li>
            <li ><a href="Admin-root-acount.php"><i class="fa-solid fa-user"></i> </a></li>
            <li ><a href="Admin-root-orders.php"><i class="fa-solid fa-users"></i></a></li>
            <li><a href="#darckMode" id="darckMode"><i class="fa-solid fa-moon"></i> </a></li>
            <li><a href="#darckMode" id="darckMode-w"><i class="fa-regular fa-moon"></i> </a></li>
          </ul>
         <h2 class="logo">عشتار</h2>

      </nav>
      <div class="contant addorder">
        <div class="text-contct orderadd login-form" style="transform: translate(-50%, -46%);">
         
         <h2 class="contact-title">  تعديل نموذج </h2>
         <h3 class="wornig_maseg">رسالة خطا</h3>

       <form action="" enctype="multipart/form-data">
         <input type="text" name="itemID" value="<?php echo $id ?>" style="display: none;">
         <div class="imageiplod Admin-root-editItem">
              <label for="image1" class="imageuplod">
                <img src="images/deflot.png" alt="" id="Image1" />
              </label>
              <input
                type="file"
                accept="image/png, image/jpg, image/jpeg"
                name="image1"
                id="image1"
              />
              <label for="image2" class="imageuplod">
                <img src="images/deflot.png" alt="" id="Image2" />
              </label>
              <input
                type="file"
                accept="image/png, image/jpg, image/jpeg"
                name="image2"
                id="image2"
              />
            </div>
            <div class="imageiplod Admin-root-editItem">
              <label for="image3" class="imageuplod">
                <img src="images/deflot.png" alt="" id="Image3" />
              </label>
              <input
                type="file"
                accept="image/png, image/jpg, image/jpeg"
                name="image3"
                id="image3"
              />
              <label for="image4" class="imageuplod">
                <img src="images/deflot.png" alt="" id="Image4" />
              </label>
              <input
                type="file"
                accept="image/png, image/jpg, image/jpeg"
                name="image4"
                id="image4"
              />
            </div>
          <label for="ordernumber"> العنوان </label>
          <input type="text" name="itemTitle" id="ordernumber" value="<?php echo $row['item_title'] ?>" />
           <label for="name">  السعر </label>
           <input type="number" name="itemPrice" id="name" value="<?php echo $row['item_price'] ?>" />
           <label for="descrption" id="PriceWorin">  الوصف او الملاحضات </label>
           <textarea name="itemDescrption" id="descrption"><?php echo $row['item_descrption'] ?> </textarea>
           <div class="btns">
            <button type="submit"> حفط </button>
            <button type="submit" name="btn_delete"  style="background: red; border: none;"> <a href="php/deleteorder.php?id=<?php echo $row['item_id'] ?>"  >حذف</a> </button>
           </div>
       </form>

        </div>
     </div>
      
   </div>
   
  </div>


<script src="js/Admin-root-editItem.js"></script>
<script src="js/Admin-root-edit.js"></script>
   
</body>
</html> 