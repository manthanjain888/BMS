<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Library Management System</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        
</head>
<body style="background-color: darkseagreen;">
<h1 style="text-align: center;">Library Management System</h1>



<?php
include("databaseconnection.php");

$number=$_POST["number"];
$title=$_POST["title"];
$author=$_POST["author"];
$edition=$_POST["edition"];
$publication=$_POST["publication"];

$query = "insert into bookdetail(number,title,author,edition,publication) values('$number','$title','$author','$edition','$publication')"; 
$result = mysqli_query($db,$query);

?>

<h3>Book information is inserted successfully</h3>

<a href="searchpage.php"> To search for the Book information click here </a>

</body>
</html>
