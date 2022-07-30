<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
    <form method = "GET" action = "<?php echo $_SERVER['PHP_SELF'] ?>">
        Enter Your Name <input type = "text" name = "userName"> <br>
        Enter Your Password <input type = "password" name = "pass"> <br>
        <input type = "submit" value = "Submit">
    </form>
</body>
</html>

<?php
   if ($_SERVER['REQUEST_METHOD'] == "GET") {
        echo $_GET['userName']."<br>";
        echo $_GET['pass']."<br>";
   } else {
    echo "ERROR";
}
?>