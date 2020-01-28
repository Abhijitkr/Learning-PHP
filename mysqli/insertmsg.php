<?php

$name = $_POST['name'];
$email = $_POST['email'];

$con = mysqli_connect('localhost', 'root', '', 'insertdb');
$query = "INSERT INTO `userdata`(`FullName`, `EmailId`) VALUES ('$name','$email')";
$run = mysqli_query($con, $query);

if ($run == TRUE)
    echo 'Data Inserted Successfully !';
else
    echo 'Data not Inserted !';

?>

<a href="insert.php">Insert more Data</a>