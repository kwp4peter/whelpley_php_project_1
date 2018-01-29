<?php

	$connect = mysqli_connect('localhost', 'whelpley', '3Mvyxykc!!', 'whelpley_php_2017')
		or die('Error connecting to database');

	$age = mysqli_real_escape_string($connect, trim($_POST['age']));
	$radio1 = mysqli_real_escape_string($connect, trim($_POST['radio1']));
	$radio2 = mysqli_real_escape_string($connect, trim($_POST['radio2']));
	$radio3 = mysqli_real_escape_string($connect, trim($_POST['radio3']));
	$radio4 = mysqli_real_escape_string($connect, trim($_POST['radio4']));
	$radio5 = mysqli_real_escape_string($connect, trim($_POST['radio5']));
	$radio6 = mysqli_real_escape_string($connect, trim($_POST['radio6']));
	$radio7 = mysqli_real_escape_string($connect, trim($_POST['radio7']));
	$radio8 = mysqli_real_escape_string($connect, trim($_POST['radio8']));
	$radio9 = mysqli_real_escape_string($connect, trim($_POST['radio9']));
	$radio10 = mysqli_real_escape_string($connect, trim($_POST['radio10']));

	echo $age.'<br/>'.$radio1.'<br/>'.$radio2.'<br/>'.$radio3.'<br/>'.$radio4.'<br/>'.$radio5.'<br/>'.$radio6.'<br/>'.$radio7.'<br/>'.$radio8.'<br/>'.$radio9.'<br/>'.$radio10;

	$query = "INSERT INTO project_1(age, radio1, radio2, radio3, radio4, radio5, radio6, radio7, radio8, radio9, radio10"."VALUES('$age', '$radio1', '$radio2', '$radio3', '$radio4', '$radio5', '$radio6', '$radio7', '$radio8', '$radio9', '$radio10')";

	$result = mysqli_query($connect, $query)
		or die('Error querying database');



/**
	$connect = mysqli_connect('localhost', 'whelpley', '3Mvyxykc!!', 'project_1')
		or die('Error connecting to database: '.mysqli_error($connect));

	$query = "INSERT INTO project_1_responses(age, radio1, radio2, radio3, radio4, radio5, radio6, radio7, radio8, radio9, radio10, radio11)"."VALUES ('$age', '$radio1', '$radio2', '$radio3', '$radio4', '$radio5', '$radio6', '$radio7', '$radio8', '$radio9', '$radio10', '$radio11')";

	$result = mysqli_query($connect, $query)
		or die ('Error querying database: '.mysqli_error($connect));

	mysqli_close($connect); **/

	mysqli_close($connect);

?>