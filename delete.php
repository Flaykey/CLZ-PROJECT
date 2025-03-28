<?php
    include("connect.php");
    $fusername = $_GET['id'];
    $delete_sql = "DELETE FROM ACCOUNTS WHERE USERNAME = '$fusername';";
    mysqli_query($conn,$delete_sql);
    mysqli_close($conn);
    header("location:home.php");
?>