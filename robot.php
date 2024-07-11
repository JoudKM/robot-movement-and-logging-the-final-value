<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "robotMoves";
$move = $_GET["x"];
echo "$move";

$connect_database = mysqli_connect($host , $username , $password , $dbname );

if(mysqli_connect_errno()){
  echo "not connected - غير متصل";
  exit();
}

else{
  echo "connected - متصل";
}

$sql = "INSERT INTO robotdata (id, direction)
VALUES ('', '$move')";

if ($connect_database->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $connect_database->error;
}

?>