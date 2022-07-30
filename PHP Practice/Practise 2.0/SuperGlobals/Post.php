<!DOCTYPE html>
<html lang="en">
<head>
    <title>Post</title>
</head>
<body>
    <form method ="POST" action= "index.php">
        Enter Your Name <input type = "text" name = "userName"> <br>
        Enter Your Password <input type = "password" name = "pass"> <br>
        <input type = "submit" value = "Submit">
    </form>
   
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
echo $_POST['userName']."<br>";
echo $_POST['pass'];

} else {
    echo "ERROR";
}

?>