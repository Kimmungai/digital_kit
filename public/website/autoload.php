<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$database = "personal";

$sql = "SELECT * FROM websites WHERE user_id=".$_GET['id']."";
$articles="SELECT * FROM blogs WHERE user_id=".$_GET['id']." ORDER BY id DESC";
$person="SELECT * FROM users WHERE id=".$_GET['id']."";

$conn = new mysqli($servername,$username,$password,$database) or die("Database connection failed: ".mysqli_connect_error());
$result = $conn->query($sql);
$saved_data = $result->fetch_assoc();

$result1 =$conn->query($articles);
$posts=array();
while($row = $result1->fetch_assoc()){
  $posts [] = $row;
}

$result2 = $conn->query($person);
$user = $result2->fetch_assoc();

$conn->close();
