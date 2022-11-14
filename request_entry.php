<?php

	$name = $_GET["name"];

	$missed_course= $_GET["missed_course"];

	$ct_date = $_GET["ct_date"];

    $reason = $_GET["reason"];



	require_once('dbconfig.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO Request_makeup VALUES 
            ( '', '$name', '$missed_course', '$ct_date','$reason' )" )

		or die("Can not execute query");



	echo "Record inserted:<br> Student ID = $id <br> missed course = $missed_course
            ";



	echo "<p><a href=index.php>READ all records</a>";

?>