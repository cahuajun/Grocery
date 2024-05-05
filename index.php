<?php include 'headers.php'; ?>

<section class="home-index-slider slider-arrow slider-dots">
  <div class="banner-part banner-1">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 col-lg-6">
          <div class="banner-content">
            <h1>Free delivery over 150$</h1>
            <div class="banner-btn"><a class="btn btn-inline" href="shoppingcart.php"><i class="icofont-shopping-cart"></i><span>shopping cart</span></a><a class="btn btn-outline" href="coupon.php"><i class="icofont-sale-discount"></i><span>coupon</span></a></div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="banner-img"><img src="images/banner6.png" alt="index"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="banner-part banner-2">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 col-lg-6">
          <div class="banner-img"><img src="images/slogan1.png" alt="index"></div>
        </div>
        <div class="col-md-6 col-lg-6">
          <div class="banner-content">
            <h1>Free delivery over 150$</h1>
            <div class="banner-btn"><a class="btn btn-inline" href="shoppingcart.php"><i class="icofont-shopping-cart"></i><span>shopping cart</span></a><a class="btn btn-outline" href="coupon.php"><i class="icofont-sale-discount"></i><span>coupon</span></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section suggest-part">
  <div class="container">
    <ul class="suggest-slider slider-arrow">
      <li><a class="suggest-card" href="/inseason.php"><img src="images/suggest/01.jpg" alt="suggest">
        <h5>Vegetables<span>Organic</span></h5>
        </a></li>
      <li><a class="suggest-card" href="/inseason.php"><img src="images/suggest/02.jpg" alt="suggest">
        <h5>Fruit<span>Fresh</span></h5>
        </a></li>
      <li><a class="suggest-card" href="/beverage.php"><img src="images/suggest/03.jpg" alt="suggest">
        <h5>Beverages <span>Cheap</span></h5>
        </a></li>
      <li><a class="suggest-card" href="/beverage.php"><img src="images/suggest/04.jpg" alt="suggest">
        <h5>Milk<span>Fresh</span></h5>
        </a></li>
      <li><a class="suggest-card" href="/beverage.php"><img src="images/suggest/05.jpg" alt="suggest">
        <h5>Seafood<span>Fresh</span></h5>
        </a></li>
      <li><a class="suggest-card" href="/petfood.php"><img src="images/suggest/07.jpg" alt="suggest">
        <h5>Pet Food<span></span></h5>
        </a></li>
      <li><a class="suggest-card" href="/more.php"><img src="images/suggest/06.jpg" alt="suggest">
        <h5>Others<span>Found Fresh</span></h5>
        </a></li>
    </ul>
  </div>
</section>
<style>
.countdown-time span {
  font-size: 24px;
  margin-right: 10px;
}

.countdown-time small {
  font-size: 14px;
}
</style>

<section class="section countdown-part">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 mx-auto">
        <div class="countdown-content">
          <h3>Specials</h3>
          <p>1/2 price!</p>
          <div id="countdown" class="countdown-time">
            <span id="days">00 <small>days</small></span>
            <span id="hours">00 <small>hours</small></span>
            <span id="minutes">00 <small>mins</small></span>
            <span id="seconds">00 <small>secs</small></span>
          </div>
          <a href="/more.php" class="btn btn-inline">
            <i class="icofont-shopping-cart"></i>
            <span>Shop now</span>
          </a>
        </div>
      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-5">
        <div class="countdown-img">
          <img src="images/countdown.png" alt="countdown">
          <div class="countdown-off"><span></span><span>50%</span></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section recent-part">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-heading">
          <h2 style ="font-style: italic; font-size:30px; font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif; color: green;">Hot Sale</h2>
        </div>
      </div>
    </div>
    <div class="row row-cols-lg-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
    <style>
    .product-card {
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* 分散对齐卡片内的元素 */
    height: 450px; /* 统一卡片高度 */
    overflow: hidden; /* 防止内容溢出 */
    border: 1px solid #ccc;
    padding: 15px;
    background-color: #f9f9f9;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1); /* 添加阴影以增强视觉效果 */
}

.product-media {
    height: 60%; /* 为图片和视频区域分配60%的卡片高度 */
    overflow: hidden; /* 隐藏溢出部分 */
}

