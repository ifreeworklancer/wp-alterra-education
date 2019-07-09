<?php
$page_id = 15;
$subtitle = get_field('section_subtitle', $page_id);
$content = get_field('themes_content', $page_id);
?>
<!-- Themes -->
<section id="themes">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto ml-lg-auto mr-lg-0">
                <div class="themes-item">
                    <div class="section-description">
                        <h2 class="section-description-title">
                            <div class="section-description-title__decor">
                                <?= get_the_title($page_id); ?>
                                <div class="decoration-line"></div>
                            </div>
                            <div class="section-description-title__simple-text"></div>
                        </h2>
                    </div>
                    <?= $content; ?>
                    <div class="themes-item-row position-relative">
                        <div class="decoration-line position-absolute d-none d-lg-block"></div>
                        <div class="themes-item-row__text text-normal text-uppercase">
                            <?= $subtitle; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="themes-img d-none d-lg-block"
             style="background-image: url('<?= get_the_post_thumbnail_url($page_id) ?>');"></div>
        <div class="themes__decoration-text d-none d-lg-block">
            <?= get_the_title($page_id); ?>
        </div>
    </div>
</section>