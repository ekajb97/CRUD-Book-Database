<?php
session_start();

$mysqli = new mysqli('localhost','root','','phpmyadmin') or die(mysqli_error($mysqli));

$id = 0;
$update = false;
$creator = '';
$title = '';
$type = '';
$identifier = '';
$date = '';
$language = '';
$description = '';

if(isset($_POST['save']))
{
	$creator = $_POST['creator'];
	$title = $_POST['title'];
	$type = $_POST['type'];
	$identifier = $_POST['identifier'];
	$date = $_POST['date'];
	$language = $_POST['language'];
	$description = $_POST['description'];

	$mysqli->query("INSERT INTO eBook_MetaData (creator, title, type, identifier, date, language, description) VALUES ('$creator', '$title', '$type', '$identifier', '$date', '$language', '$description')") or die($mysqli->error);

	$_SESSION['message'] = "Record has been saved!";
	$_SESSION['msg_type'] = "sucess";

	header("location: eBook_MetaData.php");
}


if(isset($_GET['delete']))
{
	$id = $_GET['delete'];
	$mysqli->query("DELETE FROM eBook_MetaData WHERE id=$id") or die($mysqli->error);

	$_SESSION['message'] = "Record has been deleted!";
	$_SESSION['msg_type'] = "danger";

	header("location: eBook_MetaData.php");
}

if(isset($_GET['edit']))
{
	$id = $_GET['edit'];
	$update = true;
	$result = $mysqli->query("SELECT * FROM eBook_MetaData WHERE id=$id") or die($mysqli->error);

	if(count($result)==1)
	{
		$row = $result->fetch_array();
		$creator = $row['creator'];
		$title = $row['title'];
		$type = $row['type'];
		$identifier = $row['identifier'];
		$date = $row['date'];
		$language = $row['language'];
		$description = $row['description'];

		//header("location: eBook_MetaData.php");
	}
	//header("location: eBook_MetaData.php");
}

if(isset($_POST['amend']))
{
	$id = $_POST['id'];
	$creator = $_POST['creator'];
	$title = $_POST['title'];
	$type = $_POST['type'];
	$identifier = $_POST['identifier'];
	$date = $_POST['date'];
	$language = $_POST['language'];
	$description = $_POST['description'];

	$mysqli->query("UPDATE eBook_MetaData SET creator='$creator', title='$title', type='$type', identifier='$identifier', date='$date', language='$language', description='$description' WHERE id=$id") or die($mysqli->error);

	$_SESSION['message'] = "Record has been updated!";
	$_SESSION['msg_type'] = "warning";
	header("location: eBook_MetaData.php");
}
?>
<style>
.table
{
	border-collapse: collapse;
  border: 1px solid black;
  padding: 3px;
  text-align: left;
  background-color: white;
}
th {
  border: 1px solid black;
  border-collapse: collapse;
  background-color: grey;
  color: white;
  padding: 5px;
  text-align: center;
}
td {
  border-collapse: collapse;
  border: 1px solid black;
  padding: 10px;
  text-align: left;
  background-color: white;
}
.su{
	background-color: #0ea037;
  border: 2px solid black;
  color: white;
  padding: 8px 8px;
  text-align: center;
  text-decoration: none;
  font-size: 12px;
  margin-left: 2px;
  margin-right: 2px;
  margin-top: 2px;
  width: 100px;
  border-radius: 10px
}
.su:hover {
  background-color: #30f249;
  color: black;
}
.edt{
	background-color: blue;
  border: 2px solid black;
  color: white;
  padding: 6px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 12px;
  margin-left: 2px;
  margin-right: 2px;
  margin-top: 2px;
  width: 100px;
  border-radius: 10px
}
.edt:hover {
  background-color: #66ccff;
  color: black;
}
.dlt{
	background-color: red;
  border: 2px solid black;
  color: white;
  padding: 6px 20px;
  text-align: center;
  text-decoration: none;
  font-size: 12px;
  margin-left: 2px;
  margin-right: 2px;
  margin-top: 2px;
  width: 100px;
  border-radius: 10px
}
.dlt:hover {
  background-color: #ff9999;
  color: black;
}
.form-control{
	margin-right: 99%;
}
.alert{
	width:100%;
	background-color: #ffff99;
	padding: 20px 20px;
}

</style>
