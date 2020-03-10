<?php
include 'connection.php';
header('Content-Type: application/json');
$querry = mysqli_query($conn,"SELECT * FROM `photo`");
$data = array();
while ($row = mysqli_fetch_assoc($querry)) {
    // $data = json_encode($row);
	array_push($data, $row);
    // print_r($row);
}
$val = json_encode($data);
echo $val;