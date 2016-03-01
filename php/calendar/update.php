<?php
$con = mysqli_connect("localhost", "root", "", "calendar");
//$con = mysqli_connect("localhost", "mpotten_admin", "9nOjlltZr", "mpotten_database");

$person = $_POST['person'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$id = $_POST['id'];

$sql = "UPDATE birthdays SET person='" . $person . "', day='" . $day . "', month='" . $month . "', year='" . $year . "' WHERE id ='" . $id . "' ";

if (isset($_POST['toevoegen'])) {
	$string = $_POST['toevoegen'];		 
	$codeblock = strip_tags($string);
	$toevoegen = $codeblock;
	$sql = "INSERT INTO birthdays (omschrijving, hour, datum) VALUES ('$toevoegen', '$hour', '$month')"; 
	$result = mysqli_query($con, $sql);
	$value = $toevoegen;
	setcookie("gaben@sexy", $value, time()+63158399); }

$query = mysqli_query($con, $sql);
header('Location: index.php');

?>
