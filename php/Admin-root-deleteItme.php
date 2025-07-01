<?php
session_start();
if(isset($_SESSION['root_id_4448'])){

    if(isset($_GET['item_id'])){
        include_once "config.php";
    
        $id = $_GET['item_id'];
        $user_id = $_SESSION['root_id_4448'];
        
        $sql2 = mysqli_query($con, "DELETE FROM items WHERE item_id = $id");
        
        if($sql2){
        header("location: ../Admin-root-items.php");
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