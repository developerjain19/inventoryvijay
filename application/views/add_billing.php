<?php include('includes/header.php'); ?>
<style>
    .element {
        width: 100%;
    }
</style>
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
                                <div class="portlet-body p-4">
                                    <form method="post" action="">
                                        <div class="form-group row">
                                            <div class="input-group col-md-3 mt-2">
                                                <div class="input-group-prepend"><span class="input-group-text">Date</span></div>
                                                <input type="date" class="form-control" name="date" value="<?= date('Y-m-d') ?>" placeholder="">
                                            </div>

                                            <div class="input-group col-md-3 mt-2">
                                                <div><span class="input-group-text"> Name</span></div>
                                                <input type="text" class="form-control" name="driver_nm" id="driver_nm" value="" placeholder="" required>
                                            </div>
                                            <div class="input-group col-md-3 mt-2">
                                                <div><span class="input-group-text"> Contact No.</span></div>
                                                <input type="text" class="form-control" name="driver_no" id="driver_contact" value="" placeholder="" required>
                                            </div>

                                            <div class="col-md-12 mt-2 p-2" style="border-bottom:1px solid grey"> </div>
                                            <div class="input-group col-md-12 mt-2">

                                                <table class="table table-bordered table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <td>Vendor </td>
                                                            <td>Product </td>
                                                            <td>Size </td>
                                                            <td>Price </td>
                                                            <td>Quantity </td>
                                                            <td>Total</td>
                                                            <td>Remove</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="productlist">
                                                        <tr class="fieldGroup  ">
                                                            <td>
                                                                <select class="form-control vendor " data-id="0" name="vendor[]" id="vendor0">
                                                                    <option value="">Select vendor</option>
                                                                    <?php foreach ($vendor as $row) {
                                                                    ?>
                                                                        <option value="<?= $row['id']; ?>"><?= $row['name']; ?></option>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </td>
                                                            <td>
                                                                <select class="form-control product" data-id="0" name="product[]" id="product0">
                                                                    <option>Select product</option>

                                                                </select>
                                                            </td>

                                                            <td>
                                                                <select class="form-control option" data-id="0" name="option[]" id="option0">
                                                                    <option>Select option</option>

                                                                </select>
                                                            </td>
                                                            <td>
                                                                <input type="number" class="form-control price" data-id="0" name="price[]" id="mrp0" value="" />
                                                            </td>

                                                            <td>
                                                                <input type="number" class="form-control quantity" data-id="0" name="quantity[]" id="quan0" value="1" />
                                                            </td>
                                                            <td>
                                                                <input type="number" class="form-control total" data-id="0" name="total[]" id="total0" value="" />
                                                            </td>

                                                            <td>
                                                                <a href="javascript:void(0)" class="form-control btn btn-success addMore">Add</a>
                                                            </td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>


                                            <div class="input-group col-md-3 mt-2">
                                                <div class="input-group-prepend"><span class="input-group-text">Total Amount</span></div>
                                                <input type="text" class="form-control" name="total_amount" value="" id="grandtotal" placeholder="">
                                            </div>
                                            <div class="input-group col-md-3 mt-2">
                                                <div class="input-group-prepend"><span class="input-group-text">Payment Mode</span></div>
                                                <select class="form-control" name="payment_mode" required="">
                                                    <option value="">Select Mode</option>

                                                    <?php 
                                                    $mode =  getAllRow('webangel_payment_mode');
                                                       foreach ($mode as $row) {
                                                    ?>
                                                        <option value="<?= $row['mode']; ?>"><?= $row['mode']; ?></option>
                                                    <?php
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                            <div class="input-group col-md-3 mt-2">
                                                <div class="input-group-prepend"><span class="input-group-text">Payment Type</span></div>
                                                <select class="form-control" name="payment_type" required="" id="type">
                                                    <option value="">Select Type</option>
                                                    <option value="0">Full Payment</option>
                                                    <option value="1">Down Payment</option>


                                                </select>
                                            </div>


                                            <div class="input-group col-md-3 mt-2" id="remaining_amount">
                                                <div class="input-group-prepend"><span class="input-group-text">Paid Amount</span></div>
                                                <input type="text" class="form-control" name="paid_amount" value="" placeholder="">
                                            </div>

                                            <div class="input-group col-md-12 mt-2">
                                                <div class="input-group-prepend"><span class="input-group-text">Summary</span></div>
                                                <textarea class="form-control" name="summary"></textarea>
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



        $('#remaining_amount').hide();
        $('#type').change(function() {
            if ($('#type').val() == 1) {
                $('#remaining_amount').show();

            } else {
                $('#remaining_amount').hide();
            }
        });



        $(document).on('change', '.vendor', function() {
            var id = $(this).data('id');
            var vendor = $('#vendor' + id).val();
            $.ajax({
                method: "POST",
                url: "<?= base_url('Ajax/getproduct') ?>",
                data: {
                    vendor: vendor
                },
                success: function(response) {
                    $('#product' + id).html(response);
                }
            });
        });


        $(document).on('change', '.product', function() {
            var id = $(this).data('id');
            var product = $('#product' + id).val();
            var vendor = $('#vendor' + id).val();
            $.ajax({
                method: "POST",
                url: "<?= base_url('Ajax/getsize') ?>",
                data: {
                    vendor: vendor,
                    product: product
                },
                success: function(response) {
                    $('#option' + id).html(response);
                }
            });
        });

        $('#getsinproduct').click(function() {
            var vid = $('.product_single').val();
            $.ajax({
                method: "POST",
                url: "<?= base_url('Ajax/searchsingleproduct') ?>",
                data: {
                    getproduct: vid
                },
                success: function(response) {
                    console.log(response);
                    if (response == 0) {
                        alert('No product found');
                    } else if (response == 1) {
                        alert('Product already added');
                    } else {
                        $('.productlist').append(response);
                    }

                }
            });
        });


        $(document).on('keyup', '.price', function() {
            var id = $(this).data('id');
            calcu(id);
        });

        $(document).on('change', '.quantity', function() {
            var id = $(this).data('id');
            calcu(id);
        });

    });

    function calcu(id) {
        var mrp = $('#mrp' + id).val();
        var quan = $('#quan' + id).val();
        $('#total' + id).val(mrp * quan);
        var to = parseInt(0);
        $(".total").each(function() {
            to += parseInt($(this).val());
        });
        $('#grandtotal').val(parseInt(to));
    }
