<?php

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/paw.png" type="image/png">
    <title>Best rated movies</title>
    <script src= "https://code.jquery.com/jquery-3.5.1.js"></script> 
    
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/d9b3bd9a2e.js" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
    #output{
        padding-left: 60px;
        margin: 0 0 10px 25px; 
        display: inline-block;
    }

     p, h2, h3, h6{
       position: relative;
       top: 100px;
       padding-left: 200px;
       padding-right: 200px;
       
    }

    body {
        background-color: #000000;
        color: #FFFFFF;
    }
    h2{
        padding-bottom: 1em;
    }
    </style>
</head>
<body>
    <header>
        <!--Code to include navbar-->
        <?php include("navbar/navbar.php"); ?>
        <style><?php include("navbar/navbar.css"); ?></style>
        <!--END OF Code to include navbar-->
    <header>
<h2>Best rated movies (from TMDB)</h2>
  
    <div id="output">

    </div>

     <!--Code to include footer-->
     <?php include("footer/footer.php"); ?>
    <style><?php include("footer/footer.css"); ?></style>
    <!--END OF Code to include footer-->
   
    <script async="false" src="/assets/js/movieapi.js"></script>
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
        
</body>
</html>