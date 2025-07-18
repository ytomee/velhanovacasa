<!-- header area start -->

    <header>

    <!-- header area start -->
        <div class="tp-header-8-area header-transparent tp-header-8-border" data-bg-color="#f2f1ee">
            <div class="container container-1750">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-header-8-wrapper d-flex align-items-center justify-content-between">
                            <div class="tp-header-8-left d-flex align-items-center">
                                <div class="tp-header-8-bar-wrap">
                                    <button class="tp-header-8-bar tp-offcanvas-open-btn">
                                        <span>Menu</span>
                                        <span>
                                            <svg width="24" height="8" viewBox="0 0 24 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 0H14V1.5H0V0Z" fill="currentcolor" />
                                                <path d="M0 6H24V7.5H0V6Z" fill="currentcolor" />
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                                <div class="tp-header-8-lang d-none d-md-block">
                                    <a href="#" data-lang="pt">PT</a>
                                    <a href="#" data-lang="en">EN</a>
                                </div>
                            </div>
                            <div class="tp-header-8-middle">
                                <div class="tp-header-logo">
                                    <a href="/"><img data-width="120" src="assets/img/logo/logoBlack.svg" alt=""></a>
                                </div>
                            </div>
                            <div class="tp-header-8-right d-flex align-items-center d-none d-md-inline-flex">
                                <div class="tp-btn-socials">
                                    <a href="" target="_blank" rel="noopener noreferrer">
                                        Whatsapp
                                    </a>
                                </div>
                                <div class="tp-header-8-btn">
                                    <a class="tp-btn-border-2" href="contact.php">
                                        <?= t('contactUs') ?>
                                        <span>
                                            <svg width="6" height="10" viewBox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 9L5 5L1 1" stroke="currentcolor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="tp-mobile-menu-active d-none">
            <ul>
                <?php foreach (t('canvas.items') as $item): ?>
                    <li class="p-static">
                        <a href="<?= $item['href'] ?>"><?= $item['label'] ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>
    <!-- header area end -->

    </header>

<!-- header area end -->

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const currentLang = localStorage.getItem("lang") || getCookie("lang") || "pt";

        document.querySelectorAll('.tp-header-8-lang a').forEach(link => {
            const lang = link.getAttribute("data-lang");
            if (lang === currentLang) {
                link.classList.add("active");
            } else {
                link.classList.remove("active");
            }
        });
    });

    function getCookie(name) {
        const match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
    return match ? match[2] : null;
    }
</script>