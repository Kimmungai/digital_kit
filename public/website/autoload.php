<?php
$servername = "127.0.0.1";
$username = "kimmunga_persona";
$password = "kim@peter";
$database = "kimmunga_personal";
$sql = "SELECT * FROM websites WHERE id=".$_GET['id']."";
$conn = new mysqli($servername,$username,$password,$database) or die("Database connection failed: ".mysqli_connect_error());
$result = $conn->query($sql);
$saved_data = $result->fetch_assoc();
$conn->close();
