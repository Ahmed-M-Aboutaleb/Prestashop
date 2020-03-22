<?php 

session_start();

$total_price = 0;
$total_item = 0;

$output = '<table class="table">
<thead>
<tr>
    <th>Product Name</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Total</th>
    <th>Action</th>
</tr>
</thead>';

if(!empty($_SESSION["shopping_cart"])) {
    foreach($_SESSION["shopping_cart"] as $keys => $values) {
        $output .= '</tbody>
        <tr>
            <td>' . $values["product_name"] . '</td>
            <td>' . $values["product_quantity"] . '</td>
            <td>' . $values["product_price"] . '</td>
            <td>' . number_format($values["product_quantity"] * $values["product_price"], 2) . '</td>
            <td><button name="delete" class="btn btn-danger btn-xs delete" id="'. $values["product_id"].'">Remove</button></td>
        </tr>
        ';
        $total_price = $total_price + ($values["product_quantity"] * $values["product_price"]);
    }
    $output .= '<tr>
    <td colspan="3" align="right">Total</td>
    <td align="right">$ ' .number_format($total_price, 2) . '</td>
    <td></td>
    </tr>
    ';
} else {
    $output .= '<tr><td colspan="5" align="center">Your Cart is Empty</td></tr>';
}
$output .= '</tbody></table>';
echo $output;
?>