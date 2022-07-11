<option value="">Select product</option>


<?php
foreach ($vendor as $row) {

    $product =   getRowById('webangel_product', 'product_id', $row['product_id']);

    // print_r($product);

?>
    <option value="<?= $product[0]['product_id'] ?>"><?= $product[0]['product_name'] ?></option>
<?php
}
?>