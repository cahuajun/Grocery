<?php
session_start();
include 'config.php'; // 确保你的数据库连接是包含在内的

function output($message, $success = false) {
    $return = ['message' => $message, 'success' => $success];
    if ($_POST['isajax']) {
        echo json_encode($return);
    } else {
        echo $message;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['product_id'], $_POST['quantity'])) {
    $productId = (int)$_POST['product_id'];
    $quantity = (int)$_POST['quantity'];

    // 获取商品详情
    $stmt = $conn->prepare("SELECT * FROM products WHERE product_id = ?");
    $stmt->bind_param("i", $productId);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();

    if ($product) {
        if ($product['in_stock'] >= $quantity) {
            if (!isset($_SESSION['cart'][$productId])) {
                $_SESSION['cart'][$productId] = [
                    'name' => $product['product_name'],
                    'quantity' => 0,
                    'price' => $product['unit_price'],
                    'image' => $product['product_id'] . '.png'
                ];
            }
            $_SESSION['cart'][$productId]['quantity'] += $quantity;

            $newStock = $product['in_stock'] - $quantity;
            $updateStmt = $conn->prepare("UPDATE products SET in_stock = ? WHERE product_id = ?");
            $updateStmt->bind_param("ii", $newStock, $productId);
            $updateStmt->execute();

            if ($_POST['isajax']) {
                output("Added to cart successfully.", true);
                exit;
            }

            // 重定向到购物车页面
            header("Location: shoppingcart.php");
            exit;
        } else {
            output("Not enough stock available.");
        }
    } else {
        output("Product not found.");
    }
} else {
    output("Invalid request.");
}
?>
