<?php

$con = mysqli_connect('localhost', 'root', '', 'insertdb');

function viewData()
{
    global $con;
    $query = "SELECT * FROM `userdata`";
    $run = mysqli_query($con, $query);

    if ($run == TRUE) {
        ?><table border="1">
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr><?php
                            while ($data = mysqli_fetch_assoc($run)) {
                                ?><tr>
                    <td><?php echo $data['FullName'] ?></td>
                    <td><?php echo $data['EmailId'] ?></td>
                </tr><?php
                                }
                                ?>
        </table><?php
                    } else
                        echo 'Error !';
                }


                ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Data</title>
</head>

<body>
    <?php viewData(); ?>
</body>

</html>