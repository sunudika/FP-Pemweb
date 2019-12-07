<?php
date_default_timezone_set("Asia/Jakarta");
session_start();

ini_set("display_errors", "on");
if (!isset($dbh)) {
    $dbh  = new PDO('mysql:dbname=' . 'formatik' . ';host=' . 'localhost', 'root', '');
}

$con = mysqli_connect('localhost', 'root', '', 'formatik');
if (mysqli_connect_errno()) {
    echo mysqli_connect_error();
}

function base_url($url = null)
{
    $base_url = "http://localhost/formatik";
    if ($url != null) {
        return $base_url . "/" . $url;
    } else {
        return $base_url;
    }
}

$errors = array();

if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($con, $_POST['password_2']);

    if (empty($username)) {
        array_push($errors, "Username harus diisi");
    }
    if (empty($email)) {
        array_push($errors, "Email harus diisi");
    }
    if (empty($password_1)) {
        array_push($errors, "Password harus diisi");
    }
    if (strlen($password_1) <= 6) {
        array_push($errors, "Password minimal 6 huruf");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "Password tidak sama");
    }
    if ($error == 4) {
        array_push($errors, "KTM photo is not uploaded yet");
    } else {
        $extphotovalid = ['jpg', 'jpeg', 'png'];
        $extphoto = explode('.', $photo);
        $extphoto = strtolower(end($extphoto));

        if (!in_array($extphoto, $extphotovalid)) {
            array_push($errors, "Photo that u're uploaded is not supported format");
        }

        $photo = uniqid() . '.' . $extphoto;

        move_uploaded_file($_FILES['image']['tmp_name'], 'images/img_verification/' . $photo);

    $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($con, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
        }
    }

    $photo = trim(mysqli_real_escape_string($con, $_FILES['image']['name']));
    $error = trim(mysqli_real_escape_string($con, $_FILES['image']['error']));
    $tmpphoto = trim(mysqli_real_escape_string($con, $_FILES['image']['tmp_name']));
    $photosize = trim(mysqli_real_escape_string($con, $_FILES['image']['size']));

    if (count($errors) == 0) {
        $password = md5($password_1);
            mysqli_query($con, "INSERT INTO user (username, email, password, img_verification) VALUES('$username', '$email', '$password', '$photo')");
        }
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
    }
}

if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = md5(mysqli_real_escape_string($con, $_POST['password']));

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $results = mysqli_query($con, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $sql = $dbh->prepare("UPDATE user SET status='0' WHERE username=?");
            $sql->execute(array($_SESSION['username']));
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        } else {
            array_push($errors, "Username dan password tidak tepat");
        }
    }
}

if (isset($_GET['logout'])) {
    $username = $_SESSION['username'];
    $sql = $dbh->prepare("UPDATE user SET status='1' WHERE username='$username'");
    $sql->execute(array($_SESSION['username']));
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
}

if (isset($_POST['post_kirim'])) {
    $sql_post = mysqli_query($con, "SELECT * FROM post JOIN user ON post.nama_user=user.username ORDER BY post.id DESC LIMIT 0, 10") or die(mysqli_error($con, ""));
    $post = mysqli_fetch_array($sql_post);

    $judul = mysqli_real_escape_string($con, $_POST['judul']);
    $isi = mysqli_real_escape_string($con, $_POST['isi']);
    $nama = $_SESSION['username'];
    $post_date = date("Y-m-d h:i:sa");

    $photo = trim(mysqli_real_escape_string($con, $_FILES['photo']['name']));
    $error = trim(mysqli_real_escape_string($con, $_FILES['photo']['error']));
    $tmpphoto = trim(mysqli_real_escape_string($con, $_FILES['photo']['tmp_name']));
    $photosize = trim(mysqli_real_escape_string($con, $_FILES['photo']['size']));

    if ($error == 4) {
        $sql_add = mysqli_query($con, "INSERT INTO post (judul, post, nama_user, date_created) VALUES ('$judul','$isi','$nama','$post_date')");
    } else {
        $extphotovalid = ['jpg', 'jpeg', 'png'];
        $extphoto = explode('.', $photo);
        $extphoto = strtolower(end($extphoto));

        if (!in_array($extphoto, $extphotovalid)) {
            echo "<script>alert('File yg anda upload bukan gambar');</script>";
            return false;
        }

        $photo = uniqid() . '.' . $extphoto;

        move_uploaded_file($_FILES['photo']['tmp_name'], 'images/thread/' . $photo);
        $sql_add = mysqli_query($con, "INSERT INTO post (judul, post, img_post, nama_user, date_created) VALUES ('$judul','$isi','$photo','$nama','$post_date')");
    }
    if($_POST['post_kirim'] === 'profil') {
        header("location: profile_teman.php?username=".$post['nama_user']);
    }else
    echo "<script>window.location='" . base_url() . "';</script>";
}

if (isset($_POST['update-profile'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    
    $image = $_FILES['image']['name'];  

    $target = "images/profile/".basename($image);

    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    $user_check_query = "SELECT * FROM user WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($con, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    $username_lama = $user['username'];

    mysqli_query($con, "UPDATE user SET username='$username', email='$email', img_profile='$image' WHERE username='$username_lama'");
    $_SESSION['username'] = $username;
    header('location: setting.php');
}

$sql_settings = mysqli_query($con, "SELECT * FROM setting");
while ($settings = mysqli_fetch_array($sql_settings)) {
    $toogle_maintainance = $settings['toogle_maintainance'];
    $text_maintainance = $settings['text_maintainance'];
};
