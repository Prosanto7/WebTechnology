<?php
$name = "Prosanto Deb";
$line = "Length of the word $name is ";
echo $line;
echo strlen($name)."<br>";
echo "There are ".str_word_count($line)." Words in this line.<br>";
echo "Reverse of $name is ".strrev($name)."<br>";
echo "Position of Deb in $name is ".strpos($name, "Deb")."<br>";
echo "Replacing Deb in $name with Roy ".str_replace("Deb", "Roy", $name)."<br>";
?>