<?php
    include('../connect.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM `dt_detail` WHERE id=$id;";

    // thuc thi delete
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    header('location:../product/view.php');
?>