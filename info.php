 <?php
    $connection= mysqli_connect("localhost","root","");
    $db= mysqli_select_db($connection,'information');
    if(isset($_POST['insert']))
    {
        $name= $_POST['name'];
        $nationalid= $_POST['national_id'];
        $age= $_POST['age'];
        $gender= $_POST['gender'];
        $address=$_POST['address'];
        $bloodgroup=$_POST['blood_group'];
        $image= $_FILES['imagefile'];
        $result= $_POST['result'];
        //$date= $_POST['date'];


        $filename= $image['name'];
        //print_r($filename);
        $fileerror= $image['error'];
        $filetemp= $image['tmp_name'];

        $fileext = explode('.',$filename);
        $filecheck = strtolower(end($fileext));

        $fileextstored = array('png','jpg','jpeg');

        if(in_array($filecheck,$fileextstored))
        {
            $destinationfile = 'upload/'.$filename;
            move_uploaded_file($filetemp,$destinationfile);

       $query = "INSERT INTO `corona_info` ( `name`, `NID`, `age`, `Gender`, `address`,`bloodgroup`,`image`,`result`) VALUES ('$name','$nationalid','$age','$gender','$address','$bloodgroup','$destinationfile','$result')";
       $query_run = mysqli_query($connection,$query);
        header("Location:up.php");

   
 
        
    }
}
     
    ?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="info.css">
    <link rel="stylesheet" href="jquery-ui.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <div class="infor">
        <div class="col-sm-5">
            <div class="form-data">
                <div class="form-head">
                    <h2 style="color: black">Information Form</h2>
                </div>
                <div class="form-body">
                    <form action="info.php" method="POST" enctype="multipart/form-data">
                        <div class="row form-row">
                        <label>Name: </label>
                        <span>
                            <input type="text" name="name" placeholder="Enter Your Name" class="form-control">
                        </span>
                        </div>
                        <div class="row form-row">
                        <label>National ID: </label>
                        <span>
                            <input type="text" name="national_id" placeholder="Enter Your National ID Number" class="form-control">
                        </span>
                        </div>
                       <div class="row form-row">
                          <label>Age: </label>
                            <span>
                              <input type="text" name="age" placeholder="Enter Your Age" class="form-control">
                            </span>
                        </div>
                        <div class="row form-row">
                        <label>Gender: </label>
                        <span>
                            <input type="text" name="gender" placeholder="Enter Your Gender" class="form-control">
                        </span>
                        </div>
                        <div class="row form-row">
                            <label>Address: </label>
                            <span>
                                <input type="text" name="address" placeholder="Enter Your Address" class="form-control">
                            </span>
                        </div>
                        <div class="row form-row">
                            <label>Blood Group:</label>
                            <span>
                            <input type="text" name="blood_group" placeholder="Enter Your Blood Group" class="form-control">
                            </span>
                        </div>
                       <!-- <div class="row form-row">
                            <label>Date:</label>
                            <span>
                            <input type="text" name="date" placeholder="Enter Test Date" id="datepicker" class="form-control">
                            </span>
                        </div>-->

                        <input type="file" name="imagefile">

                        <label class="label2">Test Result:</label>
                        <input type="radio" name="result" id="positive" value="positive">
                        <label class="label1" for="positive">Positive</label>
                        <input type="radio" name="result" id="negative" value="negative">
                        <label class="label1" for="negative">Negative</label><br>
                        <input type="submit" name="insert" value="SUBMIT">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--<script src="jquery-3.5.1.min.js"></script>
    <script src="jquery-ui.min.js"></script>
    <script>
        $(document).ready(function()
        {
            $('#datepicker').datepicker({
                dateFormat: "dd-mm-yy",
                changeMonth: true,
                changeYear: true
            });
        })
    </script>-->
</body>

</html>


