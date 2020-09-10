
  
    <nav class="navbar navbar-expand-sm fixed-top navbar-light bg-default">
  <a class="navbar-brand" href="home.php">Catflix</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Movies
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="bestratedmovies.php">Best Rated Movies</a>
                <a class="dropdown-item" href="allmovies.php">All</a>
                <a class="dropdown-item" href="action.php">Action</a>
                <a class="dropdown-item" href="comedy.php">Comedy</a>
                <a class="dropdown-item" href="thriller.php">Thriller</a>
                
            </li>
            </ul>
    <!--search bar-->
        <form action="searchbar.php" method="GET" target="_self" class="form-inline my-2 my-lg-0">

        <!-- Actual search box -->
            <div class="form-group has-search">
                <span type="submit" name="submit" class="fa fa-search form-control-feedback"></span>
                <input type="text" name="search" class="form-control" placeholder="Search kitty kitty...">
            </div>
        </form>
        <!--User profile link-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Welcome, <?php echo $_SESSION['userN'] ;?>
                </a>
                <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                <form action="db/logout_db.php" method="post">
                    <button type="submit" class="dropdown-item" name="logout"><i class="fa fa-power-off"></i>Logout </button>
                </form>
                </div>
            </li>
    </nav>  


<!--/.Navbar/Header -->
