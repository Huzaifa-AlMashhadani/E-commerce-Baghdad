<?php


session_start();
if(isset($_SESSION['user_id'])){

        include_once "config.php";
    
        $user_id = $_SESSION['user_id'];
        
        // start php code 
         
$name = mysqli_real_escape_string($con, $_POST['name']);
$number = mysqli_real_escape_string($con, $_POST['number']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$image = mysqli_real_escape_string($con, $_POST['image']);

// $image1 = mysqli_real_escape_string($con, $_POST['image1']);



if(!empty($name) && !empty($number) && !empty($email)){

    $user_id = $_SESSION['user_id'];

   if(isset($_FILES['image1'])){
    $sql1 = mysqli_query($con, "SELECT * FROM users WHERE user_id != $user_id AND Phnumber = $number");



    if(mysqli_num_rows($sql1) > 0 ){

        echo "رقم الهاتف او البريد اللكتروني مستهدم من شخص اخر ";
    }else{
         // chackout image 1 
            
         $image1_name = $_FILES['image1']['name'];
         $image1_type = $_FILES['image1']['type'];
         $image1_tmp = $_FILES['image1']['tmp_name'];
         $image1_explot = explode('.', $image1_name);
         $image1_ext = end($image1_explot);

        

         $extainseein = ["jpg", "png", "jpeg"];

         if(in_array($image1_ext, $extainseein) === true){
         // if(in_array($image1_ext, $extainseein) === true ){
             $time = time();
             $new_image_name = $time.$image1_name;
             move_uploaded_file($image1_tmp, "Orders_images/".$new_image_name);
   
             
             
              
             $sql = mysqli_query($con, "UPDATE users SET name = '{$name}', Phnumber = '{$number}', email = '{$email}', profile_img = '{$new_image_name}' WHERE user_id = $user_id");

             if($sql){
                 echo "تم تحديث المعلومات";
             }else{
                 echo "حدث خطا يرجى اعادة المعاولة في وقت لاحق ";
             }
         }else{
             echo   "يرجى تحميل اي صورة";
         }

    }

   
            
    }

}else{
    echo "يرجى كتابة البيانات قبل الارسال ";
}

        // end php code 

 
    
}else{
    header("location: ../login.php");
}
// if(isset($_GET['id'])){



//     // mysqli_query($con, "UPDATE orders SET ContactName='Juan' WHERE id = $id");

// }




 


