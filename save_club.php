<?php
	require_once 'conn.php';
	$club = $_POST['club'];
	$conn->query("INSERT INTO `club` VALUES('', '$club')") or die(mysqli_error());
