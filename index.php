<?php
session_start();
// Check if the user is logged in, else send him to login.php
if(!isset($_SESSION['loggedin'])){ //if login in session is not set
    header("Location: login.php");
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/swipe.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="css/profileCards.css">
    <title>Club Vibes</title>
    <head>
        <script
                src="https://code.jquery.com/jquery-3.3.1.js"
                integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
                crossorigin="anonymous">
        </script>
        <script>
            $(function(){
                $("#header").load("./included/header.html");
                $("#footer").load("./included/footer.html");
            });
        </script>
        <div id="header"></div>
</head>

<body>
<div id="board"> <h1>Swipe Left to like!</h1></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
<script src="./js/swipe.js"></script>
</body>
<div id="footer"></div>
</html>