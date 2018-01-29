<?php

	$radio6 = $_POST['radio7'];

	global $radio6;

	echo $radio6;


	$connect = mysqli_connect('localhost', 'whelpley', '3Mvyxykc!!', 'project_1')
		or die('Error connecting to database: '.mysqli_error($connect));

	$query = "INSERT INTO project_1_responses(radio6)"."VALUES ('$radio6')";

	$result = mysqli_query($connect, $query)
		or die ('Error querying database: '.mysqli_error($connect));

	mysqli_close($connect); 

?>