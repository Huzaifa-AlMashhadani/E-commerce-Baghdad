<?php

session_start();
if($_GET['deOrMAM']){
    if($_SESSION["root_id_4448"] === "1"){
        if($_SESSION["user_id"] === "1"){
        
            include_once "config.php";

            
           $sql = mysqli_query($con, "DELETE FROM orders");

            if($sql){
              header("location: ../Admin-root-orders.php");
            }else{
              echo "لم يتم حذف الطلبات ";
            }
        
        }else{
          header("location: ../userdashbord.php");
        }
    }else{
      header("location: ../userdashbord.php");
    
    }
}else{
    header("location: ../userdashbord.php");

}

?>