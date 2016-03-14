<?php

if (isset($_COOKIE['votingstep'])) {
	setcookie("votingstep","1",time()+1);
}
?>
<html>
    <head>
        <title>Cookie Reset</title>
    </head>
	
<style type="text/css">
    body {
        font-family: tahoma;
        font-size: 10pt;
        color: 0A2FA1;
        }
</style>
<body>
<br>
<div class="text">Your Cookie Has Been Deleted So You Can Vote Again!</div>
<div class="text"><a href="index.php">back</a></div>
</body></html>
