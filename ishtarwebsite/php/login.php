<?php
session_start();

include_once "config.php";

$Phnumber = mysqli_real_escape_string($con, $_POST['Phnumber']);
$password = mysqli_real_escape_string($con, sha1($_POST['password']) );


if(!empty($Phnumber) && !empty($password)){
    $sql = mysqli_query($con, "SELECT * FROM users WHERE Phnumber = '{$Phnumber}' AND password = '{$password}'");
    if(mysqli_num_rows($sql) > 0){
      $row = mysqli_fetch_assoc($sql);

    
      if($row['user_id'] === "1"){
        $_SESSION['root_id_4448'] = $row['user_id'];
        $_SESSION['user_id'] = $row['user_id'];
        echo "sucses";
      }else{
        $users_exp = 'ishtar';
         $name = $row['name'];
         $posation = strpos($name, $users_exp);
        if($posation !== false){
         $_SESSION['user_id'] = $row['user_id'];

        }else{
         $_SESSION['clint_id'] = $row['user_id'];
        }
        echo "sucses";
      }
     
    }else{
      echo "رقم الهاتف او كلمة المرور غير صحصة ";
    }
}else{
    echo "يرجى ادخال رقم الهاتف وكلمة المرور ";
}