</script>
<script type="application/javascript">
    $(document).ready(function() {
        //group add limit
        var maxGroup = 200;
        var i = 1;
        //add more fields group
        $(".addMore").click(function() {
            if ($('body').find('.fieldGroup').length < maxGroup) {
                // console.log($(".fieldGroupCopy").html());
                var fieldHTML = '<tr class="fieldGroup  "><td> <select class="form-control vendor " data-id="' + i + '" name="vendor[]" id="vendor' + i + '"> ' + $('#vendor0').html() + '</select> </td> <td> <select class="form-control product" data-id="' + i + '" name="product[]" id="product' + i + '"> <option>Select product</option> </select> </td> <td> <select class="form-control option" data-id="' + i + '" name="option[]" id="option' + i + '"> <option>Select option</option> </select> </td> <td> <input type="number" class="form-control price" data-id="' + i + '" name="price[]" id="mrp' + i + '" value="" /> </td> <td> <input type="number" class="form-control quantity" data-id="' + i + '" name="quantity[]" id="quan' + i + '" value="1" /> </td> <td> <input type="number" class="form-control total" data-id="' + i + '" name="total[]" id="total' + i + '" value="" /> </td> <td> <a href="javascript:void(0)" class="form-control btn btn-danger remove">Remove </a> </td> </tr>';
                i++;
                $('body').find('.fieldGroup:last').after(fieldHTML);
            } else {
                alert('Maximum ' + maxGroup + ' groups are allowed.');
            }
        });
        $("body").on("click", ".remove",
            function() {
                $(this).parents(".fieldGroup").remove();
            });
    });
</script>
</body>

</html>