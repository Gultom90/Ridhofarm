<?php

require 'config/constants.php';

// get back form data if there was a registration error
$firstname = $_SESSION['signup-data']['firstname'] ?? null;
$lastname = $_SESSION['signup-data']['lastname'] ?? null;
$username = $_SESSION['signup-data']['username'] ?? null;
$email = $_SESSION['signup-data']['email'] ?? null;
$createpassword = $_SESSION['signup-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['signup-data']['confirmpassword'] ?? null;
// delete signup data session
unset($_SESSION['signup-data']);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website RidhoFarm</title>
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css">
    <!-- ICONSCOUT CDN  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css">
    <!-- FONT ROBOTO -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

</head>

<body>
    <!-- ==============================<SIGN UP FORM>============================== -->
    <section class="form__section">
        <div class="container form__section-container">
            <h2><i class="uil uil-registered"></i> Daftar</h2>
            <?php if (isset($_SESSION['signup'])) : ?>
                <div class="alert__message error">
                    <p>
                        <?= $_SESSION['signup'];
                        unset($_SESSION['signup']);
                        ?>
                    </p>
                </div>
            <?php endif ?>
            <form action="<?= ROOT_URL ?>signup-logic.php" enctype="multipart/form-data" method="POST" autocomplete="off">
                <input type="text" name="firstname" value="<?= $firstname ?>" placeholder="Nama Depan">
                <input type="text" name="lastname" value="<?= $lastname ?>" placeholder="Nama Belakang">
                <input type="text" name="username" value="<?= $username ?>" placeholder="Nama Pengguna">
                <input type="email" name="email" value="<?= $email ?>" placeholder="Email">
                <input type="password" name="createpassword" value="<?= $createpassword ?>" placeholder="Buat kata sandi">
                <input type="password" name="confirmpassword" value="<?= $confirmpassword ?>" placeholder="Konfirmasi Kata Sandi">
                <div class="form__control">
                    <label for="avatar">Avatar Pengguna</label>
                    <input type="file" name="avatar" id="avatar">
                </div>
                <button type="submit" name="submit" class="btn"><i class="uil uil-signout"></i> Daftar</button>
                <small>Sudah Memiliki Akun? <a href="signin.php">Masuk</a></small>
            </form>
        </div>
    </section>
    <!-- ==============================<END SIGN UP FORM>============================== -->

</body>

</html>