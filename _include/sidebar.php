<div class="col-md-3" style="color: white">
    <div class="kolom">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" style="color: white" href="#">HOT THREAD</a>
                <ol>
                    <?php
                    $sql_thread = mysqli_query($con, "SELECT post.id, judul, COUNT(*) FROM `post_like` JOIN post ON post_like.id_post=post.id GROUP BY post.judul ORDER BY COUNT(*) DESC LIMIT 0, 6") or die(mysqli_error($con, ""));
                    if (mysqli_num_rows($sql_thread) > 0) {
                        while ($thread = mysqli_fetch_array($sql_thread)) { ?>
                            <li><a style="color: white" href="post.php?id=<?= $thread[0] ?>"><?= substr($thread['judul'], 0, 8);
                                                                                                        if (strlen($thread['judul']) >= 8) {
                                                                                                            echo "...";
                                                                                                        } ?>
                                </a>
                            </li>
                    <?php  };
                    } ?>
                </ol>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="color: white" href="#">TREND PEOPLE</a>
                <ol>
                    <?php
                    $sql_user = mysqli_query($con, "SELECT nama_user,COUNT(*) FROM `post` GROUP BY nama_user ORDER BY COUNT(*) DESC LIMIT 0, 6") or die(mysqli_error($con, ""));
                    if (mysqli_num_rows($sql_user) > 0) {
                        while ($user = mysqli_fetch_array($sql_user)) { ?>
                            <li><a style="color: white" href="profile_teman.php?username=<?= $user['nama_user']; ?>">
                                    <?= substr($user['nama_user'], 0, 8);
                                            if (strlen($user['nama_user']) >= 8) {
                                                echo "...";
                                            } ?>
                                </a>
                            </li>
                    <?php  };
                    } ?>
                </ol>
            </li>
        </ul>
    </div>
</div>