<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('Europe/Vilnius');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php print 'Aš, ' . date("l") . ' ir PHP' ?> </title>
</head>
<body>
    <h1>Juozukas - HTML <?php print 'ir PHP';?> asas jau nuo <?php print date("Y") . ' metų' ?> </h1>
    <p>Viskas prasidėjo <?php print date("F") . ' mėnesio, ' . date("j") . ' dieną!'?></p>
    
</body>
</html>