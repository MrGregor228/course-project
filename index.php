<?php
require_once "db/interface.php";
$items = header_menu();
$icons = header_icon();
$sliders = page_slider();
$categories = select_categories();
$footer_icons = footer_icons();
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
    <!-- MODAL WINDOW ADDED -->
    <div class="modal-window modal-likes">
        <div class="modal-wrapper">
            <div class="modal-heading">
                <h4>Избранное</h4><button class="modal-closer">&times;</button>
            </div>
            <div class="modal-body">
                <div class="flex-container">
                    <!-- Тут будут избранные товары -->
                    <div class="empty-container">
                        <img src="images/cactus.png" alt="">
                        <p>У Вас пока нет избранных товаров!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-window modal-cart">
        <div class="modal-wrapper">
            <div class="modal-heading">
                <h4>Корзина</h4><button class="modal-closer">&times;</button>
            </div>
            <div class="modal-body">
                <div class="flex-container">
                    <!-- Тут будут товары в корзине -->
                    <div class="empty-container">
                        <img src="images/empty-cart.png" alt="">
                        <p>Ваша корзина пуста!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL WINDOW ADDED -->
    <header class="header">
        <nav class="navigation-panel">
            <div class="brand">
                <h2>Mega<span>Shop</span></h2><button class="toggle-button"><img src="icons/bars.svg"
                        alt="Toggle button bars icon"></button>
            </div>
            <ul id="menu">
<<<<<<< HEAD:index.php
            <?php foreach($items as $item ):?>
                <li><a href="#"><?= $item['title']?></a></li>
           <?php endforeach;?>
           
           <?php foreach ($icons as $icon):?>
                <li><a href="#" id="toggle-like-modal"><img width="25" src="<?=$icon['image']?>" alt=""><span
=======
                <li><a href="#">О нас</a></li>
                <li><a href="#">Контакты</a></li>
                <li><a href="#">Оплата и доставка</a></li>
                <li><a href="./all-goods/">Каталог</a></li>
                <li><a href="#">Акции</a></li>
                <li><a href="#" id="toggle-like-modal"><img width="25" src="icons/heart.svg" alt=""><span
