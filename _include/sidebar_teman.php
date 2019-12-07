<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['nama_user'])) {
            $nama_user = $_GET['nama_user'];
            $query = "SELECT * FROM post WHERE nama_user = '$nama_user'"; 
  
            $result = mysqli_query($con,$query);
        }  
    }
?>

<div class="col-2">
    <div class="bg-light" style="padding:20px; border-radius:20px; margin-top:20px;">
        <h6 style="text-align:center">PROFIL</h6>
        <?php 
            $username = $_SESSION['username'];
            $result = mysqli_query($con, "SELECT * FROM user WHERE username='$username'");
            $data = mysqli_fetch_assoc($result);

            $result2 = mysqli_query($con, "SELECT COUNT post AS cnt FROM post WHERE username='$username'");
            while ($row = mysqli_fetch_assoc($result2)) {
                $banyak = $row["cnt"];
            }
        ?>
        <h2><?php echo $data['username']; ?></h2>
        <p><?php echo $data['email']; ?></p>
        <?php echo $result2; ?>
    </div>
</div>