<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
    <div id="main">
        <h1>Product Discount Calculator</h1>
        <form action="display_discount.php" method="post">

            <div id="data">
                <label for="productdescription">Product Description:</label>
                <input id="productdescription" type="text" name="product_description"><br>

                <label for="listprice">List Price:</label>
                <input id="listprice" type="text" name="list_price"><br>

                <label for="discountpercent">Discount Percent:</label>
                <input id="discountpercent" type="text" name="discount_percent"><span>%</span><br>
                
                <label for="salestax">Sales Tax:</label>
                <input id="salestax" type="text" name="sales_tax"><span>%</span><br>
            </div>

            <div id="buttons">
                <div id="space">&nbsp;</div>
                <input type="submit" value="Calculate Discount"><br>
            </div>

        </form>
    </div>
</body>
</html>