<?php 

// Creating Cookie

$name = 'Abhijit';
$time = time() + 86400;
setcookie('name', $name, $time);

echo $_COOKIE['name']."<br>";
 
// Destroying Cookie

// $exp = time() - 86400;

// setcookie('name', '', $exp);

echo $_COOKIE['name'];

?>