.product-media img {
    width: 100%; /* 使图片宽度充满容器 */
    height: 100%; /* 使图片高度充满指定区域 */
    object-fit: cover; /* 保持图片比例，填充整个元素框 */
}

.product-content {
    height: 40%; /* 为内容区域分配剩余的40%高度 */
    display: flex;
    flex-direction: column;
    justify-content: space-around; /* 分散对齐内部元素 */
}

.product-name, .product-price, .product-add {
    text-align: center; /* 居中对齐文本 */
}

.action-input {
    text-align: center; /* 数量输入居中显示 */
    margin: 10px 0; /* 添加上下外边距 */
}

.action-minus, .action-plus {
    cursor: pointer; /* 指针样式显示为手型 */
}
</style>
      <div class="col">
        <div class="product-card">
          <div class="product-media">
            <div class="product-label">
              <label class="label-text sale">Hot Sale</label>
            </div>
            <button class="product-wish wish"><i class="icofont-ui-love"></i></button>
            <a class="product-image" href="/product_detail.php?id=3004"><img src="images/3004.png" alt="product"></a>
            <div class="product-widget"><a title="Product Video" href="https://www.bilibili.com" class="venobox icofont-ui-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="icofont-eye-alt" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
          </div>
          <div class="product-content">
            <div class="product-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="#">Stock</a></div>
            <h6 class="product-name"><a href="/product_detail.php?id=3004">Bananas</a></h6>
            <h6 class="product-price"><span>1.49$ <small>/Kilo</small></span></h6>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="product-card">
          <div class="product-media">
            <div class="product-label">
              <label class="label-text sale">Hot Sale</label>
              <label class="label-text new">New</label>
            </div>
            <button class="product-wish wish"><i class="icofont-ui-love"></i></button>
            <a class="product-image" href="/product_detail.php?id=3005"><img src="images/3005.png" alt="product"></a>
            <div class="product-widget"><a title="Product Video" href="https://www.bilibili.com" class="venobox icofont-ui-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="icofont-eye-alt" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
          </div>
            <div class="product-content">
              <div class="product-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="#">Stock</a></div>
              <h6 class="product-name"><a href="/product_detail.php?id=3005".html">Peaches</a></h6>
              <h6 class="product-price"><span>2.99$ <small>/Kilo</small></span></h6>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="product-card">
          <div class="product-media">
            <div class="product-label">
              <label class="label-text sale">Hot Sale</label>
            </div>
            <button class="product-wish wish"><i class="icofont-ui-love"></i></button>
            <a class="product-image" href="/product_detail.php?id=5000"><img src="images/5000.png" alt="product"></a>
            <div class="product-widget"><a title="Product Video" href="https://www.bilibili.com" class="venobox icofont-ui-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="icofont-eye-alt" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
          </div>
          <div class="product-content">
            <div class="product-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="#">Stock</a></div>
            <h6 class="product-name"><a href="/product_detail.php?id=5000">Dry Dog food</a></h6>
            <h6 class="product-price"><span>1.49$ <small>/Kilo</small></span></h6>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="product-card">
          <div class="product-media">
            <div class="product-label">
              <label class="label-text sale">Hot sale</label>
            </div>
            <button class="product-wish wish"><i class="icofont-ui-love"></i></button>
            <a class="product-image" href="/product_detail.php?id=5002"><img src="images/5002.png" alt="product"></a>
            <div class="product-widget"><a title="Product Video" href="https://www.bilibili.com" class="venobox icofont-ui-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="icofont-eye-alt" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
          </div>
          <div class="product-content">
            <div class="product-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="#">Stock</a></div>
            <h6 class="product-name"><a href="/product_detail.php?id=5002">Bird Food</a></h6>
            <h6 class="product-price"><span>2.99$ <small>/Kilo</small></span></h6>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="product-card">
          <div class="product-media">
            <div class="product-label">
              <label class="label-text sale">Hot Sale</label>
            </div>
            <button class="product-wish wish"><i class="icofont-ui-love"></i></button>
            <a class="product-image" href="/product_detail.php?id=1004"><img src="images/1004.png" alt="product"></a>
            <div class="product-widget"><a title="Product Video" href="https://www.bilibili.com" class="venobox icofont-ui-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="icofont-eye-alt" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
          </div>
          <div class="product-content">
            <div class="product-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="#">Stock</a></div>
            <h6 class="product-name"><a href="/product_detail.php?id=1004">Ice Cream</a></h6>
            <h6 class="product-price"><span>2.99$ <small>/Kilo</small></span></h6>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="product-card">
          <div class="product-media">
            <div class="product-label">
              <label class="label-text sale">Hot</label>
            </div>
            <button class="product-wish wish"><i class="icofont-ui-love"></i></button>
            <a class="product-image" href="/product_detail.php?id=1000"><img src="/images/1000.png" alt="product"></a>
            <div class="product-widget"><a title="Product Video" href="https://www.bilibili.com" class="venobox icofont-ui-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="icofont-eye-alt" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
          </div>
          <div class="product-content">
            <div class="product-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="#">Stock</a></div>
            <h6 class="product-name"><a href="/product_detail.php?id=1000">Fruit Bar</a></h6>
            <h6 class="product-price"><span>1.49$ <small>/Kilo</small></span></h6>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="product-card">
          <div class="product-media">
            <div class="product-label">
              <label class="label-text sale">Hot</label>
            </div>
            <button class="product-wish wish"><i class="icofont-ui-love"></i></button>
            <a class="product-image" href="/product_detail.php?id=4000"><img src="images/4000.png" alt="product"></a>
            <div class="product-widget"><a title="Product Video" href="https://www.bilibili.com" class="venobox icofont-ui-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="icofont-eye-alt" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
          </div>
          <div class="product-content">
            <div class="product-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="#">Stock</a></div>
            <h6 class="product-name"><a href="/product_detail.php?id=4000">Earl Grey Tea Bags</a></h6>
            <h6 class="product-price"><span>1.49$ <small>/Kilo</small></span></h6>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="product-card">
          <div class="product-media">
            <div class="product-label">
              <label class="label-text sale">Hot</label>
            </div>
            <button class="product-wish wish"><i class="icofont-ui-love"></i></button>
            <a class="product-image" href="/product_detail.php?id=4000"><img src="images/2000.png" alt="product"></a>
            <div class="product-widget"><a title="Product Video" href="https://www.bilibili.com" class="venobox icofont-ui-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="icofont-eye-alt" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
          </div>
          <div class="product-content">
            <div class="product-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="#">Stock</a></div>
            <h6 class="product-name"><a href="/product_detail.php?id=2000">Panadol</a></h6>
            <h6 class="product-price"><span>3.00$ <small>/Pack 24</small></span></h6>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="product-card">
          <div class="product-media">
            <div class="product-label">
              <label class="label-text sale">Hot</label>
            </div>
            <button class="product-wish wish"><i class="icofont-ui-love"></i></button>
            <a class="product-image" href="/product_detail.php?id=4000"><img src="images/3000.png" alt="product"></a>
            <div class="product-widget"><a title="Product Video" href="https://www.bilibili.com" class="venobox icofont-ui-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="icofont-eye-alt" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
          </div>
          <div class="product-content">
            <div class="product-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="#">Stock</a></div>
            <h6 class="product-name"><a href="/product_detail.php?id=3000">Cheddar Cheese</a></h6>
            <h6 class="product-price"><span>8.00$ <small>/500 gram</small></span></h6>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="product-card">
          <div class="product-media">
            <div class="product-label">
              <label class="label-text sale">Hot</label>
            </div>
            <button class="product-wish wish"><i class="icofont-ui-love"></i></button>
            <a class="product-image" href="/product_detail.php?id=4000"><img src="images/3002.png" alt="product"></a>
            <div class="product-widget"><a title="Product Video" href="https://www.bilibili.com" class="venobox icofont-ui-play" data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#" class="icofont-eye-alt" data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
          </div>
          <div class="product-content">
            <div class="product-rating"><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="active icofont-star"></i><i class="icofont-star"></i><a href="#">Stock</a></div>
            <h6 class="product-name"><a href="/product_detail.php?id=3002">T Bone Steak</a></h6>
            <h6 class="product-price"><span>7.0$ <small>/1000 Gram</small></span></h6>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="section-btn-25"><a href="/more.php" class="btn btn-outline"><i class="icofont-eye-alt"></i><span>Show more</span></a></div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>