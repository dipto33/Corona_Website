<?php
    include("connection.php");
    error_reporting(0);
    $rn=($_GET['rn']);
    $mn=($_GET['mn']);
    $ln=($_GET['ln']);
    $pn=($_GET['pn']);
    $sn=($_GET['sn']);
    $kn=($_GET['kn']);
    $cn=($_GET['cn']);
    $ss=($_GET['ss']);
    
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="updates.css">
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
                    <h2 style="color: black">Edit Form</h2>
                </div>
                <div class="form-body">
                    <form action="update1.php" method="POST" enctype="multipart/form-data">
                        <div class="row form-row">
                        <label>Serial No: </label>
                        <span>
                            <input type="text" name="serial_no" value="<?php echo $ss?>" class="form-control">
                        </span>
                        </div>
                        <div class="row form-row">
                        <label>Name: </label>
                        <span>
                            <input type="text" name="name" value="<?php echo $rn?>" class="form-control">
                        </span>
                        </div>
                        <div class="row form-row">
                        <label>National ID: </label>
                        <span>
                            <input type="text" name="national_id"  value="<?php echo $mn?>" class="form-control">
                        </span>
                        </div>
                       <div class="row form-row">
                          <label>Age: </label>
                            <span>
                              <input type="text" name="age"  value="<?php echo $ln?>" class="form-control">
                            </span>
                        </div>
                        <div class="row form-row">
                        <label>Gender: </label>
                        <span>
                            <input type="text" name="gender" value="<?php echo $pn?>" class="form-control">
                        </span>
                        </div>
                        <div class="row form-row">
                            <label>Address: </label>
                            <span>
                                <input type="text" name="address" value="<?php echo $sn ?>" class="form-control">
                            </span>
                        </div>
                        <div class="row form-row">
                            <label>Blood Group:</label>
                            <span>
                            <input type="text" name="blood_group" value="<?php echo $kn ?>" class="form-control">
                            </span>
                        </div>
                        <div class="row form-row">
                            <label>Date:</label>
                            <span>
                            <input type="text" name="date" id="datepicker" value="<?php echo $cn ?>" class="form-control">
                            </span>
                        </div>
                        <input type="submit" name="insert" value="UPDATE">
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


 