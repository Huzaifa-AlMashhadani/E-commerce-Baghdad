<?php


session_start();
if(isset($_SESSION['user_id'])){

        include_once "config.php";
    
        $user_id = $_SESSION['user_id'];
        
        // start php code 
         
$orderNum = mysqli_real_escape_string($con, $_POST['ordernumber']);
$name = mysqli_real_escape_string($con, $_POST['name']);
$id = mysqli_real_escape_string($con, $_POST['Order_ID']);
$number = mysqli_real_escape_string($con, $_POST['number']);
$adrese = mysqli_real_escape_string($con, $_POST['adrese']);
$ClintPrice = mysqli_real_escape_string($con, $_POST['ClintPrice']);
$descrption = mysqli_real_escape_string($con, $_POST['descrption']);


if(!empty($orderNum) && !empty($name) && !empty($number) && !empty($adrese) && !empty($ClintPrice) ){

    

   if(isset($_FILES['image1']) || isset($_FILES['image2'])){
        if(!$_FILES['image1']['name'] == "" || !$_FILES['image2']['name'] == ""){
            // chackout image 1 
            
            $image1_name = $_FILES['image1']['name'];
            $image1_type = $_FILES['image1']['type'];
            $image1_tmp = $_FILES['image1']['tmp_name'];
            $image1_explot = explode('.', $image1_name);
            $image1_ext = end($image1_explot);

            // image 2 chakout 
            $image2_name = $_FILES['image2']['name'];
            $image2_type = $_FILES['image2']['type'];
            $image2_tmp = $_FILES['image2']['tmp_name'];
            $image2_explot = explode('.', $image2_name);
            $image2_ext = end($image2_explot);

            $extainseein = ["jpg", "png", "jpeg"];
            
            if(in_array($image1_ext, $extainseein) === true || in_array($image2_ext, $extainseein) === true){
                $time = time();

                $new_image_name = $time.$image1_name;
                $new_image_name2 = $time.$image2_name;

                

                if(move_uploaded_file($image1_tmp, "Orders_images/".$new_image_name) || move_uploaded_file($image2_tmp, "Orders_images/".$new_image_name2)){
                    // $images = join($new_image_name, $new_image_name2);
                  

                    $images_ar = [$new_image_name, $new_image_name2];
                    $images = join(",", $images_ar);
                    

                    $user_id = $_SESSION['user_id'];
                    
                     
                    $sql = mysqli_query($con, "UPDATE orders SET order_id ='$user_id',  order_images = '{$images}', order_number = '{$orderNum}', claent_name = '{$name}', cclaent_number ='{$number}' , addres = '{$adrese}', order_price = '{$ClintPrice}', descrption = '{$descrption}', statues = 'مثبتك' WHERE id= $id AND order_id = $user_id");

                    if($sql){
                        echo "sucses";
                    }else{
                        echo "حدث خطا يرجى اعادة المعاولة في وقت لاحق ";
                    }
                 

                    
                    
                   
                }else{
                    echo "لم يتم اختيار الصورة الثانيه ";
                }


            }else{
                echo "صيفة هذا الصورة غير مدعومة ";
            }
        }else{
            echo "يجب ان يحتوي الطلب على صورة واحدة على الاقل ";
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




 


