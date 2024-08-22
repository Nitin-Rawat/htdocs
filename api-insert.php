<?php

header ('Content-Type: application/json');
header ('Acess-Control-Allow-Origin: *'); 
header ('Acess-Control-Allow-Methods: POST'); 
header ('Acess-Control-Allow-Headers:Acess-Control-Allow-Headers,Content-Type,Acess-Control-Allow-Methods, Authorization, X-Requested-With, '); 


$data = json_decode(file_get_contents("php://input"),true);

$id = $data["id"];
$name=$data["name"];
$age=$data["age"];
$city=$data["city"];

include "index.php";

$sql= "INSERT INTO data(student_name,age,city,id) VALUES('{$name}',{$age},'{$city}', {$id}) ";


if(mysqli_query($conn,$sql))
{
     echo json_encode(array('message' => ' Record Added.','status'=>true));


}else{
     echo json_encode(array('message' => 'NO Record Added.','status'=>false));
}

?>