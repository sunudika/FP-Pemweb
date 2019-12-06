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
                    <?php
                    $sql_user = mysqli_query($con, "SELECT * FROM user LIMIT 0, 6") or die(mysqli_error($con, ""));
                    if (mysqli_num_rows($sql_user) > 0) {
                        while ($user = mysqli_fetch_array($sql_user)) { ?>
                            <li><a href=""> <?= $user['username']; ?></a></li>
                    <?php  };
                    } ?>
                </ol>
            </div>
        </div>