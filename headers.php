<?php
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Bunny Grocery</title>
<link rel="icon" href="/images/icon.png">
<link rel="stylesheet" href="/fonts/flaticon/flaticon.css">
<link rel="stylesheet" href="/fonts/icofont/icofont.min.css">
<link rel="stylesheet" href="/css/vendor/nice-select.min.css">
<link rel="stylesheet" href="https://www.jq22.com/jquery/jquery-ui-1.11.0.css">
<link rel="stylesheet" href="/css/vendor/venobox.min.css">
<link rel="stylesheet" href="/css/vendor/slick.min.css">
<link rel="stylesheet" href="https://www.jq22.com/jquery/bootstrap-5.0.0.css">
<link rel="stylesheet" href="/css/custom/main.css">
<link rel="stylesheet" href="/css/custom/cart.css">
<link rel="stylesheet" href="/css/custom/index.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css">
</head>
<body>
<section class="header-top">
<div class="container"><!-- container是bootstrap预定义样式 -->
    <div class="row">
    <div class="col-md-12 col-lg-5">
        <div class="header-top-welcome">
        <p>Welcome to Bunny Grocery</p>
        </div>
    </div>
    </div>
</div>
</section>
<section class="header-part">
<div class="container-fluid">
    <div class="header-content-group">
    <div class="header-widget-group left">
        <button class="header-widget header-user" href="#" title="Account"><img src="images/user.png" alt="user"></button>
        <a class="header-logo" href="index.php"><img src="images/logo.png" alt="logo"></a>
        <button class="header-widget header-src" title="Search"><i class="icofont-ui-search"></i></button>
        <button class="header-widget header-cate" title="Cate"><i class="icofont-align-left"></i><span>categories</span></button>
    </div>
    <form class="header-form" action="search_results.php" method="post">
        <input type="text" placeholder="Search Products" name="keyword" id="searchInput">
        <button type="submit" name="submit" id="searchButton"><i class="icofont-ui-search"></i></button>
    </form>      
    <div class="header-widget-group right"><a class="header-widget" href="login.html" title="我的账户"><img src="images/user.png" alt="user"><span>login</span></a><a class="header-widget" href="/more.php" title="商品清单"><i class="icofont-ui-rotation"></i></a><a class="header-widget" href="/coupon.php" title="Coupon"><i class="icofont-ui-love"></i></a>
    <a href="shoppingcart.php" title="Shopping cart">
                    <button class="header-widget header-cart">
                        <i class="icofont-shopping-cart"></i>
                    </button>
                </a>
