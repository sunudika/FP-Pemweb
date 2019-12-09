<div class="col" style="background-color:black; color:white; border-radius: 5px; max-width: 850px;">
    <label for="" style="margin-top: 20px;">Thread</label>
    <br>
    <?php
    $search = $_GET['search'];
    $sql_find = mysqli_query($con, "SELECT * FROM post JOIN user ON post.nama_user=user.username WHERE judul LIKE '%$search%' OR post LIKE '%$search%' ORDER BY post.id DESC") or die(mysqli_error($con, ""));
    if (mysqli_num_rows($sql_find) > 0) {
        while ($find = mysqli_fetch_array($sql_find)) {  ?>
            <img src="<?= base_url() ?>/images/profile/<?= $find['img_profile']; ?>" alt="" style="border-radius:100%; margin-left:10px;" width="35" height="35">
            <a href=""><?= $find['username']; ?> </a>
            <p style="padding-left:50px;">Judul = <?= substr($find['judul'], 0, 10);
                                                            if (strlen($find['judul']) > 9) {
                                                                echo "...";
                                                            } ?>
            </p>
            <p style="padding-left:50px;"><?= substr($find['post'], 0, 50);
                                                    if (strlen($find['judul']) >= 50) {
                                                        echo "...";
                                                    } ?>
            </p>
            <br>
    <?php };
    } ?>
    <hr>

    <label for="" style="margin-bottom: 20px;">Users</label>
    <br>
    <?php
    $sql_find2 = mysqli_query($con, "SELECT * FROM user WHERE username LIKE '%$search%' OR email LIKE '%$search%' ORDER BY id DESC") or die(mysqli_error($con, ""));
    if (mysqli_num_rows($sql_find2) > 0) {
        while ($find2 = mysqli_fetch_array($sql_find2)) { ?>
            <img src="<?= base_url() ?>/images/profile/<?= $find2['img_profile']; ?>" alt="" style="border-radius:100%; margin-left:10px;" width="35" height="35">
            <a href=""><?= $find2['username']; ?></a>
            <br>
            <p style="padding-left:50px; color:white"><?= $find2['email']; ?></p>
            <br>
    <?php };
    } ?>

</div>