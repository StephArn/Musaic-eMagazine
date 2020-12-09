<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
} 
if($_SESSION['agent'] != $_SERVER['HTTP_USER_AGENT']) {
    die('Session MAY have been hijacked');
}
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
<meta charset="UTF-8">
<meta name="description" content="proiect PHP">
<meta name="keywords" content="PHP, Music Magazine, Music Review, Music Interview, Music Tutorials">
<meta name="author" content="Stefana Arina Tabusca">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<link href='https://fonts.googleapis.com/css?family=Cherry Swash' rel='stylesheet'><title> Musaic Magazine </title>
    <link href='https://fonts.googleapis.com/css?family=Emblema One' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="home-logged.css">

</head>
<body>
	


<body>
<header>
	<?php
        include('includes/header-logged.php');
    ?>
	</header>
	<div class="profile">
	<a href="reset-password.php"><button>Reset your password</button></a>
    <a href="logout.php"><button>Logout</button></a>
	<a  href="acc-details.php"><button>Account Details</button></a>
    </div>

<?php
        include('includes/footer.php');
    ?>
	</footer>
</body>
<html>
