<?php
include 'connect.php';

if(isset($_GET['id'])){
    $sql="DELETE from user where id=".$_GET['id'];
    $query=mysqli_query($conn,$sql);
    if(query){
        header('location:select.php');
    }
    else{// http_response_code(500);
        echo "somethig rong".mysqli_error($conn);}
}

?>