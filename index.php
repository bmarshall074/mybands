<?php 
// Must be called first to have access to any session data
session_start();

// "Import" functions - require copies and pastes the content of the file being called here
require('functions.php')
?>
<!DOCTYPE html>
<html>
	<head>
		<!-- Bootstrap link always comes before other CSS links -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="styles.css" />
		<title>MyBands</title>
	</head>
	<body>
		<div id="wrapper" class="container">
			<header>
				<!--  The include statement copies and pastes the contents from the indicated file.
				A fatal error stops the php functions on a webpage, and happens when required 
				files are not found. When an include statement is not found, there will be an error,
				however, it will not "kill" the php functions of the webpage. -->
				<?php include('layout/header.php') ?>
			</header>
			<nav>
				<?php include('layout/nav.php') ?>
			</nav>
			<section role="main">
				<!-- CWD (Current Working Directory) - directory of the file being served; files 
				referenced (include or require) are typed relative to the CWD (parent folder) -->
				<?php include('layout/main.php') ?>
			</section>
			<footer>
				<?php include('layout/footer.php') ?>
			</footer>
		</div>
	</body>
</html>

<!-- HT Access files prohibit browsers from accessing files directly (typing the path in the URL) -->