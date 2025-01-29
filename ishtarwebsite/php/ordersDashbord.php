<?php
include_once "php/config.php";

if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
}else{
    $user_id = $_SESSION['clint_id'];
   
}


$rows = mysqli_query($con, "SELECT * FROM orders WHERE order_id = $user_id");

foreach($rows as $row){
    $allimages = $row['order_images'];
    $images_exp = explode(",", $allimages);

    // التحقق من حالة الطلب
    if($row['statues'] === 'status-loding'){
        $statuse = "مطبوع";
    } else {
        $statuse = "مثبت";
    }

    // التحقق من وجود الصورة الثانية
    $imageSrc = "php/Orders_images/".$images_exp[0]; // افتراضيًا نعرض الصورة الأولى
    if(count($images_exp) > 1) {
        // إذا كانت هناك صورة ثانية، نعرضها
        $imageSrc = "php/Orders_images/".$images_exp[1];
    }

    // عرض رقم الهاتف من قاعدة البيانات إذا كان موجودًا
    $phone = isset($row['phone_number']) ? $row['phone_number'] : "0781930693"; // استبدل هذا بـ القيمة الصحيحة في قاعدة البيانات إذا كانت موجودة
    
    echo '     
        <div class="itme" id="Item">    
            <a href="editOrder.php?id=' . $row['id'] .'" class="order-das">
                <div class="imag"><img src="'.$imageSrc.'" alt=""></div>
                <div class="contact orders_over">
                    <h1>' . $row['claent_name'] . '</h1>
                    <span>' . $row['addres'] . '</span>
                    <span>' . $phone . '</span> 
                </div>
                <span class="order-stutes '.$row['statues'].'"> '.$statuse.'  </span>
            </a>
            <p id="ItemName">'.$row['descrption'].' </p>
        </div>
    ';
}
?>
