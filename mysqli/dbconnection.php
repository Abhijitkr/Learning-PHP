<?php

$con = mysqli_connect('localhost', 'root', '', 'example');

if ($con)
    echo 'Connection established successfully !';
else
    echo 'Connection not established successfully !';

?>