<?php
    include("connection.php");
    error_reporting(0);
    $slno=($_GET['ss']);
    $query= "DELETE FROM corona_info WHERE `SL.NO` = '$slno'";
    $data= mysqli_query($connection,$query);

    if($data)
    {
       header("Location:up.php");
    }
    else
    {
        echo "Not";
    }
?>