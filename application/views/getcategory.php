<?php
foreach ($category as $row) {
?>
    <option value="<?= $row['name'] ?>"><?= $row['name'] ?></option>
<?php
}
?>