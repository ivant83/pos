<?php
$pdo = new PDO('mysql:host=your_db_host;dbname=your_database', 'your_username', 'your_password');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $barcode = $_POST['barcode'];
    $stmt = $pdo->prepare("SELECT price FROM products WHERE barcode = ?");
    $stmt->execute([$barcode]);
    $product = $stmt->fetch();

    if ($product) {
        echo "Product Price: $" . $product['price'];
    } else {
        echo "Product not found.";
    }
}
?>
