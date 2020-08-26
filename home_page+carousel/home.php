<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- our css -->
    <link rel="stylesheet" href="style.css">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/d9b3bd9a2e.js" crossorigin="anonymous"></script>



    <title>Welcome to Catflix</title>
</head>

<body>
    <!-- link to php header -->

    <div class="headerMain">
        <div class="jumbotron jumbotron-fluid">

            <div class="container">
                <div class="heading">
                    <h1>Catflix</h1>
                    <p class="lead">Watch, laugh, meow <i class="fas fa-paw"></i></p>
                </div>

                <form>
                    <div class="form-group">

                        <label for="input-group">Search movies</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="e.g. Shrek">
                            <div class="input-group-append">
                                <button class="btn btn-danger" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <h2>Our top picks for you ~</h2>


    <!--Comedy-->
    <div class="row text-center py-3">
        <div class="col">
            <!--Carousel-->
            <div class="panel">
                <h3 class="text-center">Comedy</h3>
                <div id="carouselControls1" class="carousel slide" data-interval="false">
                    <div class="carousel-inner text-center">
                        <div class="carousel-item active text-center">
                            <a href="pic.jpg">
                                <img src="pic.jpg" class="img-fluid img_gallery" alt="Shrek" />
                            </a>
                            <a href="pic2.jpg">
                                <img src="pic2.jpg" class="img-fluid img_gallery" alt="Shrek 2" />
                            </a>
                            <a href="pic3.jpg">
                                <img src="pic3.jpg" class="img-fluid img_gallery" alt="Les Intouchables" />
                            </a>
                            <a href="pic3.jpg">
                                <img src="pic3.jpg" class="img-fluid img_gallery" alt="Funny movie" />
                            </a>
                            <a href="pic.jpg">
                                <img src="pic.jpg" class="img-fluid img_gallery" alt="Funny movie" />
                            </a>
                        </div>

                        <div class="carousel-item">
                            <a href="pic3.jpg">
                                <img src="pic3.jpg" class="img-fluid img_gallery" alt="Shrek" />
                            </a>
                            <a href="pic2.jpg">
                                <img src="pic2.jpg" class="img-fluid img_gallery" alt="Shrek 2" />
                            </a>
                            <a href="pic.jpg">
                                <img src="pic.jpg" class="img-fluid img_gallery" alt="Les Intouchables" />
                            </a>
                            <a href="pic2.jpg">
                                <img src="pic2.jpg" class="img-fluid img_gallery" alt="Funny movie" />
                            </a>
                            <a href="pic2.jpg">
                                <img src="pic2.jpg" class="img-fluid img_gallery" alt="Funny movie" />
                            </a>
                        </div>

                        <!-- <div class="carousel-item">
                                <a href="images/pictures/gallery/pizza4.jpg">
                                    <img src="images/pictures/gallery/pizza4s.jpg" class="img-fluid img_gallery"
                                        alt="pizza with its ingredients around it" />
                                </a>
                                <a href="images/pictures/gallery/pizza5.jpg">
                                    <img src="images/pictures/gallery/pizza5s.jpg" class="img-fluid img_gallery"
                                        alt="pizza2 with its ingredients around it" />
                                </a>
                                <a href="images/pictures/gallery/pizza6.jpg">
                                    <img src="images/pictures/gallery/pizza6s.jpg" class="img-fluid img_gallery"
                                        alt="cut pizza" />
                                </a>
                            </div> -->

                    </div>
                    <a class="carousel-control-prev" href="#carouselControls1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselControls1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!--Action-->
    <div class="row text-center py-3">
        <div class="col">
            <!--Carousel-->
            <div class="panel">
                <h3 class="text-center">Action</h3>
                <div id="carouselControls2" class="carousel slide" data-interval="false">
                    <div class="carousel-inner text-center">
                        <div class="carousel-item active text-center">
                            <a href="pic.jpg">
                                <img src="pic.jpg" class="img-fluid img_gallery" alt="Shrek" />
                            </a>
                            <a href="pic2.jpg">
                                <img src="pic2.jpg" class="img-fluid img_gallery" alt="Shrek 2" />
                            </a>
                            <a href="pic3.jpg">
                                <img src="pic3.jpg" class="img-fluid img_gallery" alt="Les Intouchables" />
                            </a>
                            <a href="pic3.jpg">
                                <img src="pic3.jpg" class="img-fluid img_gallery" alt="Funny movie" />
                            </a>
                            <a href="pic.jpg">
                                <img src="pic.jpg" class="img-fluid img_gallery" alt="Funny movie" />
                            </a>
                        </div>

                        <div class="carousel-item">
                            <a href="pic3.jpg">
                                <img src="pic3.jpg" class="img-fluid img_gallery" alt="Shrek" />
                            </a>
                            <a href="pic2.jpg">
                                <img src="pic2.jpg" class="img-fluid img_gallery" alt="Shrek 2" />
                            </a>
                            <a href="pic.jpg">
                                <img src="pic.jpg" class="img-fluid img_gallery" alt="Les Intouchables" />
                            </a>
                            <a href="pic2.jpg">
                                <img src="pic2.jpg" class="img-fluid img_gallery" alt="Funny movie" />
                            </a>
                            <a href="pic2.jpg">
                                <img src="pic2.jpg" class="img-fluid img_gallery" alt="Funny movie" />
                            </a>
                        </div>

                        <!-- <div class="carousel-item">
                                <a href="images/pictures/gallery/pizza4.jpg">
                                    <img src="images/pictures/gallery/pizza4s.jpg" class="img-fluid img_gallery"
                                        alt="pizza with its ingredients around it" />
                                </a>
                                <a href="images/pictures/gallery/pizza5.jpg">
                                    <img src="images/pictures/gallery/pizza5s.jpg" class="img-fluid img_gallery"
                                        alt="pizza2 with its ingredients around it" />
                                </a>
                                <a href="images/pictures/gallery/pizza6.jpg">
                                    <img src="images/pictures/gallery/pizza6s.jpg" class="img-fluid img_gallery"
                                        alt="cut pizza" />
                                </a>
                            </div> -->

                    </div>
                    <a class="carousel-control-prev" href="#carouselControls2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselControls2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>



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