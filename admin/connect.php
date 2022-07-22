<?php
    $server='localhost';
    $user='root';
    $pass='';
    $database='cuoc_song_ma';
    $conn=mysqli_connect($server,$user,$pass,$database);
    mysqli_query($conn, 'set names"utf8"');
?>