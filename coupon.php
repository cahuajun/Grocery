<?php include 'header.php';?>
<aside class="cart-part" id="cartSidebar">
  <div class="cart-container">
    <div class="cart-header">
      <div class="cart-total"><span class="icofont-shopping-cart"></span><span id="cartCount">Number(0)</span>
      </div>
      <button class="cart-close" onclick="toggleCart(false)"><i class="icofont-close"></i></button>
    </div>
    <ul class="cart-list" id="cartItems">
      <!-- Cart items will be dynamically inserted here -->
    </ul>
    <div class="cart-footer">
      <button class="coupon-btn" onclick="toggleCouponForm()">Coupon?</button>
      <form class="coupon-form hidden" id="couponForm" onsubmit="applyCoupon(event)">
        <input type="text" placeholder="Input coupon" id="couponInput">
        <button type="submit"><span>Submit</span></button>
      </form>
      <form action="delivery.php" method="GET" id ="submitform">
        <button type="submit" class="cart-checkout-btn" id="checkoutBtn">
            <span class="checkout-label">Place An Order</span>
            <span class="checkout-price" id="totalPrice">$0.0</span>
        </button>
    </form>
    </div>
  </div>
</aside>
<section class="inner-section single-banner">
  <div class="container">
    <h2>Coupon</h2>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Coupon</li>
    </ol>
  </div>
</section>
<section class="inner-section offer-part">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="offer-card"><a href="#"><img src="images/offer/01.jpg" alt="offer"></a>
          <div class="offer-div">
            <h5 class="offer-code">UTS20</h5>
            <button class="offer-select">copy</button>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="offer-card"><a href="#"><img src="images/offer/02.jpg" alt="offer"></a>
          <div class="offer-div">
            <h5 class="offer-code">HD20</h5>
            <button class="offer-select">copy</button>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="offer-card"><a href="#"><img src="images/offer/03.jpg" alt="offer"></a>
          <div class="offer-div">
            <h5 class="offer-code">STUDENT20</h5>
            <button class="offer-select">copy</button>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="offer-card"><a href="#"><img src="images/offer/04.jpg" alt="offer"></a>
          <div class="offer-div">
            <h5 class="offer-code">INTERNATIONAL STUDENT20</h5>
            <button class="offer-select">copy</button>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="offer-card"><a href="#"><img src="images/offer/05.jpg" alt="offer"></a>
          <div class="offer-div">
            <h5 class="offer-code">ALUMI20</h5>
            <button class="offer-select">copy</button>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="offer-card"><a href="#"><img src="images/offer/06.jpg" alt="offer"></a>
          <div class="offer-div">
            <h5 class="offer-code">SPECIAL20</h5>
            <button class="offer-select">copy</button>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="offer-card"><a href="#"><img src="images/offer/07.jpg" alt="offer"></a>
          <div class="offer-div">
            <h5 class="offer-code">AMAZING20</h5>
            <button class="offer-select">copy</button>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="offer-card"><a href="#"><img src="images/offer/08.jpg" alt="offer"></a>
          <div class="offer-div">
            <h5 class="offer-code">ABBBBBY20</h5>
            <button class="offer-select">copy</button>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="offer-card"><a href="#"><img src="images/offer/09.jpg" alt="offer"></a>
          <div class="offer-div">
            <h5 class="offer-code">WOOOOOOOW20</h5>
            <button class="offer-select">copy</button>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="offer-card"><a href="#"><img src="images/offer/10.jpg" alt="offer"></a>
          <div class="offer-div">
            <h5 class="offer-code">NIIIIIIIICE20</h5>
            <button class="offer-select">copy</button>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="offer-card"><a href="#"><img src="images/offer/11.jpg" alt="offer"></a>
          <div class="offer-div">
            <h5 class="offer-code">SSSSSSS20</h5>
            <button class="offer-select">copy</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php';?>