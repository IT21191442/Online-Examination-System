<?php
include 'includes/config.php';
if(isset($_GET['deleteid'])){//using get method, can access variables & parameters from url
    $id=$_GET['deleteid'];

    //delete record
    $sql="DELETE FROM `inquiry` WHERE id=$id";
    $result=mysqli_query($conn,$sql);//check conditon & mysqli method has $con,$sql parameters 
    if($result){
        echo '<script>
                  alert("Delete successfully!");
                  window.location="Custom_Officer_dashboard.php";
               </script>';
    }else{
        die("Connection failed".$conn->connect_error);
    }

}



?>