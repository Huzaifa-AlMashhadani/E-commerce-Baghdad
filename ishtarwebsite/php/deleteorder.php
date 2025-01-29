<?php
session_start();
if(isset($_SESSION['user_id'])){

    if(isset($_GET['id'])){
        include_once "config.php";
    
        $id = $_GET['id'];
        $user_id = $_SESSION['user_id'];
        
        $sql2 = mysqli_query($con, "DELETE FROM orders WHERE id = $id AND order_id = $user_id");
        
        if($sql2){
        header("location: ../ordersDashbord.php");
        }else{
            header("location: ../ordersDashbord.php");

        }
    }else{
        header("location: ../login.php");
    }
    
}else{
    header("location: ../login.php");
}
?>