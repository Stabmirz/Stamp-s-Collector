<?php
include('style.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <title>Stamp's Collector</title>

</head>

<body>

    <header>
        <div style="margin:0px 20px 0px 20px;">
            <a href="">
                <div class="entypo-paper-plane logo"></div>
            </a>
            <a style="text-decoration:none;color:white;margin-top:25px;float:right" href="login.php">Log In</a>
            <ul>
                <a href="index.php">
                    <li>Home</li>
                </a>
                <a href="album.php">
                    <li>Album</li>
                </a>
                <a href="about.php">
                    <li>About</li>
                </a>
                <div class="dropdown">
                    <a href="#">
                        <li>Country</li>
                    </a>
                    <div class="dropdown-content">
                        <a href="germany.php">Germany</a>
                        <a href="bangladesh.php">Bangladesh</a>
                        <a href="switzerland.php">Switzerland</a>
                        <a href="usa.php">United States</a>
                        <a href="england.php">England</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="#">
                     <li>Sort By</li>   
                    </a>
                    
                    <div class="dropdown-content">
                        <a href="year.php">Year</a>
                        <a href="count.php">Count</a>
                        <a href="nglued.php">Unglued Stamps</a>
                    </div>
                </div>
            </ul> 
        </div>           
    </header>