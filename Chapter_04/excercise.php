<?php
$list_user = array(
    1 => array
    (
    "id" => 1,
    "fullname" => "John David",
    "age" => 30    
    ),

    2 => array
    (
    "id" => 2,
    "fullname" => "Alaba",
    "age" => 27    
    ),

    3=> array
    (
    "id"=> 3,
    "fullname" => "Bellingham",
    "age" => 20
    )
    );
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excercise</title>
</head>
<body>
    <h1>Danh sách thành viên</h1>

    <p>ID: <?php echo $list_user[1]['id']?></p>
    <p>Fullname: <?php echo $list_user[1]['fullname']?></p>
    <p>Age: <?php echo $list_user[1]['age']?></p>

    <p>ID: <?php echo $list_user[2]['id']?></p>
    <p>Fullname: <?php echo $list_user[2]['fullname']?></p>
    <p>Age: <?php echo $list_user[2]['age']?></p>

    <p>ID: <?php echo $list_user[3]['id']?></p>
    <p>Fullname: <?php echo $list_user[3]['fullname']?></p>
    <p>Age: <?php echo $list_user[3]['age']?></p>


</body>
</html>