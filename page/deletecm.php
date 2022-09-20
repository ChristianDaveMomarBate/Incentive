<?php

include 'sessionCon.php';
if (isset($_GET['deleteid3']))
{
    $id = $_GET['deleteid3'];
    $sql = "Delete from `sales` where id=$id";
    echo '<script>alert("DELETED")</script>';
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        echo '<script>alert("Deleted")</script>';
        header('location:customermonitoring.php');
    }else 
    {
        die(mysqli_error($conn));
    }

}
 
?>