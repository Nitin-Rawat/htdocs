<?php

header("Content-Type: Application/json");
header("Access-Control-Allow-Origin:*");

include "index.php";


//POST method
// $data = json_decode(file_get_contents("php://input"),true);
// $Search_val= $data['search'];


//GET methodb --url search
$Search_val= isset($_GET['search']) ? $_GET['search']:die();

$sql = "SELECT * FROM data WHERE student_name LIKE '%{$Search_val}%'";

$result = mysqli_query($conn, $sql) or die("SQL query Failed,");

if(mysqli_num_rows($result)>0){

     $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
     echo json_encode($output);
}else{

     echo json_encode(array("message"=>"No Record Found"));
}


?>