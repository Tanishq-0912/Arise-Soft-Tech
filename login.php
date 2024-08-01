<?php
include("include/connection.php");

if(isset($_POST['loging']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql=mysqli_query($con, "SELECT * FROM loging WHERE username='$username' AND Password='$password'");
    $row=mysqli_fetch_array($sql);
    $count=mysqli_num_rows($sql);
    if($count>0){
        header("Location:dashboard.php");
    }
    else{
        echo 'username and password incorrect!';
        
    }

}
?>
<html>
    <head>
        <title> my login page</title>
    </head>
    <body>
        <form action="login.php" method="POST" >
            <div class="form-group">
                <label for="name">user name</label>
                <input type="text" name="username" id="username" class="for-control" placeholder="enter username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="enter password">
                </div>
                <button type="submit" name="login" class="btn btn-default">Log In</button>
        </form>
    </body>
</html>
