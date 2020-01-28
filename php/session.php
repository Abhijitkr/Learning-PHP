<?php
session_start();
if (isset($_SESSION['uname'])) {
    echo "<h1>You are already Loged In!</h1>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <table>
            <tr>
                <td>Username: </td>
                <td><input type="text" name="username"> </td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="password" name="password"> </td>
            </tr>
            <td><input type="submit" name="submit" value="Submit"></td>
        </table>
    </form>
</body>

</html>

<?php
if ($_POST['submit']) {
    $_SESSION['uname'] = $_POST['username'];
    header('location:welcome.php');
}

?>