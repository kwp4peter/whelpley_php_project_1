<?php

	$radio9 = $_POST['radio10'];

	global $radio9;

	echo $radio9;

	$connect = mysqli_connect('localhost', 'whelpley', '3Mvyxykc!!', 'project_1')
		or die('Error connecting to database: '.mysqli_error($connect));

	$query = "INSERT INTO project_1_responses(radio10)"."VALUES ('$radio10')";

	$result = mysqli_query($connect, $query)
		or die ('Error querying database: '.mysqli_error($connect));

	mysqli_close($connect); 
?>