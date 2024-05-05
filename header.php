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
   