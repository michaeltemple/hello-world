<?php

$description = filter_input(INPUT_POST,'product_description');

$price = filter_input(INPUT_POST, 'list_price');
$formattedprice = number_format("$price",2);

$discount = filter_input(INPUT_POST, 'discount_percent');

$discount_amount = $discount * .01 * $price;
$formatteddiscount_amount = number_format("$discount_amount",2);

$discount_price = $price - $discount_amount;
$formatteddiscount_price = number_format("$discount_price",2);

$salestax = filter_input(INPUT_POST, 'sales_tax');
$salestaxamount = $salestax * .01 * $formatteddiscount_price;
$formattedsalestaxamount = number_format("$salestaxamount",2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <div id="main">
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($description); ?></span><br>

        <label>List Price:</label>
        <span><?php echo '$'.htmlspecialchars($formattedprice); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($discount).'%'; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo '$'.$formatteddiscount_amount; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo '$'.$formatteddiscount_price; ?></span><br>
        <br>
        <label>Sales Tax Rate:</label>
        <span><?php echo htmlspecialchars($salestax).'%'; ?></span><br>
        
        <label>Sales Tax Amount:</label>
        <span><?php echo '$'.htmlspecialchars($formattedsalestaxamount); ?></span>
    </div>
</body>
</html>