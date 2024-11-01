<?php
$pdo = new PDO('mysql:host=your_db_host;dbname=your_database', 'your_username', 'your_password');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $barcode = $_POST['barcode'];
    $price = $_POST['price'];
    
    $stmt = $pdo->prepare("INSERT INTO products (name, barcode, price) VALUES (?, ?, ?)");
    $stmt->execute([$name, $barcode, $price]);
    echo "Product added successfully!";
}
?>
