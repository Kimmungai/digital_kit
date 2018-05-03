<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "personal";
$sql = "SELECT * FROM websites WHERE id=".$_GET['id']."";
$conn = new mysqli($servername,$username,$password,$database) or die("Database connection failed: ".mysqli_connect_error());
$result = $conn->query($sql);
$saved_data = $result->fetch_assoc();
$conn->close();
