<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('Europe/Vilnius');
?>
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "1";
header("Refresh: $sec; url=$page");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title> PHP lydės <?php print date('Y-m-d', strtotime('+' . rand(0, 10) . 'year')) . '!'; ?></title>
<style>
img {
    margin: 200px;
}
</style>


</head>
<body>

    <img style='width: <?php print date('s'); ?>0px; height: <?php print date('s'); ?>0px;' src="images/bomb" alt="">
    <div>
        <?php print date('s');?>
    </div>



  
</body>
</html>

