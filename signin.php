<?php
require 'config/constants.php';

$username_email = $_SESSION['signin-data']['username_email'] ?? null;
$password = $_SESSION['signin-data']['password'] ?? null;

unset($_SESSION['signin-data']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Website RidhoFarm</title>
    <link rel="shortcut icon" href="./image/logoridhofarm-removebg-preview.png">
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="<?= ROOT_URL ?>css/style.css">
    <!-- ICONSCOUT CDN  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css">
    <!-- FONT ROBOTO -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #2d2b7c;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form__section {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .form__section-container {
            display: flex;
            flex-direction: row;
            background: #5854c7;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            max-width: 1200px;
            width: 100%;
        }

        .form__section-container .gambar {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-right: 20px;
        }

        .form__section-container .gambar img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .alert__message.error {
            background: var(--color-red-light);
            color: var(--color-red);
        }

        .form__section-container .form-container {
            flex: 1;
            padding: 20px;
            background-color: #1e1e66;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .form__section-container .form-container h2 {
            margin-bottom: 20px;
            color: white;

        }

        .form__section-container .form-container form input,
        .form__section-container .form-container form button {
            width: 100%;
            padding: 15px;
            margin-bottom: 15px;
            border: 1px solid #6f6af8;
            border-radius: 5px;
            color: white;
            background-color: #1e1e66;
            box-shadow: 0.5rem;
        }

        .form__section-container .form-container form input {
            background-color: #1e1e66;
        }

        .form__section-container .form-container form button {
            display: inline-block;
            width: fit-content;
            padding: 0.6rem 1.2rem;
            background-color: var(--color-primary);
            border-radius: var(--card-border-radius-2);
            cursor: pointer;
            transition: var(--transition);
            color: var(--color-white);

        }

        .form__section-container .form-container form button:hover {
            background-color: #1565c0;
            transition: all 1s ease;
        }

        .form__section-container .form-container form small {
            display: block;
            margin-top: 10px;
            color: white;

        }

        @media (max-width: 1024px) {
            .form__section-container {
                flex-direction: column;
                align-items: center;
                padding: 20px;
            }

            .form__section-container .gambar {
                margin-right: 0;
                margin-bottom: 20px;
                width: 100%;

            }

            .form__section-container .form-container {
                width: 100%;
                padding: 20px;

            }
        }

        @media (max-width: 768px) {
            .form__section-container {
                flex-direction: column;
                align-items: center;
                padding: 20px;
            }

            .form__section-container .gambar {
                margin-right: 0;
                margin-bottom: 20px;
                width: 100%;
            }

            .form__section-container .form-container {
                width: 100%;
                padding: 20px;
            }

            .form__section-container .form-container form input,
            .form__section-container .form-container form button {
                padding: 12px;
            }

            .form__section-container .form-container form small {
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .form__section-container {
                flex-direction: column;
                align-items: center;
                padding: 10px;
            }

            .form__section-container .gambar {
                margin-right: 0;
                margin-bottom: 15px;
                width: 100%;
            }

            .form__section-container .form-container {
                width: 100%;
                padding: 15px;
            }

            .form__section-container .form-container form input,
            .form__section-container .form-container form button {
                padding: 10px;
            }

            .form__section-container .form-container form small {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    <!-- ==============================<SIGN IN FORM>============================== -->
    <section class="form__section">
        <div class="container form__section-container">
            <div class="gambar">
                <img src="<?= ROOT_URL ?>image/login.svg" alt="Login Image">
            </div>
            <div class="form-container">
                <h2>Masuk</h2>
                <?php if (isset($_SESSION['signup-success'])) : ?>
                    <div class="alert__message success">
                        <p>
                            <?= $_SESSION['signup-success'];
                            unset($_SESSION['signup-success']);
                            ?>
                        </p>
                    </div>
                <?php elseif (isset($_SESSION['signin'])) : ?>
                    <div class="alert__message error">
                        <p>
                            <?= $_SESSION['signin'];
                            unset($_SESSION['signin']);
                            ?>
                        </p>
                    </div>
                <?php endif ?>
                <form action="<?= ROOT_URL ?>signin-logic.php" method="POST" autocomplete="off" require>
                    <input type="text" name="username_email" value="<?= $username_email ?>" placeholder="Nama Pengguna atau Email" require>
                    <input type="password" name="password" value="<?= $password ?>" placeholder="Kata Sandi" require>
                    <button type="submit" name="submit" class="btn"><i class="uil uil-signin"></i> Masuk</button>
                    <small>Tidak Memiliki Akun? <a href="signup.php">Daftar</a></small>
                </form>
            </div>
        </div>
    </section>
    <!-- ==============================<END SIGN IN FORM>============================== -->
</body>

</html>