<?php require("components/lang.php"); ?>
<!doctype html>
<html class="no-js agntix-light" lang="zxx">

<head>

    <?php require("components/head.php"); ?>

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <script src="assets/js/lang.js" defer></script>

</head>

<body class="tp-magic-cursor" data-bg-color="#F2F1EE">

    <?php require("components/magiccursor.php"); ?>
    <?php require("components/preloader.php"); ?>
    <?php require("components/backtotop.php"); ?>
    <?php require("components/canvas.php"); ?>
    <?php require("components/header.php"); ?>

    <div id="smooth-wrapper">
        <div id="smooth-content">

            <main>

                <!-- breadcurmb area start -->
                <div class="tp-breadcrumb-area tp-breadcrumb-ptb" data-background="assets/img/blog/blog-masonry/blog-bradcum-bg.png">
                    <div class="container container-1430">
                        <div class="row justify-content-center">
                            <div class="col-xl-12">
                                <div class="tp-portfolio-inner-box pb-100">
                                    <div class="tp-portfolio-heading pb-30 d-flex p-relative tp_fade_anim">
                                        <span class="tp-section-subtitle pre orange-color tp_fade_anim mr-95"><?= t('portfolio.label') ?> <svg xmlns="http://www.w3.org/2000/svg" width="82" height="9" viewBox="0 0 82 9" fill="none">
                                                <path d="M78 7.95425L81.5 4.47169L78 0.989136M1 3.98977H81V4.98977H1V3.98977Z" stroke="#FF5722" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>

                                        <h3 class="tp-blog-title fs-100 tp_fade_anim"><?= t('portfolio.title.0') ?> <img class="ml-20" src="assets/img/about-us/about-us-4/about-us-4-shape-1.png" alt=""> <br> <?= t('portfolio.title.1') ?></h3>
                                    </div>
                                    <div class="tp-portfolio-inner-tab-wrap">
                                        <?php $categories = require("data/categories.php"); ?>
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <button class="nav-link active" data-category="all" aria-selected="true">
                                                <?= $lang === "en" ? "All" : "Tudo" ?>
                                                </button>

                                                <?php foreach ($categories as $cat): ?>
                                                <button class="nav-link" data-category="<?= $cat['value'] ?>" aria-selected="false">
                                                    <?= $cat['label'][$lang] ?? $cat['label']['pt'] ?>
                                                </button>
                                                <?php endforeach; ?>
                                            </div>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- breadcurmb area end -->


                <!-- portfolio area start -->
                <div class="tp-portfolio-inner-ptb pb-70">
                    <div class="container container-1430">
                        <div class="tp-portfolio-tab-content-wrap">
                            <div class="tab-content">
                                <div class="tab-pane fade show active">
                                    <div class="row">
                                        <?php $houses = require("data/houses.php"); $currentLang = $lang ?? 'pt'; ?>
                                        <?php foreach ($houses as $house): ?>
                                            <div class="col-md-6 col-12 portfolio-card" data-category="<?= $house['category'] ?>">
                                                <div class="tp-portfolio-inner-item mb-65">
                                                    <div class="tp-portfolio-inner-thumb">
                                                        <a href="house.php?id=<?= $house['id'] ?>">
                                                            <img height="450" src="<?= $house['image'] ?>" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="tp-portfolio-inner-content">
                                                        <h4 class="tp-portfolio-inner-title fs-30">
                                                        <a class="tp-line-white" href="house.php?id=<?= $house['id'] ?>">
                                                            <?= $house['title'][$currentLang] ?? $house['title']['pt'] ?>
                                                        </a>
                                                        </h4>
                                                        <span><?= $house['location'] ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- portfolio area end -->


            </main>

            <?php require("components/footer.php"); ?>

        </div>
    </div>



    <!-- JS here -->
    <!-- JS here -->
    
    <script>
        document.querySelectorAll('.nav-link').forEach(button => {
            button.addEventListener('click', () => {
                const category = button.getAttribute('data-category');

                document.querySelectorAll('.nav-link').forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                document.querySelectorAll('.portfolio-card').forEach(card => {
                    card.style.display = (category === 'all' || card.dataset.category === category) ? '' : 'none';
                });
            });
        });
    </script>
                                        
    <script src="assets/js/vendor/jquery.js"></script>
    <script src="assets/js/bootstrap-bundle.js"></script>
    <script src="assets/js/swiper-bundle.js"></script>
    <script src="assets/js/plugin.js"></script>
    <script src="assets/js/three.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/scroll-magic.js"></script>
    <script src="assets/js/hover-effect.umd.js"></script>
    <script src="assets/js/magnific-popup.js"></script>
    <script src="assets/js/parallax-slider.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/purecounter.js"></script>
    <script src="assets/js/isotope-pkgd.js"></script>
    <script src="assets/js/imagesloaded-pkgd.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/Observer.min.js"></script>
    <script src="assets/js/splitting.min.js"></script>
    <script src="assets/js/webgl.js"></script>
    <script src="assets/js/parallax-scroll.js"></script>
    <script src="assets/js/atropos.js"></script>
    <script src="assets/js/slider-active.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/tp-cursor.js"></script>
    <script src="assets/js/portfolio-slider-1.js"></script>
    <script type="module" src="assets/js/distortion-img.js"></script>
    <script type="module" src="assets/js/skew-slider/index.js"></script>
    <script type="module" src="assets/js/img-revel/index.js"></script>


    <!-- JS here -->
    <!-- JS here -->

</body>

</html>