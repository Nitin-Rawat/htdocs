<?php

header ('Content-Type: application/json');
header ('Acess-Control-Allow-Origin: *');



$data = json_decode(file_get_contents("php://input"),true);

$student_id=$data["sid"];

include "index.php";

$sql= "SELECT * FROM data WHERE id={$student_id}";
$result = mysqli_query($conn,$sql) or die("SQL Query Failed.");

if(mysqli_num_rows($result)>0)
{
$output = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo json_encode($output);

}else{
     echo json_encode(array('message' => 'NO Record Found.','status'=>false));
}

?>