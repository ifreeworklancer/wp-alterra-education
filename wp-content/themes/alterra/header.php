<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<?php wp_head(); ?>
<body>

<?php include(__DIR__ . '/includes/partials/svgs.php') ?>

<?php
$page_id = 80;
$header_date = get_field('header_date', $page_id);
$header_title = get_field('header_title', $page_id);
?>
<!-- Header -->
<header id="app-header">
    <div class="header-nav">
        <div class="burger-menu d-flex flex-column justify-content-center align-items-center">
            <div class="line line--top"></div>
            <div class="line line--middle"></div>
            <div class="line line--bottom"></div>
            <div class="line line-close line--left"></div>
            <div class="line line-close line--right"></div>
        </div>
        <nav class="menu flex-column justify-content-center align-items-center">
            <ul class="menu-list list-unstyled d-flex flex-column justify-content-center align-items-start">
                <li class="menu-list-item">
                    <a href="#reasons" class="menu-list-item__link scroll-link">
                        <?= get_the_title(11); ?>
                    </a>
                </li>
                <li class="menu-list-item">
                    <a href="#packages" class="menu-list-item__link scroll-link">
                        <?= get_the_title(13); ?>
                    </a>
                </li>
                <li class="menu-list-item">
                    <a href="#themes" class="menu-list-item__link scroll-link">
                        <?= get_the_title(15); ?>
                    </a>
                </li>
                <li class="menu-list-item">
                    <a href="#advantages" class="menu-list-item__link scroll-link">
                        <?= get_the_title(17); ?>
                    </a>
                </li>
                <li class="menu-list-item">
                    <a href="#trainer" class="menu-list-item__link scroll-link">
                        <?= get_the_title(19); ?>
                    </a>
                </li>
                <li class="menu-list-item">
                    <a href="#about" class="menu-list-item__link scroll-link">
                        <?= get_the_title(21); ?>
                    </a>
                </li>
                <li class="menu-list-item">
                    <a href="#app-footer" class="menu-list-item__link scroll-link">
                        ЗАПИСАТЬСЯ
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="header-content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-2 mx-auto ml-lg-auto mr-lg-0 ml-xl-0 pl-lg-5">
                    <div class="logo text-uppercase">
                        <a href="#" class="logo__link text-white">alterra</a>
                    </div>
                </div>
                <div class="col-lg-5 px-0">
                    <div class="header-item header-item--time position-relative text-white bg-dark">
                        <?= $header_date; ?>
                    </div>
                </div>
                <div class="col-lg-5 ml-auto mr-0 ml-lg-0 px-0">
                    <div class="header-item header-item--title position-relative text-right text-white bg-dark">
                        <?= $header_title; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Custom Modal -->
<div class="custom-modal custom-modal--package">
    <div class="close-modal">
        <div class="line line--left"></div>
        <div class="line line--right"></div>
    </div>
    <div class="custom-modal-header">
        <h3>
            Записаться
        </h3>
    </div>
    <div class="custom-modal-body">
        <?= do_shortcode('[contact-form-7 id="88" title="Контактная форма пакетов участия"]'); ?>
    </div>
</div>
<div class="modal-mask"></div>

<main>

</main>