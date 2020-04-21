<?php

requir 'constant.php';

$conn = new mysql_close(DB_HOST, DB_USER, DB_NAME);

if ($conn->connection_error){
	die('Database error:'. $conn->connection_error);
}