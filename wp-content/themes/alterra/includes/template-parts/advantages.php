<?php
$page_id = 17;
$page = get_post($page_id);
$subtitle = get_field('section_subtitle', $page_id);
?>
<!-- Advantages -->
<section id="advantages">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6">
                <div class="advantages-img" style="background-image: url('<?= get_the_post_thumbnail_url($page_id)?>');"></div>
            </div>
            <div class="col-sm-5">
                <div class="section-description">
                    <h2 class="section-description-title">
                        <div class="section-description-title__decor">
                            <?= get_the_title($page_id); ?>
                            <div class="decoration-line"></div>
                        </div>
                        <div class="section-description-title__simple-text"><?= $subtitle; ?></div>
                    </h2>
                </div>
                <div class="advantages-item">
                    <div class="decoration-line"></div>
                    <?= $page->post_content; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="advantages__decoration-text d-none d-sm-block">
        <?= get_the_title($page_id); ?>
    </div>
</section>