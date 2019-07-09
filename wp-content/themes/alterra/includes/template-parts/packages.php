<?php
$page_id = 13;
$subtitle = get_field('section_subtitle', $page_id);
$packages = get_field('packages', $page_id);
?>

<!-- Packages -->
<section id="packages">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-description">
                    <h2 class="section-description-title">
                        <div class="section-description-title__decor">
                            <?= get_the_title($page_id); ?>
                            <div class="decoration-line"></div>
                        </div>
                        <!--                        <div class="section-description-title__simple-text">И СТОИМОСТЬ</div>-->
                    </h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php
            foreach ($packages as $packages_item) :
                foreach ($packages_item as $item) :
                    ?>
                    <div class="col-sm-6 col-lg-4">
                        <div class="packages-card">
                            <div class="packages-card-header py-4 px-5 bg-dark text-white">
                                <div class="packages-card-header__title text-normal text-center text-uppercase">
                                    <?= $item['title'] ?>
                                </div>
                            </div>
                            <div class="packages-card-body p-4">
                                <?= $item['description'] ?>
                            </div>
                            <div class="packages-card-footer">
                                <a href="#"
                                   class="btn btn-primary packages-card-footer__btn d-block open-package">
                                    Записаться
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; endforeach; ?>
        </div>
    </div>
    <div class="packages__decoration-text d-none d-lg-block">
        <?= get_the_title($page_id); ?>
    </div>
</section>