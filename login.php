<?php
if(isset($_POST['submit']))
{
    $user= $_POST['user'];
    $pass= $_POST['password'];
    if($user=="admin" && $pass=="admin")
    {
        header("Location:admin.php");
    }
    else
    {
        echo("error!!!!!!");
    }
}

?>
<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <body>
    <div class="loginbox">
    <img src="images/avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form action="" method="POST">
            <p>Username</p>
            <input type="text" name="user" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <br>
            <br>
            <input type="submit" name="submit" value="Login">
        </form>
        
    </div>

</body>
</head>
</html>