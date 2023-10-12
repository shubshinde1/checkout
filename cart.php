<?php


session_start();

if (isset($_POST['product_id'], $_POST['product_name'], $_POST['price'], $_POST['quantity'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    // Check if the cart exists in the session; if not, initialize it
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Add the product to the cart
    $_SESSION['cart'][$product_id] = array(
        'product_id' => $product_id,
        'product_name' => $product_name,
        'price' => $price,
        'quantity' => $quantity
    );
}

// Redirect back to the product page or shopping cart page
// header("Location: product.php");  // Change the URL to where you want to redirect


?>