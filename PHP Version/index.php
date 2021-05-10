<?php
require_once "db/products/output_tools.php";
require_once "db/interface.php";
$items = header_menu();
$products = output_tools();
$icons = header_icon();
$sliders = page_slider();

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Shop | Main</title>
</head>

<body>
    <header class="header">
        <nav class="navigation-panel">
            <div class="brand">
                <h2>Mega<span>Shop</span></h2><button class="toggle-button"><img src="icons/bars.svg"
                        alt="Toggle button bars icon"></button>
            </div>
            <ul id="menu">
            <?php foreach($items as $item ):?>
                <li><a href="#"><?= $item['title']?></a></li>
           <?php endforeach;?>
           <?php foreach ($icons as $icon):?>
                <li><a href="#"><img width="25" src="<?=$icon['image']?>" alt=""></a></li>
           <?php endforeach;?>
       
            </ul>
          
        </nav>
    </header>
    <main>
        <section class="main-section">
            <!--  Slider main container  -->
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide one">
                        <div class="slide-content-wrapper">
                            <div class="slide-cutted-block">
                                <div>
                                <?php foreach ($sliders as $slider):?>
                                    <h2><?=$slider['title']?></h2>
                                    <h4><?=$slider['subtitle']?></h4>
                                    <p></p><?=$slider['info']?></p>
                                    <button><?=$slider['button']?></button>
                                <?php endforeach;?>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
            <!--  Slider bottom cards  -->
            <div class="bottom-cards">
                <div class="card">
                    <div class="cutted-block">
                        <p>Игрушки</p>
                    </div>
                </div>
                <div class="card">
                    <div class="cutted-block">
                        <p>Аксессуары</p>
                    </div>
                </div>
                <div class="card">
                    <p>Смотреть другие категории</p>
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="37px"
                        height="37px">
                        <path fill-rule="evenodd" fill="rgb(255, 255, 255)"
                            d="M18.706,37.001 C8.602,37.001 0.413,28.811 0.413,18.707 C0.413,8.603 8.602,0.414 18.706,0.414 C28.809,0.414 37.001,8.603 37.001,18.707 C37.001,28.811 28.809,37.001 18.706,37.001 ZM18.708,3.088 C10.096,3.088 3.087,10.095 3.087,18.708 C3.087,27.319 10.096,34.328 18.708,34.328 C27.318,34.328 34.327,27.319 34.327,18.708 C34.327,10.095 27.318,3.088 18.708,3.088 ZM28.342,19.046 C28.333,19.079 28.322,19.111 28.313,19.145 C28.300,19.186 28.289,19.227 28.273,19.266 C28.268,19.277 28.268,19.289 28.262,19.301 C28.255,19.321 28.242,19.339 28.233,19.361 C28.215,19.397 28.197,19.434 28.177,19.471 C28.157,19.505 28.137,19.537 28.115,19.569 C28.095,19.599 28.075,19.629 28.052,19.658 C28.026,19.692 27.997,19.725 27.968,19.756 C27.955,19.771 27.941,19.789 27.926,19.805 L20.658,27.073 C20.355,27.376 19.959,27.528 19.561,27.528 C19.162,27.528 18.766,27.375 18.463,27.071 C17.858,26.465 17.858,25.482 18.463,24.876 L23.082,20.259 L8.705,20.259 C8.275,20.259 7.886,20.086 7.605,19.805 C7.325,19.523 7.151,19.136 7.151,18.707 C7.151,18.385 7.249,18.086 7.416,17.838 C7.694,17.425 8.168,17.154 8.705,17.154 L23.082,17.154 L18.463,12.536 C17.858,11.932 17.858,10.948 18.463,10.342 C19.069,9.736 20.050,9.736 20.658,10.342 L27.926,17.609 C27.941,17.624 27.952,17.640 27.966,17.657 C27.997,17.689 28.026,17.722 28.055,17.758 C28.075,17.784 28.093,17.811 28.110,17.839 C28.135,17.874 28.159,17.909 28.180,17.946 C28.195,17.977 28.211,18.008 28.226,18.040 C28.237,18.064 28.253,18.087 28.264,18.112 C28.268,18.126 28.271,18.142 28.277,18.155 C28.289,18.186 28.300,18.218 28.308,18.250 C28.322,18.292 28.333,18.333 28.342,18.375 C28.351,18.407 28.353,18.438 28.360,18.470 C28.364,18.513 28.373,18.555 28.375,18.598 C28.378,18.632 28.375,18.665 28.375,18.698 C28.378,18.740 28.378,18.781 28.375,18.822 C28.371,18.857 28.366,18.891 28.362,18.925 C28.355,18.966 28.351,19.006 28.342,19.046 Z" />
                    </svg>
                </div>
            </div>
        </section>
        <section class="top-goods">
            <h2>ТОП - товары</h2>
            <div class="cards-container">

                <div class="card">
                    <div class="card-image">
                    <?php foreach( $products as $product):?>
                        <img src="<?=$product ['image']?>" alt="">
                    
                        <div class="like">
                            <span><img width="20" src="icons/card-heart.svg" alt=""></span>
                        </div>
                        <div class="top-ribbon">TOP</div>
                    </div>
                    <div class="card-body">
                        <h6 class="card-heading"><?=$product ['title']?></h6>
                        <div class="card-prices">
                            <p class="gray-price"><?=$product ['price']?></p>
                            <?endforeach;?>
                            <div class="card-raiting">
                                <span>4.7 </span><svg width="12" fill="#fff" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="card-prices">
                            <p class="violet-price">9 999</p>
                            <a href="#" class="good-link"><svg width="15" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 192 512">
                                    <path
                                        d="M187.8 264.5L41 412.5c-4.7 4.7-12.3 4.7-17 0L4.2 392.7c-4.7-4.7-4.7-12.3 0-17L122.7 256 4.2 136.3c-4.7-4.7-4.7-12.3 0-17L24 99.5c4.7-4.7 12.3-4.7 17 0l146.8 148c4.7 4.7 4.7 12.3 0 17z" />
                                </svg></a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="frequently-bought">
            <h2>Часто покупаемые</h2>
            <div class="cards-container">
                <div class="card">
                    <div class="card-image">
                        <img src="images/Lenovo.jpg" alt="">
                        <div class="like">
                            <span><img width="20" src="icons/card-heart.svg" alt=""></span>
                        </div>
                        <div class="top-ribbon">TOP</div>
                    </div>
                    <div class="card-body">
                        <h6 class="card-heading">Ноутбук Lenovo IdeaPad S145-15AST</h6>
                        <div class="card-prices">
                            <p class="gray-price">10 999</p>
                            <div class="card-raiting">
                                <span>4.7 </span><svg width="12" fill="#fff" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="card-prices">
                            <p class="violet-price">9 999</p>
                            <a href="#" class="good-link"><svg width="15" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 192 512">
                                    <path
                                        d="M187.8 264.5L41 412.5c-4.7 4.7-12.3 4.7-17 0L4.2 392.7c-4.7-4.7-4.7-12.3 0-17L122.7 256 4.2 136.3c-4.7-4.7-4.7-12.3 0-17L24 99.5c4.7-4.7 12.3-4.7 17 0l146.8 148c4.7 4.7 4.7 12.3 0 17z" />
                                </svg></a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-image">
                        <img src="images/Lenovo.jpg" alt="">
                        <div class="like">
                            <span><img width="20" src="icons/card-heart.svg" alt=""></span>
                        </div>
                        <div class="top-ribbon">TOP</div>
                    </div>
                    <div class="card-body">
                        <h6 class="card-heading">Ноутбук Lenovo IdeaPad S145-15AST</h6>
                        <div class="card-prices">
                            <p class="gray-price">10 999</p>
                            <div class="card-raiting">
                                <span>4.7 </span><svg width="12" fill="#fff" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="card-prices">
                            <p class="violet-price">9 999</p>
                            <a href="#" class="good-link"><svg width="15" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 192 512">
                                    <path
                                        d="M187.8 264.5L41 412.5c-4.7 4.7-12.3 4.7-17 0L4.2 392.7c-4.7-4.7-4.7-12.3 0-17L122.7 256 4.2 136.3c-4.7-4.7-4.7-12.3 0-17L24 99.5c4.7-4.7 12.3-4.7 17 0l146.8 148c4.7 4.7 4.7 12.3 0 17z" />
                                </svg></a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="for-sale">
            <h2>Акционные предложения</h2>
            <div class="cards-container">
                <div class="card sale" data-good-id="15" data-expiry-date="2021-05-10 00:00:00">
                    <div class="card-image">
                        <img src="images/Lenovo.jpg" alt="">
                        <div class="like">
                            <span><img width="20" src="icons/card-heart.svg" alt=""></span>
                        </div>
                        <div class="top-ribbon">TOP</div>
                    </div>
                    <div class="card-body">
                        <h6 class="card-heading">Ноутбук Lenovo IdeaPad S145-15AST</h6>
                        <div class="card-prices">
                            <div class="sale-container"></div>
                            <div class="card-raiting">
                                <span>4.7 </span><svg width="12" fill="#fff" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="card-prices">
                            <p class="violet-price">9 999</p>
                            <a href="#" class="good-link"><svg width="15" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 192 512">
                                    <path
                                        d="M187.8 264.5L41 412.5c-4.7 4.7-12.3 4.7-17 0L4.2 392.7c-4.7-4.7-4.7-12.3 0-17L122.7 256 4.2 136.3c-4.7-4.7-4.7-12.3 0-17L24 99.5c4.7-4.7 12.3-4.7 17 0l146.8 148c4.7 4.7 4.7 12.3 0 17z" />
                                </svg></a>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
    <footer>
        <div class="footer-content-wrapper">
            <div class="footer-column">
                <h6>Контакты</h6>
                <ul>
                    <li><a href="tel:380123456789">+(38) 012 345 67 89</a></li>
                    <li><a href="mailto:example@gmail.com">example@gmail.com</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Telegram</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h6>Правовая информация</h6>
                <ul>
                    <li><a href="#">Публичная офёрта</a></li>
                    <li><a href="#">Политика конфиденциальности</a></li>
                    <li><a href="#">Оплата и доставка</a></li>
                    <li><a href="#">Возврат денежных средств</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h6>При поддержке</h6>
                <ul>
                    <li>
                        <a href="#">
                            <svg width="50" class="svg-inline--fa fa-cc-visa fa-w-18" aria-hidden="true"
                                focusable="false" data-prefix="fab" data-icon="cc-visa" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                <path fill="white"
                                    d="M470.1 231.3s7.6 37.2 9.3 45H446c3.3-8.9 16-43.5 16-43.5-.2.3 3.3-9.1 5.3-14.9l2.8 13.4zM576 80v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h480c26.5 0 48 21.5 48 48zM152.5 331.2L215.7 176h-42.5l-39.3 106-4.3-21.5-14-71.4c-2.3-9.9-9.4-12.7-18.2-13.1H32.7l-.7 3.1c15.8 4 29.9 9.8 42.2 17.1l35.8 135h42.5zm94.4.2L272.1 176h-40.2l-25.1 155.4h40.1zm139.9-50.8c.2-17.7-10.6-31.2-33.7-42.3-14.1-7.1-22.7-11.9-22.7-19.2.2-6.6 7.3-13.4 23.1-13.4 13.1-.3 22.7 2.8 29.9 5.9l3.6 1.7 5.5-33.6c-7.9-3.1-20.5-6.6-36-6.6-39.7 0-67.6 21.2-67.8 51.4-.3 22.3 20 34.7 35.2 42.2 15.5 7.6 20.8 12.6 20.8 19.3-.2 10.4-12.6 15.2-24.1 15.2-16 0-24.6-2.5-37.7-8.3l-5.3-2.5-5.6 34.9c9.4 4.3 26.8 8.1 44.8 8.3 42.2.1 69.7-20.8 70-53zM528 331.4L495.6 176h-31.1c-9.6 0-16.9 2.8-21 12.9l-59.7 142.5H426s6.9-19.2 8.4-23.3H486c1.2 5.5 4.8 23.3 4.8 23.3H528z">
                                </path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <svg width="50" class="svg-inline--fa fa-cc-mastercard fa-w-18" aria-hidden="true"
                                focusable="false" data-prefix="fab" data-icon="cc-mastercard" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                <path fill="white"
                                    d="M482.9 410.3c0 6.8-4.6 11.7-11.2 11.7-6.8 0-11.2-5.2-11.2-11.7 0-6.5 4.4-11.7 11.2-11.7 6.6 0 11.2 5.2 11.2 11.7zm-310.8-11.7c-7.1 0-11.2 5.2-11.2 11.7 0 6.5 4.1 11.7 11.2 11.7 6.5 0 10.9-4.9 10.9-11.7-.1-6.5-4.4-11.7-10.9-11.7zm117.5-.3c-5.4 0-8.7 3.5-9.5 8.7h19.1c-.9-5.7-4.4-8.7-9.6-8.7zm107.8.3c-6.8 0-10.9 5.2-10.9 11.7 0 6.5 4.1 11.7 10.9 11.7 6.8 0 11.2-4.9 11.2-11.7 0-6.5-4.4-11.7-11.2-11.7zm105.9 26.1c0 .3.3.5.3 1.1 0 .3-.3.5-.3 1.1-.3.3-.3.5-.5.8-.3.3-.5.5-1.1.5-.3.3-.5.3-1.1.3-.3 0-.5 0-1.1-.3-.3 0-.5-.3-.8-.5-.3-.3-.5-.5-.5-.8-.3-.5-.3-.8-.3-1.1 0-.5 0-.8.3-1.1 0-.5.3-.8.5-1.1.3-.3.5-.3.8-.5.5-.3.8-.3 1.1-.3.5 0 .8 0 1.1.3.5.3.8.3 1.1.5s.2.6.5 1.1zm-2.2 1.4c.5 0 .5-.3.8-.3.3-.3.3-.5.3-.8 0-.3 0-.5-.3-.8-.3 0-.5-.3-1.1-.3h-1.6v3.5h.8V426h.3l1.1 1.4h.8l-1.1-1.3zM576 81v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V81c0-26.5 21.5-48 48-48h480c26.5 0 48 21.5 48 48zM64 220.6c0 76.5 62.1 138.5 138.5 138.5 27.2 0 53.9-8.2 76.5-23.1-72.9-59.3-72.4-171.2 0-230.5-22.6-15-49.3-23.1-76.5-23.1-76.4-.1-138.5 62-138.5 138.2zm224 108.8c70.5-55 70.2-162.2 0-217.5-70.2 55.3-70.5 162.6 0 217.5zm-142.3 76.3c0-8.7-5.7-14.4-14.7-14.7-4.6 0-9.5 1.4-12.8 6.5-2.4-4.1-6.5-6.5-12.2-6.5-3.8 0-7.6 1.4-10.6 5.4V392h-8.2v36.7h8.2c0-18.9-2.5-30.2 9-30.2 10.2 0 8.2 10.2 8.2 30.2h7.9c0-18.3-2.5-30.2 9-30.2 10.2 0 8.2 10 8.2 30.2h8.2v-23zm44.9-13.7h-7.9v4.4c-2.7-3.3-6.5-5.4-11.7-5.4-10.3 0-18.2 8.2-18.2 19.3 0 11.2 7.9 19.3 18.2 19.3 5.2 0 9-1.9 11.7-5.4v4.6h7.9V392zm40.5 25.6c0-15-22.9-8.2-22.9-15.2 0-5.7 11.9-4.8 18.5-1.1l3.3-6.5c-9.4-6.1-30.2-6-30.2 8.2 0 14.3 22.9 8.3 22.9 15 0 6.3-13.5 5.8-20.7.8l-3.5 6.3c11.2 7.6 32.6 6 32.6-7.5zm35.4 9.3l-2.2-6.8c-3.8 2.1-12.2 4.4-12.2-4.1v-16.6h13.1V392h-13.1v-11.2h-8.2V392h-7.6v7.3h7.6V416c0 17.6 17.3 14.4 22.6 10.9zm13.3-13.4h27.5c0-16.2-7.4-22.6-17.4-22.6-10.6 0-18.2 7.9-18.2 19.3 0 20.5 22.6 23.9 33.8 14.2l-3.8-6c-7.8 6.4-19.6 5.8-21.9-4.9zm59.1-21.5c-4.6-2-11.6-1.8-15.2 4.4V392h-8.2v36.7h8.2V408c0-11.6 9.5-10.1 12.8-8.4l2.4-7.6zm10.6 18.3c0-11.4 11.6-15.1 20.7-8.4l3.8-6.5c-11.6-9.1-32.7-4.1-32.7 15 0 19.8 22.4 23.8 32.7 15l-3.8-6.5c-9.2 6.5-20.7 2.6-20.7-8.6zm66.7-18.3H408v4.4c-8.3-11-29.9-4.8-29.9 13.9 0 19.2 22.4 24.7 29.9 13.9v4.6h8.2V392zm33.7 0c-2.4-1.2-11-2.9-15.2 4.4V392h-7.9v36.7h7.9V408c0-11 9-10.3 12.8-8.4l2.4-7.6zm40.3-14.9h-7.9v19.3c-8.2-10.9-29.9-5.1-29.9 13.9 0 19.4 22.5 24.6 29.9 13.9v4.6h7.9v-51.7zm7.6-75.1v4.6h.8V302h1.9v-.8h-4.6v.8h1.9zm6.6 123.8c0-.5 0-1.1-.3-1.6-.3-.3-.5-.8-.8-1.1-.3-.3-.8-.5-1.1-.8-.5 0-1.1-.3-1.6-.3-.3 0-.8.3-1.4.3-.5.3-.8.5-1.1.8-.5.3-.8.8-.8 1.1-.3.5-.3 1.1-.3 1.6 0 .3 0 .8.3 1.4 0 .3.3.8.8 1.1.3.3.5.5 1.1.8.5.3 1.1.3 1.4.3.5 0 1.1 0 1.6-.3.3-.3.8-.5 1.1-.8.3-.3.5-.8.8-1.1.3-.6.3-1.1.3-1.4zm3.2-124.7h-1.4l-1.6 3.5-1.6-3.5h-1.4v5.4h.8v-4.1l1.6 3.5h1.1l1.4-3.5v4.1h1.1v-5.4zm4.4-80.5c0-76.2-62.1-138.3-138.5-138.3-27.2 0-53.9 8.2-76.5 23.1 72.1 59.3 73.2 171.5 0 230.5 22.6 15 49.5 23.1 76.5 23.1 76.4.1 138.5-61.9 138.5-138.4z">
                                </path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="last-column">
                <hr>
                <span>&copy; MegaShop</span>
            </div>
        </div>
    </footer>
    <script src="js/swiper.min.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/main-page.js"></script>
</body>

</html>