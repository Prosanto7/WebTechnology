<?php
setcookie("user","Prosanto", time() + 84600, "/");

if(isset($_COOKIE['user'])){
    echo "Cookie Created";
} else {
    echo "No Cookie Available";
}
?>