<div class="col-sm-8">
    <?php
    $post_id = $_GET['id'];
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $sql_profile = mysqli_query($con, "SELECT * FROM user WHERE username='$username'") or die(mysqli_error($con, ""));
        if (mysqli_num_rows($sql_profile) > 0) {
            while ($profile = mysqli_fetch_array($sql_profile)) {
                $img_profile = $profile['img_profile'];
                $username = $profile['username'];
            };
        };
    };

    $sql_post = mysqli_query($con, "SELECT * FROM post JOIN user ON post.nama_user=user.username AND post.id ='$post_id' ORDER BY post.id DESC LIMIT 0, 10") or die(mysqli_error($con, ""));
    if (mysqli_num_rows($sql_post) > 0) {
        while ($post = mysqli_fetch_array($sql_post)) {
            $img_profile = $post['img_profile'];
            ?>
            <div style="background-color:rgba(255, 255, 255, 0.5); margin-top:20px;">
                <div>
                    <img src="<?= base_url() ?>/images/profile/<?= $img_profile ?>" alt="" style="border-radius:100%; margin-left:10px;" width="40px" height="40px">
                    <a href="<?php echo "profile_teman.php?username=" . $post['nama_user']; ?>" style="color:black"><?= $post['nama_user']; ?></a> Pada <?= $post['date_created']; ?>

                    <?php if (isset($_SESSION['username'])) { ?>
                        <div class="dropdown" style="float:right;">
                            <button class="dropbtn"><i class="fas fa-ellipsis-h"></i></button>
                            <div class="dropdown-content">
                                <input type="text" value="<?= base_url() ?>/post.php?id=<?= $post_id ?>" id="share" style="color:white; width:180px;">
                                <button onclick="share()" class="btn" style="width: 180px">Share</button>
                                <input type="text" value="<?= base_url() ?>/post.php?id=<?= $post_id ?>" id="share" style="display:none;">
                                <script>
                                    function share() {
                                        var copyText = document.getElementById("share");
                                        copyText.select();
                                        copyText.setSelectionRange(0, 99999)
                                        document.execCommand("copy");
                                        alert("Copied the text: " + copyText.value);
                                    }
                                </script>
                                <?php if ($post['nama_user'] == $_SESSION['username']) { ?>
                                    <br>
                                    <button onclick="del<?= $post[0] ?>()" class="btn" style="width: 180px">Delete Post</button>

                                    <script>
                                        function del<?= $post[0] ?>() {
                                            var txt;
                                            if (confirm(" Anda yakin ingin mendelete post ini?")) {
                                                window.location = "<?= base_url() ?>/_auth/delete_post.php?id=<?= $post[0] ?>";
                                            }
                                        }
                                    </script> <?php }; ?>
                            </div>
                        </div> <?php } ?> <br>
                </div>
                <?php if ($post['img_post'] != "") { ?>
                    <img src="<?= base_url() ?>/images/thread/<?= $post['img_post']; ?>" style="display: block; margin-left: auto; margin-right: auto; width:70%;" alt="Ceritanya ini foto">
                <?php } ?>
                <h5 style="padding: 20px 20px 0 20px;"><?= $post['judul']; ?></h5>
                <p style="padding: 3%"><?= $post['post']; ?></p>
                <hr>

                <table style="width:100%; text-align:center">
                    <tr>
                        <td>
                            <?php
                                    $sql_like_count = mysqli_query($con, "SELECT * FROM post_like WHERE id_post='$post_id' AND value='1'") or die(mysqli_error($con, ""));
                                    $total_like = mysqli_num_rows($sql_like_count);
                                    echo "$total_like Likes";
                                    ?>
                        </td>
                        <td>
                            <?php
                                    $sql_like_count = mysqli_query($con, "SELECT * FROM post_like WHERE id_post='$post_id' AND value='0'") or die(mysqli_error($con, ""));
                                    $total_like = mysqli_num_rows($sql_like_count);
                                    echo "$total_like Dislike";
                                    ?>
                        </td>
                        <td>
                            <?php
                                    $sql_comment_count = mysqli_query($con, "SELECT * FROM comment JOIN user on comment.nama_user=user.username WHERE id_post='$post_id'") or die(mysqli_error($con, ""));
                                    $total_comment = mysqli_num_rows($sql_comment_count);
                                    echo "$total_comment Comment";
                                    ?>
                        </td>

                        <td style="width:20%"></td>
                        <?php if (isset($_SESSION['username'])) { ?>
                            <form action="" method="post">
                                <?php
                                            $sql_like = mysqli_query($con, "SELECT * FROM post_like WHERE id_post='$post_id' AND username='$username'");
                                            if (mysqli_num_rows($sql_like) > 0) {
                                                while ($like = mysqli_fetch_array($sql_like)) {
                                                    if ($like['value'] == '1') { ?>
                                            <td style="float: right;"><button class="btn btn-secondary" type="submit" name="unpost_likes<?= $post_id ?>" value="1"><i class="far fa-thumbs-up"></i> Cendol Dawet</button> <button class="btn btn-danger" type="submit" name="post_likes<?= $post[0] ?>" value="0"><i class="far fa-thumbs-down"></i> Bata Atos</button></td>
                                        <?php } else { ?>
                                            <td style="float: right;"><button class="btn btn-primary" type="submit" name="post_likes<?= $post_id ?>" value="1"><i class="far fa-thumbs-up"></i> Cendol Dawet</button> <button class="btn btn-secondary" type="submit" name="unpost_likes<?= $post[0] ?>" value="0"><i class="far fa-thumbs-down"></i> Bata Atos</button></td>
                                    <?php };
                                                    };
                                                } else { ?>
                                    <td style="float: right;"><button class="btn btn-primary" type="submit" name="post_likes<?= $post_id ?>" value="1"><i class="far fa-thumbs-up"></i> Cendol Dawet</button> <button class="btn btn-danger" type="submit" name="post_likes<?= $post[0] ?>" value="0"><i class="far fa-thumbs-down"></i> Bata Atos</button></td>
                                <?php }; ?>
                            </form>
                            <?php if (isset($_POST["post_likes" . $post_id])) {
                                            $likes = mysqli_real_escape_string($con, $_POST['post_likes' . $post_id]);

                                            $sql_like = mysqli_query($con, "SELECT * FROM post_like WHERE id_post='$post_id' AND username='$username'");
                                            if (mysqli_num_rows($sql_like) > 0) {
                                                mysqli_query($con, "UPDATE post_like SET value='$likes' WHERE id_post='$post_id' AND username='$username'");
                                            } else {
                                                mysqli_query($con, "INSERT INTO post_like (id_post, username, value) VALUES ('$post_id', '$username', '$likes')");
                                            };
                                            echo "<script>window.location='" . base_url() . "/post.php?id=$post_id';</script>";
                                        } ?>

                            <?php if (isset($_POST["unpost_likes" . $post_id])) {
                                            $likes = mysqli_real_escape_string($con, $_POST['unpost_likes' . $post_id]);

                                            $sql_like = mysqli_query($con, "SELECT * FROM post_like WHERE id_post='$post_id' AND username='$username'");
                                            if (mysqli_num_rows($sql_like) > 0) {
                                                mysqli_query($con, "DELETE FROM post_like WHERE id_post='$post_id' AND username='$username'");
                                            };
                                            echo "<script>window.location='" . base_url() . "/post.php?id=$post_id';</script>";
                                        } ?>
                        <?php } else { ?>
                            <td style="float: right;"><button class="btn btn-secondary"><i class="far fa-thumbs-up"></i> Cendol Dawet</button> <button class="btn btn-secondary"><i class="far fa-thumbs-down"></i> Bata Atos</button></td>
                        <?php } ?>
                    </tr>
                </table>

                <div style="padding:10px;"></div>

                <div style="background-color:rgba(255, 255, 255, 0.25); padding: 5px 0;">
                    <?php
                            $sql_comment = mysqli_query($con, "SELECT * FROM comment JOIN user on comment.nama_user=user.username WHERE id_post='$post_id' ORDER BY comment.id") or die(mysqli_error($con, ""));
                            if (mysqli_num_rows($sql_comment) > 0) {
                                while ($comment = mysqli_fetch_array($sql_comment)) { ?>
                            <hr>
                            <div style="padding: 0 30px">
                                <img src="<?= base_url() ?>/images/profile/<?= $comment['img_profile'] ?>" alt="" style="border-radius:100%; margin-left:10px;" width="40px" height="40px">
                                <a href=""><?= $comment['nama_user'] ?></a> <?= $comment['comment'] ?> Pada (<?= $comment['date_create'] ?>)
                            </div>
                    <?php };
                            }; ?>
                </div>

                <?php if (isset($_SESSION['username'])) { ?>
                    <div class="card my-4" style="background-color:rgba(255, 255, 255, 0.25);">
                        <h5 class="card-header">Tinggalkan Komentar:</h5>
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="form-group">
                                    <textarea class="form-control" name="comment" rows="3" style="background-color:rgba(255, 255, 255, 0.25);" required></textarea>
                                </div>
                                <td><button class="btn btn-warning" style="width:25%" type="submit" name="submit_comment"><i></i> Komen</button></td>
                            </form>
                        </div>
                    </div>
        <?php };
            };
        } ?>
            </div>

            <?php if (isset($_POST["submit_comment"])) {
                $comment_date = date("Y-m-d h:i:sa");
                $comment = mysqli_real_escape_string($con, htmlspecialchars($_POST['comment']));
                mysqli_query($con, "INSERT INTO comment (nama_user, id_post, comment, date_create) VALUES ('$username', '$post_id', '$comment', '$comment_date')");
                echo "<script>window.location='';</script>";
            } ?>