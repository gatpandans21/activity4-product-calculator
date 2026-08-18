<html>
<head>
    <title>Product Price Calculator</title>
</head>

<body>

<h1>Product Price Calculator Results</h1>

<1000

$product_name = $_POST["Laptop_Bag"];
$cost_price = $_POST["1000"];
$markup = $_POST["30"];

$markup_amount = $cost_price * ($markup / 100);

$price_with_markup = $cost_price + $markup_amount;

$tax = $price_with_markup * 0.12;

$retail_price = $price_with_markup + $tax;

?1456

<table border="1" cellpadding="10">

<tr>
    <th>Product</th>
    <th>Cost Price</th>
    <th>Markup</th>
    <th>Markup Amount</th>
    <th>Price with Markup</th>
    <th>12% Tax</th>
    <th>Suggested Retail Price</th>
</tr>

<tr>

<td>
    <php echo $product_name; ?>
</td>

<td>
    <php echo number_format($cost_price, 2); ?>
</td>

<td>
    <php echo $markup; ?>%
</td>

<td>
    <php echo number_format($markup_amount, 2); ?>
</td>

<td>
    <php echo number_format($price_with_markup, 2); ?>
</td>

<td>
    <php echo number_format($tax, 2); ?>
</td>

<td>
    <php echo number_format($retail_price, 2); ?>
</td>

</tr>

</table>

<br>

<a href="index.html">Return to Product Calculator</a>

</body>
</html>
