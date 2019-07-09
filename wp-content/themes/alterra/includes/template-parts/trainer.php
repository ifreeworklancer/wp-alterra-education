<?php
$page_id = 19;
$subtitle = get_field('section_subtitle', $page_id);
$trainer_card = get_field('trainer_card', $page_id);
?>
<!-- Trainer -->
<section id="trainer">
    <div class="container">
        <div class="row">
            <div class="col-sm-10">
                <div class="section-description">
                    <h2 class="section-description-title d-block">
                        <div class="section-description-title__decor d-inline">
                            <?= get_the_title($page_id); ?>
                            <div class="decoration-line"></div>
                        </div>
                        <div class="section-description-title__simple-text">
                            <?= $subtitle; ?>
                        </div>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($trainer_card as $trainer_card_item) :
                foreach ($trainer_card_item as $item) :
                    ?>
                    <div class="col-lg-6">
                        <div class="trainer-card">
                            <div class="trainer-card-img"
                                 style="background-image: url('<?= $item['image']['url'] ?>');"></div>
                            <div class="trainer-card-description">
                                <h3 class="trainer-card-description__name"><?= $item['name'] ?></h3>
                                <div class="trainer-card-description__data"><?= $item['date'] ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; endforeach; ?>
        </div>
    </div>
</section>