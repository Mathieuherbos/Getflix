<?php

// not sure if required
include_once "db/db.php";
include_once "db/login_db.php";

// NEEDS TO BE ADDED TO EVERY PAGE OTHER THAN INDEX, LOGIN, SIGNUP
session_start();

?>

<!-- for header -->
<?php 
if(!isset($_SESSION['userN'])){
    // once session expires, go back to landing page
    header("location: ../index.html");
    // we can add other options here
}

?>



<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="images/paw.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Roboto:wght@300;400;900&display=swap" rel="stylesheet">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--Owl.Carousel-->
    <link rel="stylesheet" href="owl/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="owl/dist/assets/owl.theme.default.css">

    <!-- our css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/d9b3bd9a2e.js" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <title>Welcome to Catflix</title>
</head>

<body>
    <style>
    body {
        background-color: #000000;
        
    }

    h1, h2, h3, h4, h5, p {
            color: #FFFFFF;
        }
    
    h1 {
        font-family: "Archivo Black", sans-serif;
    }

    h2, h3, h4, h5, p {
        font-family: "Roboto", sans-serif;
    }

    .lead {
        font-size: 0.7em;
    }
    </style>
    <header>
        <!--Code to include navbar-->
        <?php include("navbar/navbar.php"); ?>
        <style><?php include("navbar/navbar.css"); ?></style>
        <!--END OF Code to include navbar-->
    <header>

    <div class="headerMain">
        <div class="jumbotron jumbotron-fluid">

            <div class="container">
                <div class="heading">
                    <h1>Catflix</h1>
                    <p class="lead" style="font-size: 1.6em; text-align:center; text-shadow: 3px 4px 7px rgb(31, 29, 29);">Watch, laugh, meow <i class="fas fa-paw"></i></p>
                </div>

                <form action="searchbar.php" method="GET" target="_self">
                    <div class="form-group">
                   
                        <label for="input-group" style="font-size:1.1em;font-style:normal;"><p>Search movies</p></label>
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="e.g. Shrek">
                            <div class="input-group-append">
                                <button class="btn btn-danger" name="submit" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                         
                    </div>
                </form>
               
            </div>
        </div>
    </div>
 
   

    <?php if(isset($_SESSION['userN'])){
    echo "<h2><b>Top picks for </b><em>" . $_SESSION['userN'] . "</em></h2>";
    }
    ?>
    


    <!-- random picks -->
<?php

//  random videos
$bdd = new PDO ('mysql:host=sql100.epizy.com;port=3306;dbname=epiz_26591763_catflix','epiz_26591763','nNU2fD6vzKC', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
?>




<!--ACTION-->
<h3>Action movies</h3>
<div class="owl-carousel owl-theme">         
    <?php
    $reponse = $bdd->query("SELECT * FROM youtubeinfos WHERE types LIKE 'Action' ORDER BY RAND() LIMIT 10");
    ?>
    
    <?php
    while ($datas = $reponse->fetch())
    {
    ?>
    
        <div class="item">
        
            <a class="didjou" href='streaming.php?id=<?php echo ($datas['id']);?>'>
            <img class="img-fluid img_gallery" style="height:13.4em;"
                src="
                    <?php
                            //images from db
                            echo ($datas['images']); 
                    ?>" 
                alt="
                    <?php
                            //alt from db
                            echo ($datas['alt']); 
                    ?>
            "/></a>
        </div>
    
    <?php
    } 
    ?>
</div>

<!--COMEDY-->
<h3>Comedy movies</h3>
<div class="owl-carousel owl-theme">         
    <?php
    $reponse = $bdd->query("SELECT * FROM youtubeinfos WHERE types LIKE 'Comedy' ORDER BY RAND() LIMIT 10");
    ?>
    
    <?php
    while ($datas = $reponse->fetch())
    {
    ?>
    
        <div class="item">
            <a method='get' id='getLink' href='streaming.php?id=<?php
                        echo ($datas['id']);
                ?>'>
            <img class="img-fluid img_gallery" style="height:13.4em;"
                src="
                    <?php
                            //images from db
                            echo ($datas['images']); 
                    ?>
                " alt="
                    <?php
                            //alt from db
                            echo ($datas['alt']); 
                    ?>
            "/></a>
        </div>
    
    <?php
    } 
    ?>
</div>

<!--THRILLER-->
<h3>Thriller movies</h3>
<div class="owl-carousel owl-theme">         
    <?php
    $reponse = $bdd->query("SELECT * FROM youtubeinfos WHERE types LIKE 'Thriller' ORDER BY RAND() LIMIT 10");
    ?>
    
    <?php
    while ($datas = $reponse->fetch())
    {
    ?>
    
        <div class="item">
            <a method='get' id='getLink' href='streaming.php?id=
                <?php //add id to get the right streaming.php 
                        echo ($datas['id']);
                ?>'>
            <img class="img-fluid img_gallery" style="height:13.4em;""
                src="
                    <?php
                            //images from db
                            echo ($datas['images']); 
                    ?>"
                 alt="
                    <?php
                            //alt from db
                            echo ($datas['alt']); 
                    ?>
            "/></a>
        </div>
    
    <?php
    } 
    ?>
</div>



    </div>

     <!--Code to include footer-->
     <?php include("footer/footer.php"); ?>
    <style><?php include("footer/footer.css"); ?></style>
    <!--END OF Code to include footer-->

    <!-- bootstrap links -->
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>

    <!-- Owl.carousel -->
    <script src="owl/docs/assets/vendors/jquery.min.js"></script>
    <script src="owl/dist/owl.carousel.min.js"></script>
    <!-- Carousel settings -->
    <script src="js/owl.js"></script>

</body>

</html>