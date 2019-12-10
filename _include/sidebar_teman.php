<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['username'])) {
        $username = $_GET['username'];
        $query = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($con, $query);
        $data = mysqli_fetch_assoc($result);
    }
}
?>

<div class="col-md-3">
    <div class="bg-light" style="padding:20px; border-radius:20px; margin-top:20px;">
        <h6 style="text-align:center">PROFIL</h6>
        <img src="<?= base_url() ?>/images/profile/<?= $data['img_profile'] ?>" alt="" style="border-radius:100%; margin-top:10px; margin-bottom:10px; display:block; margin: 0 auto;" width="100" height="100">
        <h3 style="text-align: center;"><?php echo $data['username']; ?></h3>
        <p style="text-align: center;"><?php echo $data['email']; ?></p>
    </div>
</div>