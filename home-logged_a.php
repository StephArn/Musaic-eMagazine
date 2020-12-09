<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === false){
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
	<link rel="stylesheet" type="text/css" href="home.css">
	
	

</head>
<body>
<header>
	<?php
        include('includes/header-logged.php');
    ?>
	</header>
	<p> You are <?php echo $_SESSION["role"]; ?> user! </p>
	<footer>
<?php
        include('includes/footer.php');
    ?>
	</footer>
</body>

<html>