<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="" style="text-align:center"><img src="<?= base_url() ?>/images/aset/logo3.png" alt="LOGO FORMATIK" height="50"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div style="padding:0 25%;"></div>
        <form class="form-inline my-2 my-lg-0" method="get" action="search.php">
            <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            <?php if (!isset($_SESSION['username'])) { ?>
                <a href="login.php" style="color:white">LOGIN</a>
                <p style="color:white; margin:10px;">|</p>
                <a href="register.php" style="color:white">REGISTER</a> &nbsp;
            <?php } else { ?>
                <!-- logged in user information -->
                <a href="index.php?logout='1'" style="color: red; padding: 10px;padding-right:150px; font-weight:bold; font-size:20px;">logout</a>
            <?php } ?>
        </form>
        <form class="form-inline my-2 my-lg-0"> </form>
    </div>
</nav>

<div class="navbar-light bg-light">
    <div class="container">
        <div class="row" style="font-size:20px;">
            <div class="col" style="">
                <?php
                $sql_kategori = mysqli_query($con, "SELECT * FROM kategori") or die(mysqli_error($con, ""));
                if (mysqli_num_rows($sql_kategori) > 0) {
                    while ($kategori = mysqli_fetch_array($sql_kategori)) { ?>
                        <a href=""><?= strtoupper($kategori['kategori']) ?></a>
                <?php };
                } ?>
            </div>
            <div class="col-3" style="">
                <a href=""><i class="fas fa-bell"></i></a>
                <a href=""><i class="fas fa-comment-dots"></i></a>
                <a href=""><i class="fas fa-cog"></i></a>
                <a href=""><strong><?php
                                    if (isset($_SESSION['username'])) {
                                        echo $_SESSION['username'];
                                    } else {
                                        echo "guest";
                                    }
                                    ?></strong></a>
            </div>
        </div>
    </div>
</div>