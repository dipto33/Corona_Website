<?php

 include("connection.php");

    $slno= $_POST['serial_no'];
    $name= $_POST['name'];
    $nid= $_POST['national_id'];
    $age= $_POST['age'];
    $gender= $_POST['gender'];
    $address= $_POST['address'];
    $bloodgroup= $_POST['blood_group'];
    $date= $_POST['date'];

    $query= "UPDATE `corona_info` SET `SL.NO`='$slno', `name`='$name',`NID`='$nid',`age`='$age',`Gender`='$gender',`address`='$address',`bloodgroup`='$bloodgroup',`date`='$date' WHERE `SL.NO`='$slno'";
    $data=mysqli_query($connection,$query);
    if($data)
    {
        echo"YES";
        header("Location:up.php");

    }
    else
    {
        echo"NO";
    }
 

?>


