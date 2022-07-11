<?php
foreach ($option as $row) {

    $product = getRowById('webangel_product_option', 'id', $row['product_option_id']);

    if ($product > 0) {
?>
        <option value="<?= $product[0]['id'] ?>"><?= $product[0]['name'] ?></option>
<?php
    } else {
        echo '<option>No Option Available</option>';
    }
}
?>