<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$quantity = 30; // Buying 30 widgets.
$price = 119.95;
$taxrate = .05; // 5% sales tax.

// Calculate the total:
$total = $quantity * $price;
//$total = $total + ($total * $taxrate); // Calculate and add the tax.
$total *= (1 + $taxrate);
echo nl2br("\$$total\n");
echo nl2br('$total\n');
// Format the total:
$total = number_format($total, 3);

// Print the results:
echo '<p>You are purchasing <b>' . $quantity . '</b> widget(s) at a cost of <b>$' . $price .
    '</b> each. With tax, the total comes to <b>$' . $total . '</b>.</p>';

?>
</body>
</html>