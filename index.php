<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitor</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <h1 class="text">Server Information</h1>
    <h2 class="text">Current ip</h2>
    <p class="text">
    <?php 
        $current_ip = shell_exec('./ip.sh');
        echo $current_ip;

    ?>
    </p>
    <h2 class="text">Current temp</h2>
    <p class="text">
    <?php
    $current_temp = shell_exec('./sensors.sh');
    echo $current_temp;

    ?>
    </p>
    
</body>
</html>