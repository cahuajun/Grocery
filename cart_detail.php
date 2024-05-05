<?php

@session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
?>


<section class="inner-section single-banner">
    <div class="container">
        <h2>Shopping Cart</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
        </ol>
    </div>
</section>
<section class="inner-section wishlist-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-scroll">
                    <table class="table-list">
                        <thead>
                            <tr>
                                <th scope="col">Number</th>
                                <th scope="col">Image</th>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                                <th scope="col">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($_SESSION['cart'])) {
                                $total = 0;
                                $item_count = 0;
                                foreach ($_SESSION['cart'] as $product_id => $details) {
                                    $total_price = $details['price'] * $details['quantity'];
                                    $total += $total_price;
                                    $item_count++;
                                    echo "<tr>
              <td class='table-serial'><h6>{$item_count}</h6></td>
              <td class='table-image'><img src='images/{$details['image']}' alt='{$details['name']}' style='height:50px;'></td>
              <td class='table-name'><h6>{$details['name']}</h6></td>
              <td class='table-price'><h6>\${$details['price']}</h6></td>
              <td class='table-quantity'>";
              
              ?>
              <input class="action-input" style="text-align: center; border: 1px solid green;" title="Quantity Number" type="text" name="quantity" data-productid='<?php echo $product_id; ?>' value="<?php echo $details['quantity']; ?>">
              </td>
              <td class='table-total'><h6><?php echo $total_price ?></h6></td>
              <td class='table-action'><button onclick='removeItem(<?php echo $product_id ?>)' class='trash'><i class='icofont-trash'></i></button></td>
          </tr>
          <?php
                                }
                                echo '</tbody></table>';
                                echo "<div class='cart-footer'>
            <h5>Total: \${$total}</h5>
            <form action='delivery.php' method='POST'>
              <button type='submit' class='btn btn-success'>Checkout</button>
              <button type='button' class='btn btn-danger btn-clear-cart'>Clear Cart</button>
            </form>
          </div>";
                            } else {
                                echo "<tr><td colspan='7'>Your cart is empty</td></tr></tbody></table>";
                            }
                            ?>
                </div>
            </div>
        </div>
    </div>
</section>