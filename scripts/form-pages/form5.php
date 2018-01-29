<?php

	$radio4 = $_POST['radio5'];

	global $radio4;

	echo $radio4;


	$connect = mysqli_connect('localhost', 'whelpley', '3Mvyxykc!!', 'project_1')
		or die('Error connecting to database: '.mysqli_error($connect));

	$query = "INSERT INTO project_1_responses(radio4)"."VALUES ('$radio4')";

	$result = mysqli_query($connect, $query)
		or die ('Error querying database: '.mysqli_error($connect));

	mysqli_close($connect); 

?>