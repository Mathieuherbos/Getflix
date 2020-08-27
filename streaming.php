<!DOCTYPE html>
<html>
    <head>
        <title>streaming page</title>
        <link rel="stylesheet" href="streaming.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            <?php
                $bdd = new PDO ('mysql:host=localhost;port=3308;dbname=getflixtest','root','root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                $reponse = $bdd->query ('SELECT * FROM youtubeinfos');
                while ($datas = $reponse -> fetch())
                {
                    echo 
                        '<iframe class="responsive-iframe" src="' . $datas['link'] . '">
                        </iframe>';
                }
            ?>               
        </div>
        <div class="container-fluid" id="description">
            <?php
                $reponse = $bdd->query ('SELECT * FROM youtubeinfos');
                while ($datas = $reponse -> fetch())
                        {
                            echo 
                                '<h2>' . $datas['title'] . '</h2>
                                <p>' . $datas['description'] . '</p>
                                <div id="type"><h5>Type : ' . $datas['types'] . ' </h5></div>
                                <div id="duration"><h5>Duration : ' . $datas['duration'] . ' min </h5></div>
                                <div id="release"><h5>Release date : ' . $datas['releaseDate'] . '</h5></div>
                                <div id="rating"><h5>Rating : ' . $datas['rating'] . '</h5></div>';
                        }
            ?>
        </div>
    </body>
</html>