<?php
session_start();

$eidToDelete = $_REQUEST['eidTobeDeleted'];

$con=mysql_connect('classroom.cs.unc.edu','kjmoon','tGmuBw7GZG7dTN67');
mysql_select_db('kjmoondb');

$uid = mysql_query("SELECT * FROM Users WHERE username= '$username' ");
$uidRow = mysql_fetch_assoc($uid);

$uid = $uidRow[uid];

$sql = "DELETE FROM Essays E WHERE E.eid = '$eidToDelete' AND E.uid = '$uid'";

if (mysqli_query($sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

?>