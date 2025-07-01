<?php
session_start();
include_once "config.php";

$name = mysqli_real_escape_string($con, $_POST['name']);
$Phnumber = mysqli_real_escape_string($con, $_POST['Phnumber']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, sha1($_POST['password']));

if (!empty($name) && !empty($Phnumber) && !empty($email) && !empty($password)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql = mysqli_query($con, "SELECT * FROM users WHERE Phnumber = '{$Phnumber}' OR email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            echo "  رقم الهاتف او البريد اللكتروني موجود بل فعل  ";
        }else{
           if(preg_match('/^[0-9]{11}+$/', $Phnumber)){
            
            $sql2 =  mysqli_query($con, "INSERT INTO users (name, Phnumber , email, password)
            VALUES('{$name}','{$Phnumber}','{$email}','{$password}')");
            if($sql2){
                $sql3 = mysqli_query($con, "SELECT * FROM users WHERE Phnumber = '{$Phnumber}'");
                if(mysqli_num_rows($sql3) > 0){
                    $row = mysqli_fetch_assoc($sql3);

                   
                    $users_exp = 'ishtar';
                    $posation = strpos($name, $users_exp);
                   if($posation !== false){
                    $_SESSION['user_id'] = $row['user_id'];
           
                   }else{
                    $_SESSION['clint_id'] = $row['user_id'];
                   }
                   echo "sucses";
                }
            }else{
                echo "حدث خطا غير متوقع ";
            }
           }else{
            echo "يرجى كتابه رقم الهاتف بشكل صحيح";
           }
        }
    } else {
        echo " ليس بريد الكتروني  - $email ";
    }
} else {
    echo "يرجى كتابة البيانات قبل الارسال";
}
