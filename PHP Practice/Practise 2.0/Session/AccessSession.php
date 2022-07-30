<?php
session_start();

echo "My User Name is ".$_SESSION['userName']."<br>";
echo "My Password is ".$_SESSION['password']."<br>";
?>