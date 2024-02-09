<?php
$count = 1;
$list = [1, 2, 3, 4, 5];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table border="1">
        <tr>
            <th width="50">ID</th>
            <th width="200">Number</th>
        </tr>
        <?php
        foreach ($list as $key => $value) {
            echo "
        <tr>
        <td>{$count}</td>
        <td>{$value}</td>
        </tr>";
            $count++;
        }
        ?>
    </table>


</body>

</html>