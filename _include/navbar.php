<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?= base_url() ?>"><img src="<?= base_url() ?>/images/aset/logo3.png" alt="LOGO FORMATIK" height="50"></a>
    <?php
    $sql_kategori = mysqli_query($con, "SELECT * FROM kategori") or die(mysqli_error($con, ""));
    if (mysqli_num_rows($sql_kategori) > 0) {
        while ($kategori = mysqli_fetch_array($sql_kategori)) { ?>
            <a href="" style="font-size: 16px; padding:8px; color:white;">#<?= strtoupper($kategori['kategori']) ?></a>
    <?php };
    } ?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div style="padding: 4%"></div>
        <form class="form-inline my-2 my-lg-0" method="get" action="search.php">
            <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>

            <?php if (!isset($_SESSION['username'])) { ?>
                <a href="login.php" style="color:white; margin-left: 10px;">LOGIN</a>
                <p style="color:white; margin:10px;">|</p>
                <a href="register.php" style="color:white">REGISTER</a> &nbsp;
            <?php } else { ?>
                <a href="setting.php" style="color:white; padding:5%;"><strong><?php
                                                                                    if (isset($_SESSION['username'])) {
                                                                                        echo $_SESSION['username'];
                                                                                    } else {
                                                                                        echo "guest";
                                                                                    }
                                                                                    ?></strong></a>
                <a href="index.php?logout='1'" style="color: red; padding:1%; font-weight:bold;">logout</a>
            <?php } ?>
        </form>


        <form class="form-inline my-2 my-lg-0"> </form>
    </div>
</nav>

<div class="navbar-light bg-light" style="width: 100%; padding:0.5px"></div>