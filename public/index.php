<?php

include("../private/classes.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="gridcont">
        <img src="" alt="">
        <?php 
            for($i = 0; $i < 5; $i++){
                echo '<img src="' . fetchimg() . '" alt="anime">';
            } 
        ?>
    </div>
</body>
</html>