<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$database = "personal";
$sql = "SELECT * FROM websites WHERE user_id=".$_GET['id']."";
$articles="SELECT * FROM blogs WHERE user_id=".$_GET['id']."";
$conn = new mysqli($servername,$username,$password,$database) or die("Database connection failed: ".mysqli_connect_error());
$result = $conn->query($sql);
$result1 =$conn->query($articles);
$saved_data = $result->fetch_assoc();
$posts = $result1->fetch_all();
$conn->close();
