<?php
$page_id = 9;
$subtitle = get_field('section_subtitle', $page_id);
?>
<!-- Intro -->
<section id="intro" style="background-image:url('<?= get_the_post_thumbnail_url($page_id)?>');">
    <div class="container h-100 d-flex justify-content-start align-items-center position-relative">
        <div class="col-sm-8 p-0">
            <div class="intro-item">
                <h1 class="intro-item__title text-white mb-3">
                    <?= get_the_title($page_id); ?>
                </h1>
                <h2 class="intro-item__description mb-3">
                    <?= $subtitle; ?>
                </h2>
                <div class="intro-item-row d-flex align-items-center">
                    <div class="decoration-line mr-5"></div>
                    <a href="#app-footer" class="btn btn-primary scroll-link">Записаться</a>
                </div>
            </div>
        </div>
        <ul class="social-list list-unstyled d-flex">
            <li class="social-list-item social-list-item--facebook mr-3">
                <a href="<?= get_theme_mod('facebook'); ?>">
                    <svg width="25" height="25">
                        <use xlink:href="#facebook-icon"></use>
                    </svg>
                </a>
            </li>
            <li class="social-list-item social-list-item--instagram mr-3">
                <a href="<?= get_theme_mod('instagram'); ?>">
                    <svg width="25" height="25">
                        <use xlink:href="#instagram-icon"></use>
                    </svg>
                </a>
            </li>
            <li class="social-list-item social-list-item--youtube">
                <a href="<?= get_theme_mod('youtube'); ?>">
                    <svg width="25" height="25">
                        <use xlink:href="#youtube-icon"></use>
                    </svg>
                </a>
            </li>
        </ul>
    </div>
    <div class="intro__decoration-text d-none d-lg-block">
        <?= get_the_title($page_id); ?>
    </div>

    <a href="#reasons"
       class="scroll-down scroll-link position-absolute d-none d-sm-flex justify-content-center align-items-center">
        <div class="scroll-down__text text-white position-absolute">скролл вниз</div>
        <div class="scroll-down-icon position-relative">
            <div class="scroll-down-icon__line position-absolute"></div>
        </div>
    </a>
</section>