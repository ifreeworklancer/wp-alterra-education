<?php
/*
* Template name: Thanks Page
* Template type: page
*/
get_header();
$page_id = 67;
?>
    <!-- Page Thanks -->
    <section id="page-thanks" style="background-image:url('<?= get_the_post_thumbnail_url($page_id) ?>');">
        <div class="container h-100 d-flex align-items-center">
            <div class="row w-100">
                <div class="col-sm-6 col-lg-4 mx-auto">
                    <div class="page-thanks-item text-center text-white">
                        <h2 class="page-thanks-item__title mb-4">
                            Спасибо!
                        </h2>
                        <div class="page-thanks-item__text mb-4">
                            Наш менеджер с вами свяжется
                        </div>
                        <a href="/" class="btn btn-primary">
                            На главную
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer('secondary');