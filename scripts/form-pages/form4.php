<?php

	$radio3 = $_POST['radio4'];

	global $radio3;

	echo $radio3;


	$connect = mysqli_connect('localhost', 'whelpley', '3Mvyxykc!!', 'project_1')
		or die('Error connecting to database: '.mysqli_error($connect));

	$query = "INSERT INTO project_1_responses(radio3)"."VALUES ('$radio3')";

	$result = mysqli_query($connect, $query)
		or die ('Error querying database: '.mysqli_error($connect));

	mysqli_close($connect); 

?>