</main>

<!-- Footer -->
<footer id="app-footer">
    <div class="container">
        <div class="col-12">
            <div class="section-description">
                <h2 class="section-description-title">
                    <div class="section-description-title__decor">ЗАПИСАТЬСЯ
                        <div class="decoration-line"></div>
                    </div>
                    <div class="section-description-title__simple-text text-white">НА КОНФЕРЕНЦИЮ</div>
                </h2>
            </div>
        </div>
        <div class="col-12">
            <?= do_shortcode('[contact-form-7 id="5" title="Контактная форма футера"]'); ?>
        </div>
        <div class="footer-item">
            <div class="row flex-column flex-lg-row align-items-center">
                <div class="col-lg-2 text-center text-lg-left mb-3 mb-lg-0">
                    <div class="logo">
                        <a href="#" class="logo__link text-uppercase text-white">
                            Alterra
                        </a>
                    </div>
                </div>
                <div class="col-sm-10">
                    <ul class="footer-list list-unstyled d-flex flex-column flex-lg-row justify-content-between align-items-center">
                        <li class="footer-list-item">
                            <a href="#reasons" class="footer-list-item__link scroll-link">
                                <?= get_the_title(11); ?>
                            </a>
                        </li>
                        <li class="footer-list-item">
                            <a href="#packages" class="footer-list-item__link scroll-link">
                                <?= get_the_title(13); ?>
                            </a>
                        </li>
                        <li class="footer-list-item">
                            <a href="#themes" class="footer-list-item__link scroll-link">
                                <?= get_the_title(15); ?>
                            </a>
                        </li>
                        <li class="footer-list-item">
                            <a href="#advantages" class="footer-list-item__link scroll-link">
                                <?= get_the_title(17); ?>
                            </a>
                        </li>
                        <li class="footer-list-item">
                            <a href="#trainer" class="footer-list-item__link scroll-link">
                                <?= get_the_title(19); ?>
                            </a>
                        </li>
                        <li class="footer-list-item">
                            <a href="#about" class="footer-list-item__link scroll-link">
                                <?= get_the_title(21); ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyr">
            <div class="row">
                <div class="col-12 d-flex flex-column flex-sm-row justify-content-between align-items-center">
                    <div class="footer-copyr-item mb-3 mb-sm-0"><?= date('Y') ?>г. Все права защищены</div>
                    <div class="footer-copyr-item">Дизайн и разработка Impression Bureau</div>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Script -->
<?php wp_footer(); ?>
</body>

</html>