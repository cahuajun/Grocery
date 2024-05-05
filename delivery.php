<?php
include 'config.php';
session_start();

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    header('Location: shoppingcart.php');
    exit;
}

$message = [];
$order_placed = false;
if (isset($_POST['submit'])) {
    $name = filter_var($_POST['name']);
    $street = filter_var($_POST['street']);
    $city = filter_var($_POST['city']);
    $state = $_POST['state'];
    $mobile = filter_var($_POST['mobile']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message[] = 'Invalid email format';
    }

    if (!preg_match('/^\d{10}$/', $mobile)) {
        $message[]='Invalid mobile number format. Expected format: 10 digits (e.g. 0412123123)';
    }

    if (empty($message)) {
        $address = "$street, $city, $state";
        $cart_total = 0;
        $cart_products = [];
        $stocks = [];

        $pids = array_keys($_SESSION['cart']);
        $query = "SELECT * FROM products where product_id in (" . implode(',', $pids) . ")";
        $result = $conn->query($query);
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $stocks[$row['product_id']] = $row;
        }

        foreach ($_SESSION['cart'] as $product_id => $details) {
            if ($details['quantity'] > $stocks[$product_id]['in_stock']) {
                $product_name = $stocks[$product_id]['product_name'];
                echo "<script>
                        alert('$product_name is out of stock');
                        window.location.href='shoppingcart.php';
                      </script>";
                exit;
            }
        
        
        // foreach ($_SESSION['cart'] as $product_id => $details) {
        //     if ($details['quantity'] > $stocks[$product_id]['in_stock']) {
        //         $message[] = $stocks[$product_id]['product_name'] . ' is out of stock';
        //         break;
        //         header('Location: shoppingcart.php'); Redirect to cart page
        //         exit;
        //     }
            $cart_products[] = $stocks[$product_id]['product_name'] . ' ( ' . $details['quantity'] . ' )';
            $sub_total = ($stocks[$product_id]['unit_price'] * $details['quantity']);
            $cart_total += $sub_total;
        }

        if ($cart_total > 0 && empty($message)) {
            // Place the order
            // Database insertion logic goes here
            foreach ($_SESSION['cart'] as $product_id => $details) {
                $cart_query = $conn->prepare("UPDATE products set in_stock = in_stock - ? where product_id = ?;");
                $cart_query->bind_param("ii", $details['quantity'], $product_id);
                $cart_query->execute();
            }

            // $message[] = 'Order placed successfully!';
            $order_placed = true;

            session_destroy();
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Detail</title>
    <link rel="icon" href="/images/icon.png">
    <style>
        body {
            font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
            text-decoration: none solid rgb(68, 68, 68);
            font-style: italic;
            font-variant: small-caps;
            text-transform: none;
            margin: 0 auto;
            padding: 20px;
            color: #333;
        }

        .o_h1 {
            text-align: center;
            float: middle;
            margin: 0 auto;
            color: #E76D2F;
            text-shadow: 2px 2px 0 #bcbcbc, 4px 4px 0 #9c9c9c;
            font-size: 50px;
        }

        form {
            padding: 2rem;
            border: var(--border);
            background-color: var(--white);
            box-shadow: var(--box-shadow);
            border-radius: .5rem;
        }

        input[type="text"],
        input[type="email"],
        select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box;
            /* Includes padding and border in the element's total width and height */
        }

        .custom-button {
            background-color: #E76D2F;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 18px;
            margin: 0 auto;
            display: block;
            transition: background-color 0.3s ease;
        }

        .custom-button:hover {
            background-color: #5b21b6;
        }

        ul {
            background: #ffdddd;
            padding: 10px;
            border-radius: 8px;
        }

        li {
            color: red;
        }

        .require-tag {
            color: red !important;
        }
    </style>
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="fonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="fonts/icofont/icofont.min.css">
    <link rel="stylesheet" href="css/vendor/nice-select.min.css">
    <link rel="stylesheet" href="https://www.jq22.com/jquery/jquery-ui-1.11.0.css">
    <link rel="stylesheet" href="css/vendor/venobox.min.css">
    <link rel="stylesheet" href="css/vendor/slick.min.css">
    <link rel="stylesheet" href="https://www.jq22.com/jquery/bootstrap-5.0.0.css">
    <link rel="stylesheet" href="css/custom/main.css">
    <link rel="stylesheet" href="css/custom/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css">
</head>

<body>
    <h1 class="o_h1">Place Your Order</h1>
    <?php if (!empty($message)) : ?>
        <ul>
            <?php foreach ($message as $msg) : ?>
                <li><?php echo htmlspecialchars($msg); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?php if (!$order_placed) { ?>
    <form action="" method="post">
        <div class="d-flex">
            <span class="require-tag">*</span>
            <input type="text" name="name" value="" required placeholder="Recipient's Name">
        </div>
        <div class="d-flex">
            <span class="require-tag">*</span>
            <input type="text" name="mobile" value="" required placeholder="Mobile Number">
        </div>

        <div class="d-flex">
            <span class="require-tag">*</span>
            <input type="email" name="email" value="" required placeholder="Email Address">
        </div>

        <div class="d-flex">
            <span class="require-tag">*</span>
            <input type="text" name="street" value="" required placeholder="Street">
        </div>

        <div class="d-flex">
            <span class="require-tag">*</span>
            <input type="text" name="city" value="" required placeholder="City/Suburb">
        </div>

        <div class="d-flex">
        <span class="require-tag">*</span>
        <select  name="state" required>
            <option value="">Select a State</option>
            <option value="NSW">NSW</option>
            <option value="VIC">VIC</option>
            <option value="QLD">QLD</option>
            <option value="WA">WA</option>
            <option value="SA">SA</option>
            <option value="TAS">TAS</option>
            <option value="ACT">ACT</option>
            <option value="NT">NT</option>
            <option value="Others">Others</option>
        </select>
        </div>

        <div class="d-flex">
        <span class="require-tag">*</span>
        <input type="text" name="territories" value="" required placeholder="territories">
        </div>

        <button type="submit" name="submit" class="custom-button">Submit Order</button>
    </form>
    <?php } ?>

    <?php if ($order_placed) { ?>
    <script>
        alert("Your order has been placed successfully. Details have been sent to your email.");
    </script>
    <div class="w-100 d-flex align-items-center justify-content-center" style="height: 300px; flex-direction: column;">
        <h2 style="font-size: 60px; text-align: center; color: green;">Your order has been placed successfully!</h2>
        <h3 style="font-size: 40px; text-align: center; color: green;">Order details have been sent to your email and mobile phone!</h3>
        <p class="mt-3" style="font-size: 20px; text-align: center; color: #E76D2F;">
            <?php echo $_POST['email'] . " - " . $_POST['mobile']; ?>
        </p>
        <table class="mt-3 w-100">
            <caption>Detail</caption>
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total = 0;
                if (!empty($_SESSION['cart'])) {
                    $item_count = 0;
                    foreach ($_SESSION['cart'] as $product_id => $details) {
                        $total_price = $details['price'] * $details['quantity'];
                        $total += $total_price;
                        $item_count++;
                        echo "<tr>
                                <td class='table-serial'><h6>{$details['name']}</h6></td>
                                <td class='table-image'>{$details['quantity']}</td>
                                <td class='table-serial'><h6>{$details['price']}$</h6></td>
                              </tr>";
                    }
                }
                ?>
            </tbody>
            <tfoot>
                <tr style="text-align:center;">
                    <td colspan="2">Total Price</td>
                    <td><?php echo $total . '$'; ?></td>
                </tr>
            </tfoot>
        </table>
    </div>
<?php } ?>



</body>

<?php include 'footer.php'; ?>