<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>

<body>
     <form action="01form.php" method="get">
          <label> Username :</label>
          <input type="text" name="username"> <br>
          <label> Password :</label>
          <input type="password" name="password"> <br>
          <input type="submit" value="submit">

     </form>
</body>

</html>




<?php


if(isset($_GET["username"])&& isset($_GET["password"])){
echo $_GET["username"]; 
echo $_GET["password"];

}else{
     print "Please submit form.";
}



?>