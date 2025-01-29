<?php

include_once "config.php";

$itemTitle = mysqli_real_escape_string($con, $_POST['itemTitle']);
$itemPrice = mysqli_real_escape_string($con, $_POST['itemPrice']);
$userPrice = mysqli_real_escape_string($con, $_POST['userPrice']);
$itemDescrption = mysqli_real_escape_string($con, $_POST['itemDescrption']);

if(!empty($itemTitle) && !empty($itemPrice) && !empty($itemDescrption)){

    if(isset($_FILES['image1']) && is_uploaded_file($_FILES['image1']['tmp_name']) && isset($_FILES['image2']) && is_uploaded_file($_FILES['image2']['tmp_name'])&& isset($_FILES['image3']) && is_uploaded_file($_FILES['image3']['tmp_name'])&& isset($_FILES['image4']) && is_uploaded_file($_FILES['image4']['tmp_name'])){
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

              // chack file is inclode the jpg , png jpeg
               if(in_array($image1_ext, $extainseein) && in_array($image2_ext, $extainseein) && in_array($image3_ext, $extainseein) && in_array($image4_ext, $extainseein)){

                $time = time();
                $new_image1_name = $time.$image1_name;
                $new_image2_name = $time.$image2_name;
                $new_image3_name = $time.$image3_name;
                $new_image4_name = $time.$image4_name;
                

                if(move_uploaded_file($image1_tmp, "Orders_images/".$new_image1_name) && move_uploaded_file($image2_tmp, "Orders_images/".$new_image2_name) && move_uploaded_file($image3_tmp, "Orders_images/".$new_image3_name) && move_uploaded_file($image4_tmp, "Orders_images/".$new_image4_name)){

                    $allImages = $new_image1_name .",". $new_image2_name .",". $new_image3_name .",". $new_image4_name;  

                 $sql = mysqli_query($con, "INSERT INTO items(item_title, item_price, item_descrption, item_images, UserPrice)
                  VALUES('{$itemTitle}', '{$itemPrice}', '{$itemDescrption}', '{$allImages}', '{$userPrice}')");

                  if($sql){
                    echo "sucses";
                  }else{
                    echo "تحقق من اتصالك  بل الانترنت ";
                  }

                }else{
                    echo "لم يتم تحميل الصور ! تاكد من اتصال الانترنت";
                }

               }else{
                  echo "صيغة الصورة غير مدعومة";
               }


    }else{
        echo "file one is not seleted ";
    }

}else{
    echo "دخل البينات يا متخلف ):";
}