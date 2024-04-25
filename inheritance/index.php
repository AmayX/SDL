<?php
require_once 'HomePage.php';

// Create an instance of HomePage
$homePage = new HomePage("Welcome to My Website", "This is the content of the home page.");

// Render the home page
$homePage->render();
?>
