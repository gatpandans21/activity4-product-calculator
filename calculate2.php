<?php
    $product_id = $_POST["product_id"];
    $product_name = $_POST["product_name"];
    $original_price = $_POST["original_price"];
    $markup_percentage = $_POST["markup_percentage"];
    $quantity = $_POST["quantity"];

    $markup_price = $original_price + ($original_price * ($markup_percentage / 100));
    $computed_tax = $markup_price * 0.12;
    $srp = $markup_price + $computed_tax;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Price Details</title>
</head>
<body>
    <h3>Product Price Details</h3>
    
    <table border="1">
        <tr>
            <th>Product ID</th>
            <td><?php echo $product_id; ?></td>
        </tr>
        <tr>
            <th>Product Name</th>
            <td><?php echo $product_name; ?></td>
        </tr>
        <tr>
            <th>Quantity</th>
            <td><?php echo $quantity; ?></td>
        </tr>
        <tr>
            <th>Original Price</th>
            <td>&#8369;<?php echo number_format($original_price, 2); ?></td>
        </tr>
        <tr>
            <th>Mark Up Percentage</th>
            <td><?php echo number_format($markup_percentage, 2); ?>%</td>
        </tr>
        <tr>
            <th>Mark Up Price</th>
            <td>&#8369;<?php echo number_format($markup_price, 2); ?></td>
        </tr>
        <tr>
            <th>Computed Tax (12%)</th>
            <td>&#8369;<?php echo number_format($computed_tax, 2); ?></td>
        </tr>
        <tr>
            <th>Suggested Retail Price</th>
            <td>&#8369;<?php echo number_format($srp, 2); ?></td>
        </tr>
    </table>

    <br>
    <a href="index.html">Go Back to Product Form</a>
</body>
</html>
