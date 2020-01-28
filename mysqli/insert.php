<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inserting data</title>
</head>

<body>
    <form action="insertmsg.php" method="post">
        <table align="center" style="margin-top:100px">
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name" required="required"></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="email" name="email" required="required"></td>
            </tr>
            <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
        </table>
    </form>
</body>

</html>