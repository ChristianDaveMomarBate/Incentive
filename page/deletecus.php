<?php

include 'sessionCon.php';
if (isset($_GET['deleteid2']))
{
    $id = $_GET['deleteid2'];
    $sql = "Delete from `sales` where id=$id";
    echo '<script>alert("DELETED")</script>';
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        echo '<script>alert("Deleted")</script>';
        header('location:cus_reports.php');
    }else 
    {
        die(mysqli_error($conn));
    }

}
 
?>