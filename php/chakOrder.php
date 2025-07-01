<?php
session_start();
if(isset($_SESSION['root_id_4448']) == "1"){

    if(isset($_GET['rejet_id']) || isset($_GET['acept_id'])){
        include_once "config.php";
    
        // rejeting order sql and php code 
        if(isset($_GET['rejet_id'])){
            $rejet_id = $_GET['rejet_id'];
                    $sql2 = mysqli_query($con, "DELETE FROM orders WHERE id = $rejet_id");
                    if($sql2){
                        header("location: ../Admin-root-acount.php");
       
                       }else{
                        header("location: ../Admin-root-acount.php");
       
                    }

        }else{
            // acsepting order php code 
           
            if(isset($_GET['acept_id'])){
                $acept_id = $_GET['acept_id'];
                $sql = mysqli_query($con, "UPDATE orders SET statues ='200',  order_price = '0' WHERE id= $acept_id");
                if($sql){
                 header("location: ../Admin-root-acount.php");

                }else{
                    header("location: ../Admin-root-acount.php");
   
                }

            }
        }
       
        
        // $sql2 = mysqli_query($con, "DELETE FROM orders WHERE id = $id AND order_id = $user_id");
        
       
    }else{
        header("location: ../login.php");
    }
    
}else{
    header("location: ../login.php");
}
?>