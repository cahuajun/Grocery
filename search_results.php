<?php
include 'config.php'; // 包含数据库连接配置
include 'headers.php'; // 包含页面头部
?>
<style>
    /* 基础样式重置 */
    body, h1, h2, table, th, td, a { margin: 0; padding: 0; font-family: Arial, sans-serif; }

    .results-container {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
        padding: 20px;
        margin-top: 20px;
    }
    .result-item {
        border: 1px solid #ccc;
        padding: 15px;
        background-color: #f9f9f9;
        display: flex;
        flex-direction: column;
        align-items: center;
        transition: border-color 0.3s, box-shadow 0.3s; /* 添加了阴影过渡效果 */
    }
    .result-item img {
        width: 100%;
        height: auto;
    }
    .result-item h2 {
        margin: 10px 0;
        font-size: 1.2em;
        color: #333;
    }
    .result-item p, .result-item a {
        margin: 5px 0;
        font-size: 1em;
        color: #666;
        text-decoration: none;
    }
    .result-item a {
        color: #0066cc;
    }
    .result-item .add-to-cart-btn {
        padding: 8px 16px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-align: center;
    }
    .result-item .add-to-cart-btn:hover {
        background-color: #45a049;
    }
    .result-item:hover {
        border-color: #4CAF50; /* 绿色边框 */
        box-shadow: 0 2px 6px rgba(0, 128, 0, 0.2); /* 轻微的阴影效果，增强视觉效果 */
    }
    .disabled-cart {
    text-decoration: line-through; /* 添加删除线 */
    color: #ccc; /* 改变文字颜色为灰色 */
    cursor: not-allowed; /* 修改光标为禁止符号 */
    background-color: #f5f5f5; /* 更淡的背景颜色 */
}

.disabled-cart:hover {
    background-color: #f5f5f5; /* 鼠标悬停时保持相同背景色 */
    box-shadow: none; /* 移除悬停时的阴影效果 */
}

.btn-s {
    width: 180px;
    font-size: 14px;
    font-weight: 500;
    padding: 6px 0;
    border-radius: 8px;
    text-align: center;
    display: inline-block;
    text-transform: uppercase;
    color: var(--white);
    background: var(--primary);
}

</style>

<?php
$keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';
$keyword = trim($keyword);
//这是什么啊啊啊啊啊啊啊？？？？
if (!empty($keyword)) {
    $like_keyword = "%$keyword%";
    $query = "SELECT * FROM `Bunny_Grocery`.`products` WHERE 
        CONVERT(`product_id` USING utf8) LIKE ? OR 
        CONVERT(`product_name` USING utf8) LIKE ? OR 
        CONVERT(`unit_price` USING utf8) LIKE ? OR 
        CONVERT(`unit_quantity` USING utf8) LIKE ? OR 
        CONVERT(`in_stock` USING utf8) LIKE ?";

    $stmt = $conn->prepare($query);
    if ($stmt) {
        $stmt->bind_param("sssss", $like_keyword, $like_keyword, $like_keyword, $like_keyword, $like_keyword);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<div class='results-container'>";
            while ($row = $result->fetch_assoc()) {
                echo "<div class='result-item'>";
                echo "<img src='/images/" . htmlspecialchars($row['product_id']) . ".png' alt='Product'>";
                echo "<h2>" . htmlspecialchars($row['product_name']) . "</h2>";
                echo "<p>Unit: " . htmlspecialchars($row['unit_quantity']) . "</p>";
                echo "<p>Price: $" . htmlspecialchars($row['unit_price']) . "</p>";
                echo "<p>Stock:" . htmlspecialchars($row['in_stock'])."</p>";
                ?>
            <button class="product-add <?= $row['in_stock'] <= 0 ? 'disabled-cart' : ''; ?>" title="Add to Cart" <?= $row['in_stock'] <= 0 ? 'disabled' : ''; ?>>
                <i class="icofont-cart"></i><span><?= $row['in_stock'] > 0 ? 'Add to cart' : 'Out of Stock'; ?></span>
            </button>

            <div class="product-action">
                <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
            </div>

            <div class="cart-comfirm mt-1">
                <button class="add-comfirm btn-s" data-productid="<?= $row['product_id']; ?>">Comfirm</button>
            </div>
            <?php

                #echo "<button class='add-to-cart-btn'>Add to Cart</button>";
                echo "</div>";
            }
            echo "</div>";
        } else {
            echo "<p>No results found for '$keyword'.</p>";
        }
        $stmt->close();
    } else {
        echo "Error in query preparation: " . $conn->error;
    }
} else {
    echo "Please enter a search keyword.";
}

include 'footer.php'; // 包含页面尾部
?>
