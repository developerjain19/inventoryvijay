<?php include('includes/header.php'); ?>
<div class="holder">
    <?php include('includes/menu.php'); ?>
    <div class="wrapper">
        <?php include('includes/top-header.php'); ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-12 ">
                        <div class="portlet">
                            <div class="portlet-header portlet-header-bordered">
                                <h3 class="portlet-title"> <?= $title ?></h3>
                            </div>
                            <div class="row">
                                <div class="portlet-body">
                                    <form method="post" action="">
                                        <div class="form-group row">

                                            <div class="input-group col-md-8 mt-2 row">
                                                <div class="col-md-3">
                                                    <span>Get product</span>
                                                </div>
                                                <div class="col-md-4">
                                                    <select class="form-control" id="select2-1">

                                                        <?php
                                                        if (!empty($product_list)) {
                                                            foreach ($product_list as $group) {
                                                        ?>
                                                                <option value="<?= $group['product_id'] ?>"><?= $group['product_name'] ?> [<?= $group['product_item_code'] ?>]</option>
                                                        <?php
                                                            }
                                                        }
                                                        ?>


                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <span class="badge badge-primary" id="getproduct">Get product</span>
                                                </div>
                                            </div>
                                            <div class="input-group col-md-12 mt-2">
                                                <!-- <div class="input-group-prepend"><span class="input-group-text">Product List</span></div> -->
                                                <table class="table table-bordered table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <td>Item code </td>
                                                            <td>Item name </td>
                                                            <td>Unit </td>
                                                            <td>Quantity</td>
                                                            <td>Remove</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="productlist">
                                                    <?php
                                                if (!empty($product_group_items)) {
                                                    foreach ($product_group_items as $row) {
                                                        $productinfo = getRowById('webangel_product', 'product_id', $row['product_id']);
                                                        if (!empty($productinfo)) {
                                                             
                                                ?>
                                                            <tr class="fieldGroup">
                                                                <td> <?= $productinfo[0]['product_item_code']; ?>
                                                                    <input type="hidden" name="dataid[]" value="<?= $productinfo[0]['product_id']; ?>" />
                                                                </td>
                                                                <td><?= $productinfo[0]['product_name'] ?> </td>
                                                                <td><input type="text" name="unit[]" data-id="<?= $productinfo[0]['product_id']; ?>" id="mrp<?= $productinfo[0]['product_id']; ?>" value="<?= $row['unit']; ?>" /></td>
                                                                <td><input type="text" name="quantity[]" data-id="<?= $productinfo[0]['product_id']; ?>" id="quan<?= $productinfo[0]['product_id']; ?>" value="<?= $row['quantity']; ?>" /> </td>

                                                                <td> <a href="javascript:void(0)" class="btn btn-danger remove"><span class="fa fa-trash" aria-hidden="true"> </span> </a> </td>
                                                            </tr>

                                                <?php
                                                        }
                                                    }
                                                }
                                                ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="input-group col-md-12 mt-2" id="product">

                                                
                                            </div>


                                        </div>
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </form>
                                </div>
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
<script>
    $(document).ready(function() {
        $('#getproduct').click(function() {
            var getproduct = $("#select2-1").val();
            console.log(getproduct);
            $.ajax({
                method: "POST",
                url: "<?= base_url('Ajax/searchproduct_name') ?>",
                data: {
                    getproduct: getproduct
                },
                success: function(response) {
                    console.log(response);
                    $('.productlist').append(response);
                }
            });
        });
        $("body").on("click", ".remove", function() {
            $(this).parents(".fieldGroup").remove();
        });
    });
</script>
</body>

</html>