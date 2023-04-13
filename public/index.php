<?php

include("../private/classes.php");

if(isset($_POST["sub"]) && ($_SERVER["REQUEST_METHOD"] == "POST")){
    $anime = $_POST["anime"];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime wall</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    section{
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        width: 100%;
    }
   section .gridcont{
        width: 80%;
        display: grid;
        grid-template-columns: repeat(4,1fr);
    }

    section .gridcont img:hover{
        transform: scale(1.2);
        transition: all .5s ease-in-out;
    }
</style>
<body>
    <section>
        <div class="gridcont">
            <img src="" alt="">
            <?php
            for ($i = 0; $i < 50; $i++) {
                echo '<div class="card" style="width: 18rem;">';
                echo '<img src="' . fetchimg() . '" alt="anime" class="card-img-top">';
                echo '</div>';
            }
            ?>
        </div>
        <div class="form">
            <form action="" method="post">
                <p class="card-title">FIND FACTS ABOUT YOUR FAVOURITE ANIME</p>
                <input type="text" name="anime" value="<?= (isset($_POST["sub"])) ? $anime : "" ?>">
                <button type="submit" name="sub">FETCH</button>
            </form>
            <p class="card-text">
                <?= (isset($_POST["sub"])) ? fetchfact($anime) : "FACTS WILL DISPLAY HERE"; ?></p>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>