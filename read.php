<?php

	$results = mysqli_query( $connect, "SELECT * FROM t0" )
	echo "<table border> \n";
	while( $rows = mysqli_fetch_array( $results ) ) {
	echo "</table> \n";
	echo "<p><a href=create_input.php>CREATE a new record</a>";