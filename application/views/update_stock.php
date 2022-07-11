<?php include('includes/header.php'); ?>
<div class="holder">
    <?php include('includes/menu.php'); ?>
    <div class="wrapper">
        <?php include('includes/top-header.php'); ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="portlet">
                            <div class="portlet-header portlet-header-bordered">
                                <h3 class="portlet-title"><?= $title ?></h3>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <?php
                                    if ($this->session->has_userdata('msg')) {
                                        echo $this->session->userdata('msg');
                                        $this->session->unset_userdata('msg');
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <br>
                                <form action="" method="post">
                                    <table id="" class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>S.no.</th>
                                                <th>Product Name</th>
                                                <th>Product size/option</th>

                                                <th>In stock</th>
                                                <th>New Stock</th>
                                                <th>Price Per Unit( Single product Price)</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            if (!empty($vendor_product_option)) {
                                                foreach ($vendor_product_option as $option) {
                                                    $data_pro = getSingleRowById('webangel_product', array('product_id' => $option['product_id']));
                                                    $data_opt = getSingleRowById('webangel_product_option', array('id' => $option['product_option_id']));

                                               
                                                                                                ?>
                                                    <tr id="row<?= $option['id'] ?>">
                                                        <td><?= $i ?></td>
                                                        <td><?= $data_pro['product_name'] ?></td>
                                                        <td><?= $data_opt['name'] ?></td>

                                                        <td><?= $option['quantity'] ?></td>
                                                        <td><input type="number" name="product_quantity[]" value="0" required="" />
                                                            <input type="hidden" name="option[]" value="<?= $option['id'] ?>" />
                                                            <input type="hidden" name="old_product_quantity[]" value="<?= $option['quantity'] ?>" />
                                                        </td>
                                                        <td><input type="number" name="v_price[]" value="0"  required=""/> </td>
                                                    </tr>
                                            <?php
                                                    $i++;
                                                }
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                    <button type="submit" class="btn btn-primary">Update stock</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('includes/web-footer.php'); ?>
    </div>
</div>
<?php include('includes/footer.php') ?>
<?php include('includes/footer-link.php'); ?>
</body>

</html>