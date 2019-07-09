<?php
$page_id = 11;
$page = get_post($page_id);
$subtitle = get_field('section_subtitle', $page_id);
?>
<!-- Reasons -->
<section id="reasons">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto mx-lg-0">
                <div class="reasons-item">
                    <div class="section-description">
                        <h2 class="section-description-title">
                            <div class="section-description-title__decor"><?= get_the_title($page_id); ?>
                                <div class="decoration-line"></div>
                            </div>
                            <div class="section-description-title__simple-text"><?= $subtitle; ?></div>
                        </h2>
                    </div>
                    <?= $page->post_content; ?>
                    <div class="reasons-item-row position-relative text-center text-lg-left">
                        <a href="#app-footer" class="btn btn-primary scroll-link">Записаться</a>
                        <div class="decoration-line position-absolute d-none d-lg-block"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="reasons-img d-none d-lg-block"
         style="background-image: url('<?= get_the_post_thumbnail_url($page_id)?>');"></div>
    <div class="reasons__decoration-text d-none d-lg-block">
        <?= get_the_title($page_id); ?>
    </div>
</section>