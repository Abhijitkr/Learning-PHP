<?php
session_start();
if (isset($_SESSION['uname'])) {
    echo "Welcome " . $_SESSION['uname'];
    ?>
    <h1><a href="logout.php" style="float:right">Logout</a></h1>
<?php
} else
    echo "<h1>You are not Loged In !</h1>"
    ?>