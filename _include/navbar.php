<?php
$count = 0;
$sql = "SELECT * FROM comment WHERE status=0";
$result = mysqli_query($con, $sql);

$count = mysqli_num_rows($result);
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?= base_url() ?>"><img src="<?= base_url() ?>/images/aset/logo3.png" alt="LOGO FORMATIK" height="50"></a>
    <div style="display:block; margin: 0 auto;">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            $sql_kategori = mysqli_query($con, "SELECT * FROM kategori") or die(mysqli_error($con, ""));
            if (mysqli_num_rows($sql_kategori) > 0) {
                while ($kategori = mysqli_fetch_array($sql_kategori)) { ?>
                    <a href="<?= base_url() ?>/search.php?search=<?= $kategori['kategori'] ?>" style="font-size: 16px; padding:8px; color:white;">#<?= strtoupper($kategori['kategori']) ?></a>
            <?php };
            } ?>
            <div style="padding: 4%"></div>
            <form class="form-inline my-2 my-lg-0" method="get" action="search.php">
                <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required>
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>

                <?php if (!isset($_SESSION['username'])) { ?>
                    <a href="login.php" style="color:white; margin-left: 10px;">LOGIN</a>
                    <p style="color:white; margin:10px;">|</p>
                    <a href="register.php" style="color:white">REGISTER</a> &nbsp;
                <?php } else { ?>
                    <a href="setting.php" style="color:white; padding:2.5%;"><strong><?php if (isset($_SESSION['username'])) {
                                                                                                echo $_SESSION['username'];
                                                                                            }
                                                                                            ?></strong></a>
                    <!-- <button style="color:red;"><i class="far fa-bell"></i></button>"></i></button> -->
                    <a href="index.php?logout='1'" style="color: red; padding:2.5%; font-weight:bold;">logout</a>
                <?php } ?>
            </form>

            <?php if (isset($_SESSION['username'])) { ?>
                <div class="demo-content" style="float: right; z-index:1;">
                    <div style="position:relative">
                        <button id="notification-icon" style="color:white;" name="button" onclick="myFunction()" class="dropbtn"><span id="notification-count"><?php if ($count > 0) {
                                                                                                                                                                        echo $count;
                                                                                                                                                                    } ?></span><i class="far fa-bell"></i></button>
                        <div id="notification-latest"></div>
                    </div>
                    <?php if (isset($message)) { ?> <div class="error"><?php echo $message; ?></div> <?php } ?>
                    <?php if (isset($success)) { ?> <div class="success"><?php echo $success; ?></div> <?php } ?>
                    <form class="form-inline my-2 my-lg-0"> </form>
                </div>
            <?php } ?>
        </div>
</nav>



<script type="text/javascript">
    function myFunction() {
        $.ajax({
            url: "view_notification.php",
            type: "POST",
            processData: false,
            success: function(data) {
                $("#notification-count").remove();
                $("#notification-latest").show();
                $("#notification-latest").html(data);
            },
            error: function() {}
        });
    }

    $(document).ready(function() {
        $('body').click(function(e) {
            if (e.target.id != 'notification-icon') {
                $("#notification-latest").hide();
            }
        });
    });
</script>