<?php 
session_start();
if (isset($_SESSION["user"])) {
header("Location: welcome.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="registerpage.css">
</head>
<body>
<nav> <p>TUMALEED &trade;</p></nav>
    <div class="container">
        <?php
if (isset($_POST["Login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    require_once "database.php";
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if ($user) {
        if (password_verify($password, $user["password"])) {
            session_start();
            $_SESSION["user"]= "yes";
            header("Location: welcome.php");
            die();
        
        }else{
            echo "<div class ='alert alert-danger'>Password does not match</div>";

        }
    }else{
        echo "<div class ='alert alert-danger'>Email does not match</div>";
    }

}

        ?>
        <form action="loginpage.php" method="post">
            <div class="form-group">
                <input type="email" placeholder="Enter Email:" name="email" class="form-control">
            </div>
            <div class="form-group">
                <input type="password" placeholder="Enter Password:" name="password" class="form-control">
            </div>
            <br>
            <div class="form-btn">
               <span> <input type="submit" value="Login" name="Login" class="btn btn-primary"></span>
            </div>
        </form>
        
        <br>
        <div class="href"><span><p>Not registered yet<a href="Registerpage.php">Register Here</a></p></span></div>
    </div>
    
</body>
</html>