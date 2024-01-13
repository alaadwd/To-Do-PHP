<?php
include "./config/database.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM tasks WHERE id= $id";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Deleted";
        header("Location: index.php");
    }else 
    {
        die("Failed to delete");
    }

}
?>