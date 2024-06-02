<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak</title>
    <link rel="shortcut icon" href="./image/logoridhofarm-removebg-preview.png">
    <!-- Style -->
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/contact.css">
    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

<body>
    <nav>
        <div class="container nav__container">
            <a href="index.php">
                <h4>RIDHOFARM</h4>
            </a>
            <ul class="nav__menu">
                <li><a href="home.php">Beranda</a></li>
                <li><a href="about.php">Tentang Kami</a></li>
                <!-- <li><a href="courses.php">Kursus</a></li> -->
                <li><a href="sendwa.php">Whatsapp</a></li>
                <li><a href="contact.php">Kontak</a></li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i> </button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i> </button>
        </div>
    </nav>

    <!-- END NAVBAR -->

    <section class="contact">
        <div class="container contact__container">
            <aside class="contact__aside">
                <div class="aside__image">
                    <img src="./image/contact.svg">
                </div>
                <h2>PRODUK & <br>
                    LAYANAN</h2>
                <p>Kami menawarkan layanan
                    pengantaran sapi dan domba
                    untuk aqiqah atau qurban
                    langsung ke tempat Anda,
                    dengan memastikan keamanan
                    dan kualitas produk selama
                    proses pengiriman.
                </p>
                <ul class="contact__details">
                    <li><i class="uil uil-phone-times"></i>
                        <h5>Informasi Pemesanan <br> 085260245060</h5>
                    </li>
                    <li><i class="uil uil-envelope"></i>
                        <h5>official@rapyrayputratama.com</h5>
                    </li>
                    <li><i class="uil uil-location-point"></i>
                        <h5>Alamat Kandang <br> JL.Persatuan Timur Desa Kolam <br> Kec.Percut Seituan</h5>
                    </li>
                    <li><i class="uil uil-whatsapp"></i>
                        <h5>Kirim Pesan <br> Melalui Whatsapp</h5>
                    </li>
                </ul>
                <ul class="contact__socials">
                    <li><a href="#"><i class="uil uil-youtube"></i></a></li>
                    <li><a href="#"><i class="uil uil-facebook"></i></a></li>
                    <li><a href="#"><i class="uil uil-instagram-alt"></i></a></li>
                </ul>
            </aside>

            <!-- <form name='Ridhofarm-kontak-form' class="contact__form"> -->
            <form action="https://api.web3forms.com/submit" method="POST" class="contact__form" autocomplete="off" id="contactForm">
                <div class="form__name">
                    <input type="hidden" name="access_key" value="fdcf5dc0-f908-4f4b-bdbc-0fa623c881a6">
                    <input type="text" name="nama depan" placeholder="Nama Depan" required>
                    <input type="text" name="nama belakang" placeholder="Nama Belakang" required>
                </div>
                <input type="email" name="email" placeholder="Alamat Email Anda" required>
                <textarea name="pesan" rows="7" placeholder="Pesan Anda" required></textarea>
                <button type="submit" class="btn btn-primary"><i class="uil uil-envelope-check"></i> Kirim Pesan Anda</button>
            </form>
        </div>
    </section>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah pengiriman form default
            var form = this;

            fetch(form.action, {
                method: form.method,
                body: new FormData(form),
            }).then(function(response) {
                if (response.ok) {
                    // Bersihkan form setelah pengiriman berhasil
                    form.reset();
                    alert('Pesan Anda Telah Dikirim, Terima Kasih.😉');
                } else {
                    alert('Terjadi kesalahan, silakan coba lagi -_-.');
                }
            }).catch(function(error) {
                alert('Terjadi kesalahan, silakan coba lagi.😭');
            });
        });
    </script>


    <!-- END FOOTER -->

    <script src="./js/script.js"></script>

    <?php
    include 'partials/footer.php';
    ?>
</body>

</html>