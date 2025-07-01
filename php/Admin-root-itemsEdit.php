<?php


session_start();
if(isset($_SESSION['root_id_4448'])){

        include_once "config.php";
    
        $user_id = $_SESSION['root_id_4448'];
        
        // start php code 
         

$itemTitle = mysqli_real_escape_string($con, $_POST['itemTitle']);
$itemPrice = mysqli_real_escape_string($con, $_POST['itemPrice']);
$itemDescrption = mysqli_real_escape_string($con, $_POST['itemDescrption']);
$itemID = mysqli_real_escape_string($con, $_POST['itemID']);

if (!empty($itemTitle) && !empty($itemTitle)&& !empty($itemDescrption)) {
    if(isset($_FILES['image1']) || is_uploaded_file($_FILES['image1']['tmp_name']) && isset($_FILES['image2']) && is_uploaded_file($_FILES['image2']['tmp_name'])&& isset($_FILES['image3']) && is_uploaded_file($_FILES['image3']['tmp_name'])&& isset($_FILES['image4']) && is_uploaded_file($_FILES['image4']['tmp_name'])){

    

        if(isset($_FILES['image1']) || isset($_FILES['image2'])){
             if(!$_FILES['image1']['name'] == "" || !$_FILES['image2']['name'] == ""){
                             // Process image 1
                             $image1_name = $_FILES['image1']['name'];
                             $image1_tmp = $_FILES['image1']['tmp_name'];
                             $image1_explot = explode('.', $image1_name);
                             $image1_ext = end($image1_explot);
                              // Process image 2
                              $image2_name = $_FILES['image2']['name'];
                              $image2_tmp = $_FILES['image2']['tmp_name'];
                              $image2_explot = explode('.', $image2_name);
                              $image2_ext = end($image2_explot);
                               // Process image 3
                             $image3_name = $_FILES['image3']['name'];
                             $image3_tmp = $_FILES['image3']['tmp_name'];
                             $image3_explot = explode('.', $image3_name);
                             $image3_ext = end($image3_explot);
                              // Process image 4
                              $image4_name = $_FILES['image4']['name'];
                              $image4_tmp = $_FILES['image4']['tmp_name'];
                              $image4_explot = explode('.', $image4_name);
                              $image4_ext = end($image4_explot);
                           //    the extaionsetion of image 
                             $extainseein = ["jpg", "png", "jpeg"];
                 
                             $time = time();
     
                     $new_image1_name = $time.$image1_name;
                     $new_image2_name = $time.$image2_name;
                     $new_image3_name = $time.$image3_name;
                     $new_image4_name = $time.$image4_name;
     
                     if(move_uploaded_file($image1_tmp, "Orders_images/".$new_image1_name) && move_uploaded_file($image2_tmp, "Orders_images/".$new_image2_name) && move_uploaded_file($image3_tmp, "Orders_images/".$new_image3_name) && move_uploaded_file($image4_tmp, "Orders_images/".$new_image4_name)){
                         // $images = join($new_image_name, $new_image_name2);
                                       $allImages = $new_image1_name .",". $new_image2_name .",". $new_image3_name .",". $new_image4_name;  
     
     
                         
     
                         $user_id = $_SESSION['user_id'];
                         
                          
                         $sql = mysqli_query($con, "UPDATE items SET item_title ='{$itemTitle}',  item_price = '{$itemPrice}', item_descrption = '{$itemDescrption}', item_images = '{$allImages}' WHERE item_id = $itemID");
     
                         if($sql){
                             echo "sucses";
                         }else{
                             echo "حدث خطا يرجى اعادة المعاولة في وقت لاحق ";
                         }
                      
     
                         
                         
                        
                     }else{
                         echo "ارفع 4 صور يصير اقل ";
                     }
     
     
             }else{
                 echo "(:   ارفع الصور عيني ";
             }
         }
     
     }else{
         echo "يرجى كتابة البيانات قبل الارسال ";
     }
}else{
    echo "دخل البيانات يا متخلف (:";
}

        // end php code 

 
    
}else{
    header("location: ../login.php");
}
// if(isset($_GET['id'])){



//     // mysqli_query($con, "UPDATE orders SET ContactName='Juan' WHERE id = $id");

// }




 


