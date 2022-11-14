<?php

	$id = $_GET["id"];



	require_once('dbconfig.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "DELETE FROM Request_makeup WHERE id=$id" )

		or die("Can not execute query");



	echo "Record deleted<br>";



	echo "<p><a href=cansel_entry.php>READ all records</a>";

?>