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
                            $reponse = $bdd->query ('SELECT * FROM youtube');
                            while ($datas = $reponse -> fetch())
                            {
                                echo 
                                    '<iframe class="responsive-iframe" src="' . $datas['Link'] . '">
                                    </iframe>';
                            }
                        ?>               
                    </div>
    </body>
</html>