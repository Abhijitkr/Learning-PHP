<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="receive.php" method="post">
       <center> <table style="margin-top:10%">
            <tr>
                <td>Name:</td> <td><input type="text" placeholder="Enter your name" name="name"></td>
            </tr>
            <tr>
                <td>Age:</td> <td><input type="number" placeholder="Enter your age" name="age"></td>
            </tr>
            <tr>
                <td>Address:</td> <td><textarea name="address" placeholder="Enter your Address"></textarea></td>
            </tr>
            <tr>
                <td>Gender:</td> <td> Male <input type="radio" value="Male" name="gender"> Female <input type="radio" value="Female" name="gender"></td>
            </tr>
            <tr>
                <td>Password:</td> <td><input type="password" placeholder="Enter your password" name="password"></td>
            </tr>
            <tr><td colspan="2" align="center" ><input type="submit" value="Submit"></td></tr>
        </table>
        </center> 
    </form>

</body>
</html>