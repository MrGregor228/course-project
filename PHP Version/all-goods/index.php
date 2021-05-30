<?php
require_once "../db/product.php";
$categories = output_categories();
$products = output_products();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Shop | Каталог</title>
</head>

<body>

    <!-- <<<<<<<<<<    HEADER   >>>>>>>>>>   -->
    <div class="modal-window modal-likes">
        <div class="modal-wrapper">
            <div class="modal-heading">
                <h4>Избранное</h4><button class="modal-closer">&times;</button>
            </div>
            <div class="modal-body">
                <div class="flex-container">
                    <div class="empty-container">
                        <img src="../images/cactus.png" alt="">
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
                    <div class="empty-container">
                        <img src="../images/empty-cart.png" alt="">
                        <p>Ваша корзина пуста!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header">
        <nav class="navigation-panel">
            <div class="brand">
                <h2>Mega<span>Shop</span></h2><button class="toggle-button"><img src="../icons/bars.svg"
                        alt="Toggle button bars icon"></button>
            </div>
            <ul id="menu">
                <li><a href="#">О нас</a></li>
                <li><a href="#">Контакты</a></li>
                <li><a href="#">Оплата и доставка</a></li>
                <li><a href="#">Каталог</a></li>
                <li><a href="#">Акции</a></li>
                <li><a href="#" id="toggle-like-modal"><img width="25" src="../icons/heart.svg" alt=""><span
                            id="likes-counter">0</span></a></li>
                <li><a href="#" id="toggle-cart-modal"><img width="25" src="../icons/shopping-cart.svg" alt=""><span
                            id="goods-counter">0</span></a></li>
            </ul>
        </nav>
    </header>
    <!-- <<<<<<<<<<    HEADER   >>>>>>>>>>   -->
    <h1 class="heading">Каталог товаров</h1>
    <main>

        <section class="filter">
            <button id="open-filter"><svg width="15" fill="#fff" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512 512">
                    <path
                        d="M463.952 0H48.057C5.419 0-16.094 51.731 14.116 81.941L176 243.882V416c0 15.108 7.113 29.335 19.2 40l64 47.066c31.273 21.855 76.8 1.538 76.8-38.4V243.882L497.893 81.941C528.042 51.792 506.675 0 463.952 0zM288 224v240l-64-48V224L48 48h416L288 224z" />
                    </svg> Фильтры</button>
            <div class="filter-overlay">
                <div class="container">
                    <div class="filter-header">
                        <h3>Фильтры</h3><span class="close-filter">&times;</span>
                    </div>
                    <div class="filter-body">
                        <form action="#">
                            <fieldset>
                                <legend>Цена</legend>
                                <div class="input-price-group">
                                    <input type="number" name="first-price" value="0"><span>—</span><input type="number"
                                        name="last-price" maxlength="4" max="1000" value="1000"><button class="ok"
                                        type="submit">OK</button>
                                </div>
                                <input type="range" name="price-changer" max="1000" id="change-price">
                            </fieldset>
                            <fieldset>
                                <legend>Категории</legend>
                                <div class="categories-group">
                                <label for="check1"><input type="checkbox" name="All"
                                            id="check1"><span>Все</span></label>
                                <?php foreach($categories as $categorie ):?>
                                <a class = "check" href="?post_id=<?=$categorie['id']?>">
                                    <label for="<?= $categorie ['check_id']?>"><input class="chek" type="checkbox" name="<?= $categorie ['name']?>"
                                            id="<?= $categorie ['check_id']?>"><span><?= $categorie ['title']?></span></label>
                                            </a>
                                 <?php endforeach;?>
                           
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>

        </section>  
      
        <section class="cards-container">
        <form action="../db/ajax.php" metgod="POST">
            <div class="cards-wrapper">
            <?php foreach($products as $product ):?>
                <div class="card" >
                    <div class="card-image">
                        <img src="<?=$product['image']?>" alt="Lenovo">
                        <div class="like">
                            <span><img width="20" src="../icons/card-heart.svg" alt=""></span>
                        </div>
                        <div class="top-ribbon">TOP</div>
                    </div>
                    <div class="card-body">
                        <h6 class="card-heading"><?= $product ['title']?></h6>
                        <div class="card-prices">
                            <p class="gray-price"><?= $product ['leading_price'] ?></p>
                            <div class="card-raiting">
                                <span>4.7 </span><svg width="12" fill="#fff" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="card-prices">
                            <p class="violet-price"><?= $product ['price'] ?></p>
                            <a href="#" class="good-link">
                            <svg width="15" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 192 512">
                                    <path
                                        d="M187.8 264.5L41 412.5c-4.7 4.7-12.3 4.7-17 0L4.2 392.7c-4.7-4.7-4.7-12.3 0-17L122.7 256 4.2 136.3c-4.7-4.7-4.7-12.3 0-17L24 99.5c4.7-4.7 12.3-4.7 17 0l146.8 148c4.7 4.7 4.7 12.3 0 17z" />
                                </svg></a>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </form>
                <script src="">
                $(document).ready(function(){
                        $(button.ok).on('click',function()
                        {
                $.ajax({
                 method: "POST",
                url: "../db/ajax.php",
             
                }).done(function( msg ) {
                alert( "Data Saved: " + msg );
                });
                })
                })

                </script> 
    <script src="../../js/moment.js"></script>
    <script src="./js/toggleModals.js"></script>
    <script src="./js/cart.js"></script>
    <script src="./js/filter.js"></script>
    <script src="../db/ajax.php"></script> 
     <script src="../js/jquery-3.6.0.js"></script>
</body>

</html>