>>>>>>> 076442a77efc94640a417e33560f74548076e7da:index.html
                            id="likes-counter">0</span></a></li>
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
                    <?php foreach ($sliders as $slider):?>
                    <div class="swiper-slide" style="background-image: url('<?=$slider['image']?>')">
                        <div class="slide-content-wrapper">
                            <div class="slide-cutted-block" style="background-color: rgba(83, 63, 129, 0.9)">
                                <div>
                               
                                    <h2><?=$slider['title']?></h2>
                                    <h4><?=$slider['subtitle']?></h4>
                                    <p><?=$slider['info']?></p>
                                    <button><?=$slider['button']?></button>
                            
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                    
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
            <!--  Slider bottom cards  -->
            <div class="bottom-cards">
            <?php foreach( $categories as $categorie):?>
                <div class="card" style="background-image: url('<?=$categorie['image']?>')">
                    <div class="cutted-block">
                        <p><?=$categorie['title']?></p>
                    </div>
                </div>
                <?endforeach;?>

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
                <div class="cards-wrapper">
                    <div class="card" data-good-id="1">
                        <div class="card-image">
                            <img src="images/Lenovo.jpg" alt="Lenovo">
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

                    <div class="card" data-good-id="2">
                        <div class="card-image">
                            <img src="images/Lenovo.jpg" alt="Lenovo">
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
            </div>
            <a href="#" class="watch-more">Смотреть все <svg fill="white" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 192 512">
                    <path
                        d="M187.8 264.5L41 412.5c-4.7 4.7-12.3 4.7-17 0L4.2 392.7c-4.7-4.7-4.7-12.3 0-17L122.7 256 4.2 136.3c-4.7-4.7-4.7-12.3 0-17L24 99.5c4.7-4.7 12.3-4.7 17 0l146.8 148c4.7 4.7 4.7 12.3 0 17z" />
                </svg></a>
        </section>
        <section class="frequently-bought">
            <h2>Часто покупаемые</h2>
            <div class="cards-container">
                <div class="cards-wrapper">
                    <div class="card" data-good-id="3">
                        <div class="card-image">
                            <img src="images/Lenovo.jpg" alt="Lenovo">
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
                    <div class="card" data-good-id="4">
                        <div class="card-image">
                            <img src="images/Lenovo.jpg" alt="Lenovo">
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
            </div>
            <a href="#" class="watch-more">Смотреть все <svg fill="white" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 192 512">
                    <path
                        d="M187.8 264.5L41 412.5c-4.7 4.7-12.3 4.7-17 0L4.2 392.7c-4.7-4.7-4.7-12.3 0-17L122.7 256 4.2 136.3c-4.7-4.7-4.7-12.3 0-17L24 99.5c4.7-4.7 12.3-4.7 17 0l146.8 148c4.7 4.7 4.7 12.3 0 17z" />
                </svg></a>
        </section>
        <section class="for-sale">
            <h2>Акционные предложения</h2>
            <div class="cards-container">
                <div class="cards-wrapper">
                    <div class="card sale" data-good-id="5" data-expiry-date="2021-05-14 00:00:00">
                        <div class="card-image">
                            <img src="images/Lenovo.jpg" alt="Lenovo">
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
            </div>
            <a href="#" class="watch-more">Смотреть все <svg fill="white" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 192 512">
                    <path
                        d="M187.8 264.5L41 412.5c-4.7 4.7-12.3 4.7-17 0L4.2 392.7c-4.7-4.7-4.7-12.3 0-17L122.7 256 4.2 136.3c-4.7-4.7-4.7-12.3 0-17L24 99.5c4.7-4.7 12.3-4.7 17 0l146.8 148c4.7 4.7 4.7 12.3 0 17z" />
                </svg></a>
        </section>
    </main>
    <footer>
        <div class="footer-content-wrapper">
            <div class="footer-column">
                <h6>Контакты</h6>
                <ul>
                    <li><svg width="20" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z" />
                        </svg>&nbsp;&nbsp;<a href="tel:380123456789">+(38) 012 345 67 89</a></li>
                    <li><svg width="20" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path
                                d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z" />
                        </svg>&nbsp;&nbsp;<a href="mailto:example@gmail.com">example@gmail.com</a></li>
                    <li><svg width="20" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                d="M400 32H48A48 48 0 0 0 0 80v352a48 48 0 0 0 48 48h137.25V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.27c-30.81 0-40.42 19.12-40.42 38.73V256h68.78l-11 71.69h-57.78V480H400a48 48 0 0 0 48-48V80a48 48 0 0 0-48-48z" />
                        </svg>&nbsp;&nbsp;<a href="#">Facebook</a></li>
                    <li><svg width="20" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg>&nbsp;&nbsp;<a href="#">Instagram</a></li>
                    <li><svg width="20" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                            <path
                                d="M248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm121.8 169.9l-40.7 191.8c-3 13.6-11.1 16.9-22.4 10.5l-62-45.7-29.9 28.8c-3.3 3.3-6.1 6.1-12.5 6.1l4.4-63.1 114.9-103.8c5-4.4-1.1-6.9-7.7-2.5l-142 89.4-61.2-19.1c-13.3-4.2-13.6-13.3 2.8-19.7l239.1-92.2c11.1-4 20.8 2.7 17.2 19.5z" />
                        </svg>&nbsp;&nbsp;<a href="#">Telegram</a></li>
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
                <>
                    <li>
                        <a href="#">
                        
                        </a>
                    </li>
                </ul>
            </div>
            <div class="last-column">
                <hr>
                <span>&copy; MegaShop 2021 - <span id="nowYear"></span></span>
            </div>
        </div>
    </footer>
    <script src="js/swiper.min.js"></script>
    <script src="js/moment.js"></script>
    <script src="js/main-page.js"></script>
    <script src="js/toggleModals.js"></script>
    <script src="js/cart.js"></script>
</body>

</html>