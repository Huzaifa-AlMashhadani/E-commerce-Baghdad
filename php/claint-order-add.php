<?php
include_once "config.php";




$name = mysqli_real_escape_string($con, $_POST['name']);
$number = mysqli_real_escape_string($con, $_POST['number']);
$adrese = mysqli_real_escape_string($con, $_POST['adrese']);
$ClintPrice = mysqli_real_escape_string($con, $_POST['ClintPrice']);
$descrption = mysqli_real_escape_string($con, $_POST['descrption']);
$chakDescrption = mysqli_real_escape_string($con, $_POST['chakDescrption']);

if( !empty($name) && !empty($number) && !empty($adrese)){

   $images = ''; // Default value for images
   // Process image3 if it exists

   $image3_name = $_FILES['image3']['name'];
   if(!empty($image3_name)) {
       // Process image 3
       $image3_type = $_FILES['image3']['type'];
       $image3_tmp = $_FILES['image3']['tmp_name'];
       $image3_explot = explode('.', $image3_name);
       $image3_ext = end($image3_explot);

       $extainseein = ["jpg", "png", "jpeg"];

       if(in_array($image3_ext, $extainseein)) {
           $time = time();
           $new_image_name3 = $time.$image3_name;

           if(move_uploaded_file($image3_tmp, "Orders_images/".$new_image_name3)) {
               $images .= $new_image_name3; 
               
               // Append image2 if it exists
               $image1_name = $_FILES['image1']['name'];
               $image2_name = $_FILES['image2']['name'];
               if(!empty($image1_name)) {
                   // Process image 1
                   $image1_type = $_FILES['image1']['type'];
                   $image1_tmp = $_FILES['image1']['tmp_name'];
                   $image1_explot = explode('.', $image1_name);
                   $image1_ext = end($image1_explot);
       
                   $extainseein = ["jpg", "png", "jpeg"];
       
                   if(in_array($image1_ext, $extainseein)) {
                       $time = time();
                       $new_image_name = $time.$image1_name;
       
                       if(move_uploaded_file($image1_tmp, "Orders_images/".$new_image_name)) {
                           $images .= "," . $new_image_name;
                       } else {
                           echo "حدث خطأ في رفع الصورة الأولى.";
                           exit;
                       }
                   } else {
                       echo "صيغة الصورة الأولى غير مدعومة.";
                       exit;
                   }
               }


           
           // Process image2 if it exists
       
               $image2_name = $_FILES['image2']['name'];
               if(!empty($image2_name)) {
                   // Process image 2
                   $image2_type = $_FILES['image2']['type'];
                   $image2_tmp = $_FILES['image2']['tmp_name'];
                   $image2_explot = explode('.', $image2_name);
                   $image2_ext = end($image2_explot);
       
                   $extainseein = ["jpg", "png", "jpeg"];
       
                   if(in_array($image2_ext, $extainseein)) {
                       $time = time();
                       $new_image_name2 = $time.$image2_name;
       
                       if(move_uploaded_file($image2_tmp, "Orders_images/".$new_image_name2)) {
                           $images .= "," . $new_image_name2; // Append image2 if it exists
                       } else {
                           echo "حدث خطأ في رفع الصورة الثانية.";
                           exit;
                       }
                   } else {
                       echo "صيغة الصورة الثانية غير مدعومة.";
                       exit;
                   }
               }
           
           
       
       
       if(!empty($image1_name) || !empty($image2_name) ){
       
        $des = $chakDescrption . $descrption;
        session_start();
        if(isset($_SESSION['clint_id'])){
            $user_id = $_SESSION['clint_id'];

        }
        if(isset($_SESSION['user_id'])){
            $user_id = $_SESSION['user_id'];

        }
           $sql = mysqli_query($con, "INSERT INTO orders(order_id, order_images,  claent_name, cclaent_number, addres, order_price, descrption, statues, page_name)
           VALUES('$user_id', '{$images}',  '{$name}', '{$number}', '{$adrese}', '{$ClintPrice}', '{$des}', '100', '{$name}' )");
           
       
           if($sql){
               echo "sucses";
           }else{
               echo "حدث خطا يرجى اعادة المعاولة في وقت لاحق ";
           }
       }else{
           echo "لم يتم اختيار صور الطباعة  !";
       }




           } else {
               echo "حدث خطأ في رفع الصورة الثانية.";
               exit;
           }
       } else {
           echo "صيغة الصورة الثانية غير مدعومة.";
           exit;
       }

   }else{
    echo "يرجى تحميل صورة التحقق من الدفع ";
   }



}else{
    echo "لم يتم كتابة العنوان ورقم الهاتف !";
}
?>
