<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        echo 'User IP - '.$_SERVER['REMOTE_ADDR']."<br>"; // prints loopback if ran on server
        echo 'Server IP - '.$_SERVER['SERVER_ADDR']."<br>"; // prints loopback if ran on server
        $localIP = getHostByName(getHostName());
        echo $localIP;

    ?>
</body>
</html>