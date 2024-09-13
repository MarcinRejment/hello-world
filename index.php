<!DOCTYPE html>
<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	require_once('conn.php');
?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
    <!--<link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">-->
	<script src="https://code.jquery.com/jquery-3.7.1.js"
			  integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
			  crossorigin="anonymous"></script>
  </head>
  <body>
    <main>
        <h1>Welcome to My Website</h1> 
		<button id="btn1" type="button">zwroc prosty ciag</button>	
		<button id="btn2" type="button">zwroc tablice</button>	
		<button id="btn3" type="button">zwroc rekord z bazy</button>		
    </main>
    <script src="index.js"></script>
  </body>
</html>
