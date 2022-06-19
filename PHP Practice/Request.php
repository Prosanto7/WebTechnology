<!DOCTYPE html>
<html lang="en">
<head>
    <title>$_REQUEST SUPERGLOBAL VARIABLE</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        Name : <input type="text" name="userName">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        echo $_SERVER['PHP_SELF']."<br>";
        $name = $_REQUEST['userName'];
        echo $name;
    }
?>