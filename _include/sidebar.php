<div class="col-lg-2 sidebar">
    <div class="bg-light" style="padding:20px; border-radius:20px; margin-top:20px;">
        <h6 style="text-align:center">HOT THREAD</h6>
        <ol>
            <?php
            $sql_thread = mysqli_query($con, "SELECT * FROM post ORDER BY id DESC LIMIT 0, 6") or die(mysqli_error($con, ""));
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
            $sql_user = mysqli_query($con, "SELECT * FROM user LIMIT 0, 6") or die(mysqli_error($con, ""));
            if (mysqli_num_rows($sql_user) > 0) {
                while ($user = mysqli_fetch_array($sql_user)) { ?>
                    <li><a href="<?php echo "profile_teman.php?username=" . $user['username']; ?>">
                            <?= substr($user['username'], 0, 8);
                                    if (strlen($user['username']) >= 8) {
                                        echo "...";
                                    } ?>
                        </a>
                    </li>
            <?php  };
            } ?>
        </ol>
    </div>
</div>