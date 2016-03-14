<?php 

//settings for The Amazing Little Poll:


// IMPORTANT: change this one into the name of your homepage file, 
//           for example, index.php
$callingfile="index.php"; 

// File in which voting scores are kept
$filename = "lppiclist.txt"; 

// Change this password so no one else can access the lp_admin.php via the web
$pwd="mehregan"; 

// Change the number of columns here:
$ncols=5;

//Time between votes in seconds
$time_between_votes = 600; 

// Width of graph in pixels
$graph_width = 100; 

// Height of graph in pixels
$graph_height = 12; 

// Messages (Can easily be used as 'dynamic headers' for the poll)
$message1="لطفا رای دهید";  
$message2="ممنون که رای دادید";
$message3="نتیجه";

// Text on vote button
$vote_str="رای می‌دهم"; 

// Use CSS code to style the 'vote' button
$buttonstyle="";
?>
