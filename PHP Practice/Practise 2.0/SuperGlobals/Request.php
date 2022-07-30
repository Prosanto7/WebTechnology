<!DOCTYPE html>
<html lang="en">
<head>
    <title>Request</title>
</head>
<body>
    <form method = "POST" action = "<?php echo $_SERVER['PHP_SELF']?>">
    Enter Your Name <input type="text" name = "userName"><br>   
    <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        echo $_REQUEST['userName'];
    } else {
        echo "ERROR";
    }
?>