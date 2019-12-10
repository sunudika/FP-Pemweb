<div class="col-lg-2 sidebar">
    <div class="bg-light" style="padding:20px; border-radius:20px; margin-top:20px;">
        <h6 style="text-align:center">HOT THREAD</h6>
        <ol>
            <?php
            $sql_thread = mysqli_query($con, "SELECT judul, COUNT(*) FROM `post_like` JOIN post ON post_like.id_post=post.id GROUP BY post.judul ORDER BY COUNT(*) DESC LIMIT 0, 6") or die(mysqli_error($con, ""));
            if (mysqli_num_rows($sql_thread) > 0) {
                while ($thread = mysqli_fetch_array($sql_thread)) { ?>
                    <li><a href="post.php?id=<?= $thread['id'] ?>"><?= substr($thread['judul'], 0, 8);
                                                                            if (strlen($thread['judul']) >= 8) {
                                                                                echo "...";
                                                                            } ?>
                        </a>
                    </li>
            <?php  };
            } ?>
        </ol>
    </div>
    <div class="bg-light" style="padding:20px; border-radius:20px; margin-top:20px;">
        <h6 style="text-align:center">TREND PEOPLE</h6>
        <ol>
            <?php
            $sql_user = mysqli_query($con, "SELECT nama_user,COUNT(*) FROM `post` GROUP BY nama_user ORDER BY COUNT(*) DESC LIMIT 0, 6") or die(mysqli_error($con, ""));
            if (mysqli_num_rows($sql_user) > 0) {
                while ($user = mysqli_fetch_array($sql_user)) { ?>
                    <li><a href="<?php echo "profile_teman.php?username=" . $user['nama_user']; ?>">
                            <?= substr($user['nama_user'], 0, 8);
                                    if (strlen($user['nama_user']) >= 8) {
                                        echo "...";
                                    } ?>
                        </a>
                    </li>
            <?php  };
            } ?>
        </ol>
    </div>
</div>