<?php
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
require_once "config.php";

$id = $_SESSION["user_id"];

$r_query = "SELECT role FROM user WHERE user_id = ".$id;  
$role = mysqli_query($link, $r_query);
$row = $role->fetch_assoc();
$role= $row['role']; 
if ($role == "basic") 
$r ="home-logged_b.php";
elseif ($role == "amateur")
$r ="home-logged_a.php";
elseif($role == "pro")
$r ="home-logged_p.php";
elseif ($role == "mod")
$r ="home-logged_m.php";             
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<style>
	button {font-family: "Montserrat", sans-serif}
	</style>
    <link rel="stylesheet" href="/includes/header.css">
    <title>PHP Test 2</title>
</head>
<body>
	<div class="overlay">
		<h1>Musaic</h1>
		<br>
		<nav>

                <a  href="<?php echo $r ?>"><button  class = "header_link" >Home </button></a>
				<a  href="profile.php"> <button  class = "header_link" >Profile </button></a>
				<a href="news.php"><button  class = "header_link" >News </button></a>
				<a href="interviews.php"><button  class = "header_link" >Interviews </button></a>
				<a href="reviews.php"><button  class = "header_link" >Reviews </button></a>
				<a href=" <?php
                            if ($_SESSION["role"] == "mod")
                                echo "playlist_m.php";
                            else echo "playlists.php";
                             ?> 
                             "><button  class = "header_link" >Playlists </button></a>
				<a href="gallery.php"><button  class = "header_link" >Gallery </button></a>
		</nav>
		</div>
</body>
</html>
