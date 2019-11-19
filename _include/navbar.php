<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#" style="text-align:center">LOGO DISINI<br> FORMATIK</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            <a href="login.php" style="color:white">LOGIN</a>
            <p style="color:white; margin:10px;">|</p>
            <a href="register.php" style="color:white">REGISTER</a> &nbsp;
            <!-- logged in user information -->
            <?php  if (isset($_SESSION['username'])) : ?>
                <a href="index1.php?logout='1'" style="color: red;">logout</a>
            <?php endif ?>
        </form>
        <form class="form-inline my-2 my-lg-0"> </form>
    </div>
</nav>

<div class="navbar-light bg-light">
    <div class="container">
        <div class="row" style="font-size:20px;">
            <div class="col" style="">
                <a href="">SKRIPSI</a>
                <a href="">KKN</a>
                <a href="">PKL</a>
                <a href="">SHITPOST</a>
                <a href="">TUTORIAL</a>
                <a href="">KARYA</a>
            </div>
            <div class="col-3" style="">
                <a href=""><i class="fas fa-bell"></i></a>
                <a href=""><i class="fas fa-comment-dots"></i></a>
                <a href=""><i class="fas fa-cog"></i></a>
                <a href=""><strong><?php echo $_SESSION['username']; ?></strong></a>
            </div>
        </div>
    </div>
</div>