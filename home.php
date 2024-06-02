<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Website RidhoFarm</title>
    <link rel="shortcut icon" href="./image/logoridhofarm-removebg-preview.png">
    <!-- Style -->
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/about.css">
    <!-- ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- SWIPER JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<body>
    <nav>
        <div class="container nav__container">
            <a href="index.php">
                <h4>RIDHOFARM</h4>
            </a>
            <ul class="nav__menu">
                <!-- <li><a href="#">Beranda</a></li> -->
                <li><a href="about.php">Tentang Kami</a></li>
                <!-- <li><a href="courses.php">Kursus</a></li> -->
                <li><a href="contact.php">Kontak</a></li>
            </ul>
            <button id="open-menu-btn"><i class="uil uil-bars"></i> </button>
            <button id="close-menu-btn"><i class="uil uil-multiply"></i> </button>
        </div>
    </nav>

    <!-- END NAVBAR -->


    <header>
        <div class="container header__container">
            <div class="header__left">
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, voluptas?</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur temporibus pariatur aspernatur eius repudiandae optio non, delectus harum quisquam deleniti?</p>
                <a href="courses.php" class="btn btn-primary">Get Started</a>
            </div>
            <div class="header__right">
                <div class="header__right-image">
                    <img src="./image/header.svg">
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER -->



    <section class="categories">
        <div class="container categories__container">
            <div class="categories__left">
                <h1>Kategori</h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, facilis veniam dolore nesciunt aliquid unde dolor accusamus, illo laboriosam, ad sint asperiores? Iure nam voluptatum optio tempora temporibus perspiciatis architecto?</p>
                <a href="./admin/manage-categories.php" class="btn btn-primary">Learn More</a>
            </div>
            <div class="categories__right">
                <article class="category">
                    <span class="category__icon"><i class="uil uil-bitcoin-circle"></i></span>
                    <h5>Kesehatan Sapi</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, possimus.</p>
                </article>

                <article class="category">
                    <span class="category__icon"><i class="uil uil-palette"></i></span>
                    <h5>Nutrisi dan Pakan Sapi</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, possimus.</p>
                </article>

                <article class="category">
                    <span class="category__icon"><i class="uil uil-usd-circle"></i></span>
                    <h5>Bisnis Perternakan Sapi</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, possimus.</p>
                </article>

                <article class="category">
                    <span class="category__icon"><i class="uil uil-megaphone"></i></span>
                    <h5>Pemuliaan dan Genetika Sapi</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, possimus.</p>
                </article>

                <article class="category">
                    <span class="category__icon"><i class="uil uil-music"></i></span>
                    <h5>Teknologi Peternakan Sapi</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, possimus.</p>
                </article>

                <article class="category">
                    <span class="category__icon"><i class="uil uil-puzzle-piece"></i></span>
                    <h5>Pasar & Ekonomi Pertanian</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, possimus.</p>
                </article>
            </div>
        </div>
    </section>
    <!-- END CATEGORIES -->




    <section class="courses">
        <h2>Perusahaan Populer Kami</h2>
        <div class="container courses__container">
            <article class="course">
                <div class="course__image">
                    <img src="./image/heliac-removebg-preview.png">
                </div>
                <div class="course__info">
                    <h4>H E L I A C <br> </h4>
                    <h6>COFFEE & RESTO</h6>
                    <p>Nikmati kopi terbaik dan hidangan lezat di HELIAC COFFEE & RESTO. Suasana nyaman dan Instagramable, cocok untuk semua momen. </p>
                    <a href="https://www.instagram.com/heliac.coffee/" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </article>

            <article class="course">
                <div class="course__image">
                    <img src="./image/logoridhofarm-removebg-preview.png">
                </div>
                <div class="course__info">
                    <h4>RIDHO FARM <br></h4>
                    <h6>Est.2019</h6>
                    <p>Nikmati kualitas premium daging sapi dari RIDHO FARM, Est. 2019. Segar, sehat, dan alami, langsung dari peternakan terbaik. </p>
                    <a href="https://web.facebook.com/profile.php?id=100089737097536" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </article>

            <article class="course">
                <div class="course__image">
                    <img src="./image/1ss-removebg-preview.png">
                </div>
                <div class="course__info">
                    <h4>PT. RAPY RAY PUTRATAMA</h4>
                    <p>Temukan rumah impian Anda bersama PT. RAPY RAY PUTRATAMA, ahli jual beli rumah terpercaya. Kami menawarkan properti berkualitas dengan harga kompetitif dan layanan profesional untuk memenuhi kebutuhan Anda. </p>
                    <a href="https://fresh.rapyrayputratama.com/" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </article>
        </div>
        </div>
    </section>
    <!-- END COURSES -->



    <section class="faqs">
        <h2>Frequently Asked Question</h2>
        <div class="container faqs__container">
            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>Hpw do I know the right courses for me ?</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas assumenda ea eius labore accusantium eaque velit, totam perferendis? Suscipit explicabo quod numquam facilis mollitia consectetur itaque? Nemo, ut? Facere, impedit!</p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>Hpw do I know the right courses for me ?</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas assumenda ea eius labore accusantium eaque velit, totam perferendis? Suscipit explicabo quod numquam facilis mollitia consectetur itaque? Nemo, ut? Facere, impedit!</p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>Hpw do I know the right courses for me ?</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas assumenda ea eius labore accusantium eaque velit, totam perferendis? Suscipit explicabo quod numquam facilis mollitia consectetur itaque? Nemo, ut? Facere, impedit!</p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>Hpw do I know the right courses for me ?</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas assumenda ea eius labore accusantium eaque velit, totam perferendis? Suscipit explicabo quod numquam facilis mollitia consectetur itaque? Nemo, ut? Facere, impedit!</p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>Hpw do I know the right courses for me ?</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas assumenda ea eius labore accusantium eaque velit, totam perferendis? Suscipit explicabo quod numquam facilis mollitia consectetur itaque? Nemo, ut? Facere, impedit!</p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>Hpw do I know the right courses for me ?</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas assumenda ea eius labore accusantium eaque velit, totam perferendis? Suscipit explicabo quod numquam facilis mollitia consectetur itaque? Nemo, ut? Facere, impedit!</p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>Hpw do I know the right courses for me ?</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas assumenda ea eius labore accusantium eaque velit, totam perferendis? Suscipit explicabo quod numquam facilis mollitia consectetur itaque? Nemo, ut? Facere, impedit!</p>
                </div>

            </article>
            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>Hpw do I know the right courses for me ?</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas assumenda ea eius labore accusantium eaque velit, totam perferendis? Suscipit explicabo quod numquam facilis mollitia consectetur itaque? Nemo, ut? Facere, impedit!</p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>Hpw do I know the right courses for me ?</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas assumenda ea eius labore accusantium eaque velit, totam perferendis? Suscipit explicabo quod numquam facilis mollitia consectetur itaque? Nemo, ut? Facere, impedit!</p>
                </div>
            </article>

            <article class="faq">
                <div class="faq__icon"><i class="uil uil-plus"></i></div>
                <div class="question__answer">
                    <h4>Hpw do I know the right courses for me ?</h4>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas assumenda ea eius labore accusantium eaque velit, totam perferendis? Suscipit explicabo quod numquam facilis mollitia consectetur itaque? Nemo, ut? Facere, impedit!</p>
                </div>
            </article>
        </div>
    </section>

    <!-- END FAQ -->




    <section class="container testimonials__container mySwiper">
        <h2>Students' Testimonials</h2>
        <div class="swiper-wrapper">
            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="./image/avatar1.jpg">
                </div>
                <div class="testimonial__info">
                    <h5>Felix Gultom</h5>
                    <small>Magang</small>
                </div>
                <div class="testimonial__body">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, fuga modi facilis ipsum provident optio architecto rem. Commodi, et ducimus!</p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="./image/avatar2.jpg">
                </div>
                <div class="testimonial__info">
                    <h5>Felix Gultom</h5>
                    <small>Magang</small>
                </div>
                <div class="testimonial__body">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, fuga modi facilis ipsum provident optio architecto rem. Commodi, et ducimus!</p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="./image/avatar3.jpg">
                </div>
                <div class="testimonial__info">
                    <h5>Felix Gultom</h5>
                    <small>Magang</small>
                </div>
                <div class="testimonial__body">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, fuga modi facilis ipsum provident optio architecto rem. Commodi, et ducimus!</p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="./image/avatar4.jpg">
                </div>
                <div class="testimonial__info">
                    <h5>Felix Gultom</h5>
                    <small>Magang</small>
                </div>
                <div class="testimonial__body">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, fuga modi facilis ipsum provident optio architecto rem. Commodi, et ducimus!</p>
                </div>
            </article>

            <article class="testimonial swiper-slide">
                <div class="avatar">
                    <img src="./image/avatar5.jpg">
                </div>
                <div class="testimonial__info">
                    <h5>Felix Gultom</h5>
                    <small>Magang</small>
                </div>
                <div class="testimonial__body">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, fuga modi facilis ipsum provident optio architecto rem. Commodi, et ducimus!</p>
                </div>
            </article>
        </div>
        <div class="swiper-pagination"></div>
    </section>
    <!-- END TESTIMONIAL -->



    <!-- END FOOTER -->






    <!-- END FOOTER -->

    <!-- SWIPER JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./js/script.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            // when wimdow width is >= 600px
            breakpoints: {
                600: {
                    slidesPerView: 2
                }
            }
        });
    </script>


    <?php
    include 'partials/footer.php';
    ?>
</body>


</html>