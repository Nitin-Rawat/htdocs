<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"),true);

$id=  $data['id'];


$conn = mysqli_connect("localhost","root","","api_data") or die("Connection Failed");



$sql = "DELETE FROM data WHERE id = {$id}";


  // Execute query
if (mysqli_query($conn, $sql)) {
        echo json_encode(array("message" => "Data Deleted Successfully"));
} else {
        echo json_encode(array("message" => "Failed to delete data"));
    }



?>

