<?php
if(isset($_GET["tag"])) {

	$tag = preg_replace("#[^a-zA-Z0-9_]#", '', $_GET["tag"]);

	echo '<h1>tag: ' . $tag . '</h1>';

	// Create connection
	$conn = new mysqli('localhost', 'user', 'pass', 'database');

	// if connection error
	if ($conn->connect_errno) {
		echo "<pre>";
		echo "Error MySQLi: (" . $conn->connect_errno
		. ") " . $conn->connect_error;
		echo "</pre>";
		exit();
	}
	$conn->set_charset("utf8");

	// sql query
	$sqlQuery = "SELECT * FROM table where column LIKE '%".$tag."%'";

	// run the query
	$result = $conn->query($sqlQuery);

	if($result->num_rows > 0) {

		// if matching tag found then echo the result
		echo '<ul>';
		while($row = $result->fetch_array())  {
			echo '<li>'.$row["column"].'</li>';
		}
		echo '</ul>';

	} else {

		// if nothing found, echo error message
		echo '<p>No Data Found</p>';
	}

	// close mysqli connection
	$conn->close();
}
?>
