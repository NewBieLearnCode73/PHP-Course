<?php
$a = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

foreach ($a as $b) {
    echo "<br>";
    echo $b;
    echo "<br>";
}


$info = array('id' => 1, 'name' => 'Dinh Chieu', 'age' => 19);

foreach ($info as $key => $value) {
    echo '<br>';
    echo "{$key} : {$value}";
    echo "<br>";
}
