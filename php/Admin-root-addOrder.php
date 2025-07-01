<?php
include_once "config.php";

session_start();

$orderNum = mysqli_real_escape_string($con, $_POST['ordernumber']);
$pagename = mysqli_real_escape_string($con, $_POST['pagename']);
$number = mysqli_real_escape_string($con, $_POST['Clantnumber']);
$adrese = mysqli_real_escape_string($con, $_POST['adrese']);
$ClintPrice = mysqli_real_escape_string($con, $_POST['ClintPrice']);
$descrption = mysqli_real_escape_string($con, $_POST['descrption']);

if(!empty($orderNum) && !empty($number) && !empty($adrese) && !empty($ClintPrice && !empty($ClintPrice))){

   $images = ''; // Default value for images

   if(isset($_FILES['image1'])) {
        $image1_name = $_FILES['image1']['name'];
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
                    $images = $new_image_name;
                } else {
                    echo "حدث خطأ في رفع الصورة الأولى.";
                    exit;
                }
            } else {
                echo "صيغة الصورة الأولى غير مدعومة.";
                exit;
            }
        }
    }

    // Process image2 if it exists
    if(isset($_FILES['image2'])) {
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
    }

 if(!isset($_FILES['image1']) || !isset($_FILES['image2'])){
   echo "لم يتم اختيار الصور !";
 }else{
     $user_id = $_SESSION['user_id'];
    $sql = mysqli_query($con, "INSERT INTO orders(order_id, order_images, order_number, claent_name, cclaent_number, addres, order_price, descrption, statues, page_name)
    VALUES('$user_id', '{$images}', '{$orderNum}', '{$pagename}', '{$number}', '{$adrese}', '{$ClintPrice}', '{$descrption}', '200', '{$pagename}' )");
 if($sql){
    echo "sucses";
}else{
    echo "حدث خطا يرجى اعادة المعاولة في وقت لاحق ";
}
 }
   

}else{
    echo "يرجى كتابة البيانات قبل الارسال ";
}
?>
