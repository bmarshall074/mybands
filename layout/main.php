<?php
// Display message if there is one in Session Data
if(isset($_SESSION['message'])) {
	// Display message
	echo "<div class=\"alert alert-{$_SESSION['message']['type']}\">{$_SESSION['message']['text']}</div>";
	
	// Display message from session
	unset($_SESSION['message']['text']);
}

// Store the 'p' parameter from the query string into a variable
if(isset($_GET['p'])) {
	$p = $_GET['p'];
} else {
	$p = 'list_bands';
}

include("views/$p.php");
