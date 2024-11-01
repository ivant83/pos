<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POS System</title>
</head>
<body>
    <h1>Point of Sale System</h1>
    <form action="add_product.php" method="post">
        <input type="text" name="name" placeholder="Product Name" required>
        <input type="text" name="barcode" placeholder="Barcode" required>
        <input type="number" name="price" placeholder="Price" required step="0.01">
        <button type="submit">Add Product</button>
    </form>

    <form action="scan.php" method="post">
        <input type="text" name="barcode" placeholder="Scan Barcode" required>
        <button type="submit">Scan</button>
    </form>
</body>
</html>
