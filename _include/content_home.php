<div class="container">
    <div class="row">
        <div class="col-2">
            <div class="bg-light" style="padding:20px; border-radius:20px; margin-top:20px;">
                <h6 style="text-align:center">HOT THREAD</h6>
                <ol>
                    <li><a href=""> list 1</a></li>
                    <li><a href=""> list 2</a></li>
                    <li><a href=""> list 3</a></li>
                    <li><a href=""> list 4</a></li>
                    <li><a href=""> list 5</a></li>
                    <li><a href=""> list 6</a></li>
                </ol>
            </div>
            <div class="bg-light" style="padding:20px; border-radius:20px; margin-top:20px;">
                <h6 style="text-align:center">TREND PEOPLE</h6>
                <ol>
                    <li><a href=""> list 1</a></li>
                    <li><a href=""> list 2</a></li>
                    <li><a href=""> list 3</a></li>
                    <li><a href=""> list 4</a></li>
                    <li><a href=""> list 5</a></li>
                    <li><a href=""> list 6</a></li>
                </ol>
            </div>
        </div>

        <div class="col-8">
            <?php if (isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                $sql_profile = mysqli_query($con, "SELECT * FROM user WHERE username='$username'") or die(mysqli_error($con, ""));
                if (mysqli_num_rows($sql_profile) > 0) {
                    while ($profile = mysqli_fetch_array($sql_profile)) {
                        $img_profile = $profile['img_profile'];
                    };
                } ?>
                <div style="background-color:rgba(255, 255, 255, 0.5); margin-top:20px;">
                    <img src="<?= base_url() ?>/images/profile/<?= $img_profile ?>" alt="" style="border-radius:100%; margin-left:10px;" width="40">
                    <a href="" style="color:black"><?= $_SESSION['username']; ?></a>
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="text" name="judul" placeholder="judul" style="display: block; margin-left: auto; margin-right: auto; width:99%">
                        <textarea name="isi" cols="100" rows="3" style="display: block; margin-left: auto; margin-right: auto;" placeholder="Ketik postingan anda disini"></textarea>
                        <input type="file" name="photo" value="upload foto"><br>
                        <input type="submit" name="post_kirim" class="btn btn-secondary" value="kirim" style="width:100%;">
                    </form>
                </div>
            <?php } ?>

            <?php
            $sql_post = mysqli_query($con, "SELECT * FROM post LIMIT 0, 10") or die(mysqli_error($con, ""));
            if (mysqli_num_rows($sql_post) > 0) {
                while ($post = mysqli_fetch_array($sql_post)) { ?>
                    <div style="background-color:rgba(255, 255, 255, 0.5); margin-top:20px;">
                        <div>
                            <img src="<?= base_url() ?>/images/profile/profile.jpg" alt="" style="border-radius:100%; margin-left:10px;" width="35">
                            <a href="" style="color:black"><?= $post['nama_user']; ?></a> Pada <?= $post['date_created']; ?>
                            <br>
                        </div>
                        <?php if ($post['img_post'] != "") { ?>
                            <img src="<?= base_url() ?>/images/thread/wp1828933-programmer-wallpapers.jpg" style="display: block; margin-left: auto; margin-right: auto;" alt="Ceritanya ini foto" width="500">
                        <?php } ?>
                        <h5 style="padding: 20px 20px 0 20px;"><?= $post['judul']; ?></h5>
                        <hr>
                        <?php
                                $id_post = $post['id'];
                                $sql_comment = mysqli_query($con, "SELECT * FROM comment WHERE id_post='$id_post'") or die(mysqli_error($con, ""));
                                if (mysqli_num_rows($sql_comment) > 0) {
                                    while ($comment = mysqli_fetch_array($sql_comment)) { ?>
                                <div style="padding: 0 30px">
                                    <a href=""><?= $comment['nama_user']; ?></a> <?= $comment['comment']; ?>
                                    <br>
                                    <a href="" style="padding-left:100px;">Suka</a> Pada <?= $comment['date_created']; ?>
                                </div>
                        <?php };
                                } ?>

                        <table style="width:100%; text-align:center">
                            <tr>
                                <td><button style="background-color:blue; color:white; width:100%">Cendol Dawet</button></td>
                                <td><button style="background-color:red; color:white; width:100%">Bata Atos</button></td>
                            </tr>
                        </table>
                        <button style="width:100%">Lihat Selengkapnya</button>
                    </div>
            <?php };
            } ?>

            <div style="background-color:rgba(255, 255, 255, 0.5); margin-top:20px;">
                <button style="width:100%">Load Thread</button>
            </div>
        </div>
    </div>
</div>