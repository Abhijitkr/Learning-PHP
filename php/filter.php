<?php

// Validation

// $email = 'abhijit@gmail.com';
// $wrongEmail = 'a ujafh afjda -- ';

// if (filter_var($wrongEmail, FILTER_VALIDATE_EMAIL)) {
//     echo $wrongEmail . '<br>';
//     var_dump(filter_var($wrongEmail, FILTER_VALIDATE_EMAIL));
// } else
//     var_dump(filter_var($wrongEmail, FILTER_VALIDATE_EMAIL));

    


// Sanitization

$email = 'abhijit@gmail.com';
$wrongEmail = 'a ujafh afjda -- ';

if (filter_var($wrongEmail, FILTER_SANITIZE_EMAIL)) {
    echo $wrongEmail.'<br>';
    var_dump(filter_var($wrongEmail, FILTER_SANITIZE_EMAIL));
} else
    var_dump(filter_var($wrongEmail, FILTER_SANITIZE_EMAIL));

    // $check = (filter_var($wrongEmail, FILTER_SANITIZE_EMAIL));
    // echo $check;
?>