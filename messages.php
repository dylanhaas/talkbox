<?php 
	require("db.php")

	mysql_query("SELECT * FROM messages")

	if (!$result) {
		die("Query does not work".mysql_error());
	}

	$messages = array();

	while ($row = mysql_fetch_assoc($result)) {
    	$messages[] = $row;
    }

    echo json_encode($messages);


	mysql_close($db);