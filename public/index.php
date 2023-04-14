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
</head>
<style>
    body{
        background-color: #1a2037;
    }
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
        grid-column-gap: 40px;
        grid-row-gap: 5px;
    }

    section .gridcont .card{
        outline: 1px solid white;
        z-index: 2;
        border-radius: 2px;
    }

    section .gridcont img{
        width: 100%;
        transition: all .5s ease-in-out;
        aspect-ratio: 1;
    }
    section .gridcont img:hover{
        transform: scale(1.1);
    }

    .card-text{
        color: aliceblue;
        font-size: 20px;
        font-weight: 100;
    }

    footer{
        height: 100px;
        display: flex;
        align-items: center;
        flex-direction: column;
        width: 100%;
        background-color: #000;
        color: #fff;
        font-family: sans-serif;
        font-weight: 200;
    }
    footer ul{
        list-style: none;
    }
    footer ul li{
        font-size: 15px;
    }
    footer ul li img{
        width: 30px;
        height: 30px;
        border-radius: 50%;
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
        <!-- <div class="form">
            <form action="" method="post">
                <p class="card-title">FIND FACTS ABOUT YOUR FAVOURITE ANIME</p>
                <input type="text" name="anime" value="<?php // echo (isset($_POST["sub"])) ? $anime : "" ?>">
                <button type="submit" name="sub">FETCH</button>
            </form> -->
            <!-- <p class="card-text">
                <?php // echo (isset($_POST["sub"])) ? fetchfact($anime) : "FACTS WILL DISPLAY HERE"; ?></p> -->
                <p class="card-text">
                    <?php uselessfact()?>
                </p>
        </div>
    </section>
    <footer>
        <ul>
            <li>cavecodes</li>
            <li>
                <a href="https://github.com/EMMANUEL-SUNMBOLA"><img src="git.png" alt="..."></a>
                <a href="https://twitter.com/SunmbolaAdedayo"><img src="twitter.jpeg" alt="..."></a>
                <a href=""></a>
            </li>
        </ul>
    </footer>
   </body>
</html>