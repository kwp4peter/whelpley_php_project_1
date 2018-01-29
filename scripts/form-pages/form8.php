<?php

	$radio7 = $_POST['radio8'];

	global $radio7;

	echo $radio7;


	$connect = mysqli_connect('localhost', 'whelpley', '3Mvyxykc!!', 'project_1')
		or die('Error connecting to database: '.mysqli_error($connect));

	$query = "INSERT INTO project_1_responses(radio7)"."VALUES ('$radio7')";

	$result = mysqli_query($connect, $query)
		or die ('Error querying database: '.mysqli_error($connect));

	mysqli_close($connect); 
?>