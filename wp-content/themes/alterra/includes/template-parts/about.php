<?php
$page_id = 21;
$page = get_post($page_id);
$subtitle = get_field('section_subtitle', $page_id);
$iframe_link = get_field('iframe_link', $page_id);
?>
<!-- Packages -->
<section id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 mb-5 mb-md-0">
                <div class="section-description">
                    <h2 class="section-description-title">
                        <div class="section-description-title__decor">
                            <?= get_the_title($page_id); ?>
                            <div class="decoration-line"></div>
                        </div>
                    </h2>
                </div>
                <div class="about-item">
                    <?= $page->post_content; ?>
                </div>
            </div>
            <div class="col-md-7">
                <div class="about-video">
                    <iframe src="<?= $iframe_link ?>" frameborder="0" allow="autoplay; encrypted-media"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="about__decoration-text d-none d-sm-block">
        О нас
    </div>
</section>