<?php
$string = $_POST["textarea"];
$string.Replace("\r\n", "\\r\\n")
echo $string;
?>