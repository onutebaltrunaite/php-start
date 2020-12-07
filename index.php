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
    <title> PHP lydės <?php print date('Y-m-d', strtotime('+' . rand(0, 10) . 'year')) . '!'; ?></title>
</head>
<body>


    <!-- <h1 style='font-size: <?php print rand(0, 30);?>px;'>As keiciu savo dydi</h1>
    <p style='color: rgb(<?php print rand(0, 255) . ',' .rand(0, 255) . ',' .rand(0, 255); ?>)'>As keiciu spalvas</p> -->


    
    <img style='width: 200px; height: 200px' src="images/<?php print rand(1, 6)?>.png" alt="">

    
</body>
</html>

