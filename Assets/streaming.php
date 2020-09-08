<!DOCTYPE html>
<html>
    <head>
        <title>streaming page</title>
        <link rel="stylesheet" href="css/streaming.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <?php
                $bdd = new PDO ('mysql:host=localhost;port=3306;dbname=getflixtest','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                if(isset($_GET['id'])) {
                    $getid = intval($_GET['id']);
                    $reponse = $bdd->prepare('SELECT * FROM youtubeinfos WHERE id = ?');
                    $reponse->execute(array($getid));
                    $datas = $reponse->fetch();
            ?>
            <iframe class="responsive-iframe" src="<?php echo ($datas['link']); ?>">
            </iframe>              
        </div>

        <div class="container-fluid" id="description">    
                    <h2><?php echo ($datas['title']); ?></h2>
                    <p><?php echo ($datas['description']); ?></p>
                    <div id="type"><h5><?php echo ($datas['types']); ?></h5></div>
                    <div id="duration"><h5><?php echo ($datas['duration']); ?></h5></div>
                    <div id="release"><h5>Release date : <?php echo ($datas['releaseDate']); ?></h5></div>
                    <div id="rating"><h5>Rating : <?php echo ($datas['rating']); ?></h5></div>
        </div>
        <?php 
            }
        ?>
    </body>
</html>