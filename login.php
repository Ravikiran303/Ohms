<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ohms";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$name=strtoupper($_POST['id']);
	$pass=$_POST['pass'];
	$sql = "SELECT * FROM reg where id='$name'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	if($name=="ADMIN" && $pass=="iiitn")
	{
		$_SESSION["admin"] ="iiitn";
		header("Location:admin/admin.php");
	}
	if($row["id"]==$name && $row["password"]==$pass)
	{
		$_SESSION["id"] = $row["id"];
		header("Location: home.php");
	}
	else
	{
		?><script>alert("Invalid credentials")</script><?php
	}
}
mysqli_close($conn);
?>