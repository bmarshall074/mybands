<?php
session_start();
// Read file into array
$lines = file('../data/bands.csv', FILE_IGNORE_NEW_LINES);

$lines = unset($lines);

$data_string = implode("\n",$lines);

$f = fopen('../data/bands.csv','w');
fwrite($f,$data_string);
fclose($f);

$_SESSION['message'] = 'The band has been deleted. It is gone... forever. Congratulations, you monster. Why does a scourge like youself exist upon this planet? You know what... no... I dont wanna know!';
header('Location:../?p=list_bands');

?>


<!-- To synch workspace with cloud
Commit changes - changes files used to track repository on local machine to check for new files
Push changes - will make changes on githu/cloud respository
In order to do this, first must type a git add command-->