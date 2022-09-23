<!DOCTYPE html>
<html>

<?php $refreshTime = "32";?>

<head>
    <meta charset="UTF-8"/>    
    <meta http-equiv="refresh" content="<?php echo $refreshTime?>;URL='<?php echo $_SERVER['PHP_SELF']?>'">
    <title>Honigwabe Superchats</title>
</head>

<?php
    $userName       = "Default-Name";
    $userMessage    = "Default-Message";

?>

<body>

    <h1><?php echo $userName ?></h1>
    <p><?php echo $userMessage ?></p>

</body>

</html> 