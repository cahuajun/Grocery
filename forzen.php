<?php
include 'config.php';


$product_ids = [1000, 1004];


$ids = implode(',', $product_ids);


$query = "SELECT product_id, product_name, unit_price, unit_quantity, in_stock FROM products WHERE product_id IN ($ids)";
$result = $conn->query($query);
?>


<?php include 'headers.php'; ?>

<section class="section recent-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Frozen</h2>
                </div>
            </div>
        </div>
        <div class="row row-cols-lg-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
            <style>
                .product-card {
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                    /* 分散对齐卡片内的元素 */
                    height: 450px;
                    /* 统一卡片高度 */
                    overflow: hidden;
                    /* 防止内容溢出 */
                    border: 1px solid #ccc;
                    padding: 15px;
                    background-color: #f9f9f9;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                    /* 添加阴影以增强视觉效果 */
                }

                .product-media {
                    height: 60%;
                    /* 为图片和视频区域分配60%的卡片高度 */
                    overflow: hidden;
                    /* 隐藏溢出部分 */
                }

                .product-media img {
                    width: 100%;
                    /* 使图片宽度充满容器 */
                    height: 100%;
                    /* 使图片高度充满指定区域 */
                    object-fit: cover;
                    /* 保持图片比例，填充整个元素框 */
                }

                .product-content {
                    /* height: 40%; */
                    /* 为内容区域分配剩余的40%高度 */
                    display: flex;
                    flex-direction: column;
                    justify-content: space-around;
                    /* 分散对齐内部元素 */
                }

                .product-name,
                .product-price,
                .product-add {
                    text-align: center;
                    /* 居中对齐文本 */
                }

                .action-input {
                    text-align: center;
                    /* 数量输入居中显示 */
                    margin: 10px 0;
                    /* 添加上下外边距 */
                }

                .action-minus,
                .action-plus {
                    cursor: pointer;
                    /* 指针样式显示为手型 */
                }

                .disabled-cart {
                    text-decoration: line-through;
                    /* Adds line-through decoration */
                    color: #ccc;
                    /* Changes text color to grey */
                    cursor: not-allowed;
                    /* Changes cursor to not-allowed symbol */
                }

                .disabled-cart:hover {
                    background-color: initial;
                    /* Keeps the original background color on hover */
                    box-shadow: none;
                    /* Removes any box-shadow on hover */
                }
            </style>

            <?php while ($row = $result->fetch_assoc()) : ?>

                <div class="col">
                    <div class="product-card">
                        <div class="product-media">
                            <button class="product-wish wish"><i class="icofont-ui-love"></i></button>
                            <a class="product-image" href="/product_detail.php?id=<?= $row['product_id']; ?>"><img src="images/<?= $row['product_id']; ?>.png" alt="<?= htmlspecialchars($row['product_name']); ?>"></a>
                            <div class="product-widget">
                                <a title="Product Video" href="https://www.bilibili.com" class="venobox icofont-ui-play" data-autoplay="true" data-vbtype="video"></a>
                                <a title="Product View" href="/product_detail.php?id=<?= $row['product_id']; ?>" class="icofont-eye-alt" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h6 class="product-name"><a href="/product_detail.php?id=<?= $row['product_id']; ?>"><?= htmlspecialchars($row['product_name']); ?></a></h6>
                            <h6 class="product-price"><span>$<?= number_format($row['unit_price'], 2); ?> <small>/<?= $row['unit_quantity']; ?></small></span></h6>
                            <h6 class="stock-status"><?= $row['in_stock'] > 0 ? 'In Stock: ' . $row['in_stock'] : 'Out of Stock'; ?></h6>

                            <!-- 购物车按钮 -->
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
                            <!-- end -->
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    </div>
</section>


<?php include 'footer.php'; ?>