</div>
</section>
<nav class="navbar-part">
<div class="container">
    <div class="row">
    <div class="col-lg-12">
        <div class="navbar-content">
        <ul class="navbar-list">
            <li class="navbar-item dropdown"><a class="navbar-link dropdown-arrow" href="#">Home</a>
            <ul class="dropdown-position-list">
                <li><a href="index.php">Home</a></li>
            </ul>
            </li>
            <li class="navbar-item dropdown-megamenu"><a class="navbar-link dropdown-arrow" href="#">Categories</a>
            <div class="megamenu">
                <div class="container">
                <div class="row row-cols-5">
                    <div class="col">
                    <div class="megamenu-wrap">
                        <a href="/inseason.php" class="megamenu-title">Inseason</a>
                        <ul class="megamenu-list">
                            <li><a href="/product_detail.php?id=3004">Bananas</a></li>
                            <li><a href="/product_detail.php?id=3005">Peaches</a></li>
                            </ul>
                        </div>
                        </div>
                        <div class="col">
                        <div class="megamenu-wrap">
                            <a href="/petfood.php" class="megamenu-title">Petfood</a>
                            <ul class="megamenu-list">
                            <li><a href="/product_detail.php?id=5000">Dry Dog Food</a></li>
                            <li><a href="/product_detail.php?id=5002">Bird Food</a></li>
                            </ul>
                        </div>
                        </div>
                        <div class="col">
                        <div class="megamenu-wrap">
                            <a href="/forzen.php" class="megamenu-title">Frozen</a>
                            <ul class="megamenu-list">
                            <li><a href="/product_detail.php?id=1000">Fruit Bars</a></li>
                            <li><a href="/product_detail.php?id=1004">Ice Cream</a></li>
                            </ul>
                        </div>
                        </div>
                        <div class="col">
                        <div class="megamenu-wrap">
                            <a href="/beverage.php" class="megamenu-title">Beverage</a>
                            <ul class="megamenu-list">
                            <li><a href="/product_detail.php?id=4000">Earl Grey Tea Bags</a></li>
                            </ul>
                        </div>
                        </div>
                        <div class="col">
                        <div class="megamenu-wrap">
                            <a href="/more.php" class="megamenu-title">More</a>
                            <ul class="megamenu-list">
                            <li><a href="/product_detail.php?id=4001">Earl Grey Tea Bags</a></li>
                            <li><a href="/product_detail.php?id=1001">Fish Fingers</a></li>
                            <li><a href="/product_detail.php?id=1002">Hamburger Patties</a></li>
                            <li><a href="/product_detail.php?id=1003">Shelled Prawns</a></li>
                            <li><a href="/product_detail.php?id=1005">Tub Ice Cream</a></li>
                            <li><a href="/product_detail.php?id=2000">Panadol</a></li>
                            <li><a href="/product_detail.php?id=2001">Panadol 2</a></li>
                            <li><a href="/product_detail.php?id=2002">Bath Soap</a></li>
                            <li><a href="/product_detail.php?id=2003">Garbage Bags Small</a></li>
                            <li><a href="/product_detail.php?id=2004">Garbage Bags Large</a></li>
                            <li><a href="/product_detail.php?id=2005">Washing Powder</a></li>
                            <li><a href="/product_detail.php?id=3000">Cheddar Cheese</a></li>
                            <li><a href="/product_detail.php?id=3001">Cheddar Cheese 2</a></li>
                            <li><a href="/product_detail.php?id=3002">T Bone Steak</a></li>
                            <li><a href="/product_detail.php?id=3003">Navel Oranges</a></li>
                            <li><a href="/product_detail.php?id=3006">Grapes</a></li>
                            <li><a href="/product_detail.php?id=3007">Apples</a></li>
                            <li><a href="/product_detail.php?id=4001">Earl Grey Tea Bags</a></li>
                            <li><a href="/product_detail.php?id=4002">Earl Grey Tea Bags</a></li>
                            <li><a href="/product_detail.php?id=4003">Instant Coffee</a></li>
                            <li><a href="/product_detail.php?id=4004">Instant Coffee</a></li>
                            <li><a href="/product_detail.php?id=4005">Chocolate Bar</a></li>
                            <li><a href="/product_detail.php?id=5001">Dog Food</a></li>
                            <li><a href="/product_detail.php?id=5003">Cat Food</a></li>
                            <li><a href="/product_detail.php?id=5004">Fish Food</a></li>
                            <li><a href="/product_detail.php?id=2006">Laundry Bleach</a></li>

                        </ul>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </li>
            <li class="navbar-item dropdown"><a class="navbar-link dropdown-arrow" href="#">Account</a>
            <ul class="dropdown-position-list">
                <li><a href="login.html">login</a></li>
                <li><a href="register.html">register</a></li>
            </ul>
            </li>
        </ul>
        <div class="navbar-info-group">
            <div class="navbar-info"><i class="icofont-ui-touch-phone"></i>
              <p><small>Contact Me</small><span>(+61) 431 587 57*</span></p>
            </div>
            <div class="navbar-info"><i class="icofont-ui-email"></i>
              <p><small>Email</small><span>jiayao.wang-2@student.uts.edu.au</span></p>
            </div>
          </div>
        </div>
    </div>
    </div>
</div>
</nav>

<aside class="category-part">
<div class="category-container">
    <div class="category-header"><a href="index.php"><img src="images/logo.png" alt="logo"></a>
    <button class="category-close"><i class="icofont-close"></i></button>
    </div>
    <ul class="category-list">
    <li><a class="cate-link dropdown-link" href="#"><i class="flaticon-groceries"></i>Beverages</a>
        <ul class="dropdown-list">
        <li><a href="/product_detail.php?id=4000">Earl Grey Tea Bags</a></li>
        </ul>
    </li>
    <li><a class="cate-link dropdown-link" href="#"><i class="flaticon-fruit"></i>Frozen</a>
        <ul class="dropdown-list">
        <li><a href="/product_detail.php?id=1000">Fruit Bars</a></li>
        <li><a href="/product_detail.php?id=1004">Ice Cream</a></li>
        </ul>
    </li>
    <li><a class="cate-link dropdown-link" href="#"><i class="flaticon-crab"></i>Pet Food</a>
        <ul class="dropdown-list">
        <li><a href="/product_detail.php?id=5000">Dry Dog Food</a></li>
        <li><a href="/product_detail.php?id=5002">Bird Food</a></li>
        </ul>
    </li>
    <div class="category-footer">
    <p>All Rights Reserved by <a href="#">Cahua</a></p>
    </div>
</div>
</aside>
