<?php
	include "Connection.php";
	/**
	 * Suppose that you have a database name 'ooad' and table name 'category' with field 'id' and 'name'
	 */
	$con = Connection::getConnection('localhost', 'root', 'ess:3', 'ooad');
	$query = 'INSERT INTO category(id,name) VALUES("001", "Water")';
	$result = mysql_query($query, $con);
	echo 'Insert successfully';
?>
