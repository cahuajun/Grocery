<?php
include 'config.php'; 

$product_id = isset($_GET['id']) ? $_GET['id'] : 0; 

if ($product_id) {
$stmt = $conn->prepare("SELECT * FROM products WHERE product_id = ?");
$stmt->bind_param("i", $product_id);
$stmt->execute();
$result = $stmt->get_result();
$product = $result->fetch_assoc();

if (!$product) {
    echo "<p>Product not found.</p>";
} else {

?>

<?php include 'headers.php'; ?>
<section>
<style>
    .product-details-title {
        text-align: center;
        margin: 20px 0;
        font-size: 32px; /* Emphasize the title with a larger size */
        color: #333; /* Deep grey for better visibility */
    }
    h2 {
        font-size: 24px; /* Clearly smaller than the main title but still prominent */
        color: #E76D2F; /* Stylish green to match the button color */
        margin-top: 10px;
    }
    .container {
        width: 80%;
        margin: auto;
        padding: 20px;
    }
    .product-detail {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        margin-top: 10px;
    }
    .col-md-6 {
        flex: 1;
        min-width: 300px;
        margin: 10px 20px;
        position: relative;
    }
    .col-md-6 img {
        width: 100%;
        height: auto;
        max-height: 250px;
        object-fit: contain;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 8px; /* Rounded corners for modern look */
    }
    .col-md-6 img:hover {
        transform: scale(1.1);
        box-shadow: 0 10px 20px rgba(0,0,0,0.2); /* Soft shadow for depth */
    }
    .product-content {
        flex: 1;
        padding: 20px;
        background: linear-gradient(to right, #ffffff, #f9f9f9); /* Subtle gradient background */
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }
    .product-btn {
        background-color: #4CAF50; /* Vibrant green background */
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
        display: block;
        width: 100%;
        font-size: 18px;
        margin-top: 20px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.12);
    }
    .product-btn:hover {
        background-color: #367c39;
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.2);
    }
    .quantity-input {
        width: 60px; 
        padding: 8px; 
        margin: 10px 0; 
        text-align: center; 
        border: 1px solid #ccc; 
        border-radius: 4px;
        box-shadow: inset 0 1px 3px rgba(0,0,0,0.2); 
        transition: all 0.3s ease; 
    }
    .quantity-input:focus {
        outline: none; 
        border-color: #E76D2F;
        box-shadow: 0 0 5px rgba(76, 175, 80, 0.5); 
    }


    .stock-status {
        font-size: 16px; 
        color: #333; 
        font-weight: bold; 
        margin: 10px 0;
    }
    .out-of-stock {
        color: #d9534f;
    }

    .price {
        font-size: 18px; 
        color: #E76D2F; 
        font-weight: bold; 
    }
    .price small {
        font-size: 14px; 
        color: #666; 
    }
    
    .disabled-cart {
        text-decoration: line-through; /* Adds line-through decoration */
        color: #ccc; /* Changes text color to grey */
        cursor: not-allowed; /* Changes cursor to not-allowed symbol */
        background-color: #f9f9f9; /* Light grey background to indicate it's disabled */
        border: 1px solid #ccc; /* Grey border to match the text color */
    }

    .disabled-cart:hover {
        background-color: #f9f9f9; /* Keeps the background color consistent on hover */
        box-shadow: none; /* Removes any shadow effects */
    }




    .product-btn:disabled {
        cursor: default; /* Default cursor on the disabled button */
    }
</style>


<div class="container">
    <h1 class="product-details-title"><em>Product Details</em></h1>
    <div class="product-detail">
        <div class="col-md-6">
            <img src="/images/<?= $product['product_id']; ?>.png" alt="<?= htmlspecialchars($product['product_name']); ?>" style="max-width:100%;">
        </div>
        <div class="col-md-6">
            <h2><?= htmlspecialchars($product['product_name']); ?></h2>
            <p class="unit">Unit: <?= htmlspecialchars($product['unit_quantity']); ?></p>
            <p class="price">Price: $<?= htmlspecialchars($product['unit_price']); ?></p>
            <p class="stock-status <?= $product['in_stock'] <= 0 ? 'out-of-stock' : ''; ?>">
                <?= $product['in_stock'] > 0 ? "In Stock: " . $product['in_stock'] : 'Out of Stock'; ?>
            </p>

            <?php if($product['in_stock'] > 0) { ?>
            <form action="add_to_cart.php" method="POST">
                <input type="hidden" name="product_id" value="<?= $product['product_id']; ?>">
                <input type="hidden" name="product_name" value="<?= htmlspecialchars($product['product_name']); ?>">
                <input type="hidden" name="product_price" value="<?= $product['unit_price']; ?>">
                <input type="hidden" name="product_image" value="<?= $product['product_id']; ?>.png">
                <input type="number" name="quantity" value="1" min="1" max="<?= $product['in_stock']; ?>" class="quantity-input" style="margin-bottom: 10px;">
                <button type="submit" class="product-btn data-product-id="<?= $product['product_id']; ?>" <?= $product['in_stock'] <= 0 ? 'out-of-stock' : ''; ?>" <?= $product['in_stock'] <= 0 ? 'disabled' : ''; ?>>
                    Add to cart
                </button>
            </form>
            <?php } ?>
        </div>
    </div>
</div>
</section>

<?php
}
} else {
echo "<p>No product ID provided.</p>";
}
?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const quantityInput = document.querySelector('.quantity-input');
        const maxStock = <?= $product['in_stock']; ?>;

        quantityInput.addEventListener('input', function() {
            const quantity = parseInt(this.value);
            if (quantity > maxStock) {
                alert('Out of stock! Available stock: ' + maxStock);
                this.value = maxStock;
            }
        });
    });
</script>
<script src="js/custom/addto.js"></script>
<?php include 'footer.php'; ?>