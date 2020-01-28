<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="receiveFile.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Insert your file</td>
                <td><input type="file" name="document" value="upload"></td>
            </tr>
            <td><input type="submit"></td>
        </table>
    </form>
</body>

</html>