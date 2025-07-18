<?php 
    require("components/lang.php");
    $houses = require("data/houses.php");
    $currentLang = $lang ?? 'pt';

    $id = $_GET['id'] ?? null;
    $house = null;

    foreach ($houses as $item) {
        if ($item['id'] == $id) {
            $house = $item;
            break;
        }
    }

    if (!$house) {
        header("Location: /houses.php");
    exit;
    }
?>
<!doctype html>
<html class="no-js agntix-light" lang="zxx">

<head>

    <?php require("components/head.php"); ?>

    <!-- CSS here -->
    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="assets/css/spacing.css">
    <link rel="stylesheet" href="assets/css/atropos.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- CSS here -->
    <!-- CSS here -->

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

                <!-- portfolio details area start -->
                <div class="tp-portfolio-details-1-area pt-110 pb-140">
                    <div class="container container-1830">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tp-portfolio-details-1-banner">
                                    <img data-speed=".8" src="<?= $house['image'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- portfolio details area end -->


                <!-- portfolio details area start -->
                <div class="tp-portfolio-details-1-ptb pb-100">
                    <div class="container container-1430">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="tp-portfolio-details-1-heading">
                                    <span class="tp-portfolio-details-1-sub tp_fade_anim" data-delay=".3"><?= $house['location'] ?></span>
                                    <h3 class="tp-portfolio-details-1-title"><?= $house['title'][$currentLang] ?></h3>
                                    <div class="tp-portfolio-details-1-btn tp_fade_anim" data-delay=".7">
                                        <a class="tp-portfolio-details-btn" href="#"><?= t('details.gallery') ?><span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                                <path d="M1 9L9 1M9 1H1M9 1V9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="tp-portfolio-details-1-content">
                                    <p><?= $house['description'][$currentLang] ?></p>
                                    <div class="tp-portfolio-details-1-list">
                                        <ul>
                                            <li><span><?= $house['typology']['label'][$currentLang] ?>:</span> <?= $house['typology']['value'] ?></li>
                                            <li><span><?= $house['area']['label'][$currentLang] ?>:</span> <?= $house['area']['value']?>m²</li>
                                            <li><span><?= $house['bedrooms']['label'][$currentLang] ?>:</span> <?= $house['bedrooms']['value'] ?></li>
                                            <li><span><?= $house['bathrooms']['label'][$currentLang] ?>:</span> <?= $house['bathrooms']['value'] ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- portfolio details area end -->


                <!-- portfolio details thumb area start -->
                <div class="tp-portfolio-details-1-thumb-ptb">
                    <div class="container container-1830">
                        <div class="row gx-20">
                            <div class="col-lg-12">
                                <div class="tp-portfolio-details-1-thumb-1 mb-20">
                                    <img data-speed=".8" src="<?= $house['triple'][0] ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="tp-portfolio-details-1-thumb-2 mb-20">
                                    <img data-speed=".8" src="<?= $house['triple'][1] ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="tp-portfolio-details-1-thumb-3 mb-20">
                                    <img data-speed=".8" src="<?= $house['triple'][2] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- portfolio details thumb area start -->


                <!-- portfolio details about start -->
                <div class="tp-portfolio-details-1-about-ptb pb-150">
                    <div class="container container-1230">
                        <div class="row">
                            <div class="col-xl-6 col-lg-5">
                                <div class="tp-pd-1-about-heading tp_fade_anim" data-delay=".3">
                                    <span class="tp-pd-1-about-title"><?= $house['about']['header'][$currentLang] ?><svg xmlns="http://www.w3.org/2000/svg" width="102" height="9" viewBox="0 0 102 9" fill="none">
                                            <path d="M98 7.91996L101.5 4.43813L98 0.956299M1 3.99989H101V4.99989H1V3.99989Z" stroke="black" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="tp-portfolio-details-1-about-content">
                                    <h3 class="tp-pd-1-about-text"><?= $house['about']['title'][$currentLang] ?></h3>
                                    <div class="tp-pd-1-about-list">
                                        <ul>
                                            <?php foreach ($house['about']['highlights'][$currentLang] as $highlight): ?>
                                                <li><?= $highlight ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- portfolio details about end -->


                <!-- portfolio details area start -->
                <div class="tp-portfolio-details-1-area pb-140">
                    <div class="container container-1830">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tp-portfolio-details-1-banner hight">
                                    <img data-speed=".8" src="<?= $house['overview']['image'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- portfolio details area end -->


                <!-- portfolio details work start -->
                <div class="tp-pd-1-work-ptb pb-130">
                    <div class="container container-1230">
                        <div class="tp-pd-1-work-top pb-70">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tp-pd-1-work-heading pb-60 tp_fade_anim" data-delay=".3">
                                        <h2 class="tp-pd-1-work-title"><?= t('details.title') ?></h2>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="tp-pd-1-work-heading tp_fade_anim" data-delay=".5">
                                        <span class="tp-pd-1-about-title"><?= strtoupper(t('details.subtitle')) ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="102" height="9" viewBox="0 0 102 9" fill="none">
                                            <path d="M98 7.91996L101.5 4.43813L98 0.956299M1 3.99989H101V4.99989H1V3.99989Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="tp-pd-1-work-content pl-20 tp_fade_anim" data-delay=".5">
                                        <p><?= t('details.description') ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <?php foreach (t('details.stats') as $stat): ?>
                                <div class="col-lg-6">
                                    <div class="tp-pd-1-work-item mb-30">
                                        <h3 class="tp-pd-1-work-item-title">
                                        <span>
                                            <i data-purecounter-duration="2" data-purecounter-end="<?= $stat[0] ?>" class="purecounter">0</i>%
                                        </span>
                                        </h3>
                                        <div class="tp-pd-1-work-item-text">
                                            <span><?= $stat[1] ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                    </div>
                </div>
                <!-- portfolio details work end -->

                <!-- portfolio details thumb area start -->
                <div class="tp-portfolio-details-1-thumb-ptb pb-140">
                    <div class="container container-1830">
                        <div class="row gx-20">
                            <?php foreach ($house["gallery"] as $image): ?>
                                <div class="col-lg-6">
                                    <div class="tp-portfolio-details-1-thumb-4 mb-10">
                                        <img data-speed=".8" src="<?= $image ?>">
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <!-- portfolio details thumb area start -->

            </main>

            <?php require("components/footer.php"); ?>

        </div>
    </div>


    <!-- JS here -->

    <!-- JS here -->


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