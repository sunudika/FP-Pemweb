<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        if (isset($_GET['username'])) {
            $username = $_GET['username'];
            $query = "SELECT * FROM user WHERE username = '$username'"; 
            $result = mysqli_query($con,$query);
            $data = mysqli_fetch_assoc($result);
        }  
    }
?>

<div class="col-3">
    <div class="bg-light" style="padding:20px; border-radius:20px; margin-top:20px;">
        <h6 style="text-align:center">PROFIL</h6>
        <h2><?php echo $data['username']; ?></h2>
        <p><?php echo $data['email']; ?></p>
    </div>
</div>