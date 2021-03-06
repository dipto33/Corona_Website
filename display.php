<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="display.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Upload</title>
  </head>
  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <div class="container">
        <br>
        <br>
        <h1 class="text-center text-white bg-dark">Information of Patient</h1>
        <br>
        <form  method="post">
        <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
        <input type="submit" name="search" value="Filter"><br><br>
        <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="text-center text-white bg-dark">
                <th>Name</th>
                <th>National Id</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Blood Group</th>
                <th>Image</th>
                <th>Test Result</th>
                <th>Date</th>

            </thead>
            <tbody>
               
<?php
        if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `corona_info` WHERE CONCAT(`name`, `NID`, `age`, `Gender`, `address`, `bloodgroup`, `image`, `result`,`date`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
    else {
    $query= "select * from `corona_info`" ;
    $search_result = filterTable($query);
}
function filterTable($query)
{
        $connection= mysqli_connect("localhost","root","");
        $db= mysqli_select_db($connection,'information');
       //$displayquery= "select * from `corona_info`" ;
       $querydisplay=  mysqli_query($connection,$query);
       return  $querydisplay;
}
       //$row= mysqli_num_rows($querydisplay);

       while( $res= mysqli_fetch_array($search_result))
       {

            ?>
       

            <tr>
                <td class="text-center"><?php echo $res['name']; ?></td>
                <td class="text-center"><?php echo $res['NID']; ?></td>
                <td class="text-center"><?php echo $res['age']; ?></td>
                <td class="text-center"><?php echo $res['Gender']; ?></td>
                <td class="text-center"><?php echo $res['address']; ?></td>
                <td class="text-center" ><?php echo $res['bloodgroup']; ?></td>
                <td class="text-center"><img src="<?php echo $res['image']; ?>" height="100px" width="100px" ></td>
                <td class="text-center"><?php echo $res['result']; ?></td>
                <td class="text-center"><?php echo $res['date']; ?></td>
            </tr>


        <?php
       }
       ?>
            </tbody>



        </table>
        </div>
    </form>
    </div>   
  </body>
</html>