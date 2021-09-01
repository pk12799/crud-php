<?php
include 'con.php';
echo $_GET['id'];
if(isset($_GET['id'])){
    $id = $_GET['id']    ;
    $sql = "DELETE FROM users WHERE id=$id";
    mysqli_query($con, $sql);
    header('location:index.php');
}else{
    echo "not delete";
}


?>