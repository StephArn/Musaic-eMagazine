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

$allowed = [null, 'http', 'https']; // null = not specified

$scheme = parse_url($website, PHP_URL_SCHEME);
if ($scheme === false) {
    // seriously malformed URL, what to do?
}
else if (!in_array($scheme, $allowed, true)) {
    // protocol not allowed, don't display the link!
}
else {
    // everything OK
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
<style>
.plst{
    margin-left:auto;
}
</style>	
	

</head>
<body>
<header>
	<?php
        include('includes/header-logged.php');
    ?>
	</header>
    <iframe class ="plst" width="628" height="330" src="https://www.youtube.com/embed/videoseries?list=PLDisKgcnAC4RosDaKczvXfalXuCwZTp6_" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe class ="plst" width="629" height="330" src="https://www.youtube.com/embed/videoseries?list=PLQlc99hV-nkGWDaG-gJxwOfqp8jxyHaaQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <form action="/action_page.php">
    <label for="homepage">Add your playlist:</label>
    <input type="url" id="homepage" name="url"><br><br>
    <input type="submit">
    </form>
	<footer>
<?php
        include('includes/footer.php');
    ?>
	</footer>
</body>

<html>
