<?php
$db = new mysqli('https://classroom.cs.unc.edu/phpMyAdmin/', '', '', 'myxdbz' );


if($db->connect_errno) {
	echo $db->connect_error;
	//die('Sorry, we are having some problems.')
}
?>