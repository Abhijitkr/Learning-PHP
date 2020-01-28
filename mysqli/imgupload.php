<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Your Image</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Upload your image</td>
                <td><input type="file" name="image" required="required"></td>
                <td><input type="submit" name="submit" value="Upload"></td>
            </tr>
        </table>
    </form>
</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $imgName = $_FILES['image']['name'];
    $tempImgName = $_FILES['image']['tmp_name'];

    $con = mysqli_connect('localhost', 'root', '', 'uploadimage') or die(mysqli_error($con));
    move_uploaded_file($tempImgName, "images/$imgName");
    $query = "INSERT INTO `uploading`(`images`) VALUES ('$imgName')";
    $run = mysqli_query($con, $query);
    echo "Upload Success !";
}


?>