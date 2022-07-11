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
                                <h3 class="portlet-title"> <?php
                                                            if (!empty($vendor)) {
                                                                foreach ($vendor as $vennm) {
                                                            ?>
                                            <?= $vennm['name'] ?>
                                    <?php
                                                                }
                                                            }
                                    ?> - <?= $title ?></h3>
                            </div>
                            <div class="row">
                                <div class="portlet-body">
                                    <form method="post" action="">
                                        <div class="form-group row">
                                            <div class="input-group col-md-12 mt-2">

                                                <?php
                                                if (!empty($vendor_product_option)) {
                                                    foreach ($vendor_product_option as $data_row) {
                                                ?>
                                                        <div class="fieldGroup row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>Product Name</label>
                                                                    <select class="form-control" name="product_nm[]" id="product_nm">
                                                                        <option value="">Select Product name</option>
                                                                        <?php foreach ($product_list as $row) {
                                                                        ?>
                                                                            <option value="<?= $row['product_id']; ?>" <?= (($data_row['product_id'] == $row['product_id']) ? 'selected' : '') ?>><?= $row['product_name']; ?></option>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label>Product size/option </label>
                                                                    <select class="form-control" name="product_option[]" id="product_option">
                                                                        <option value="">Select Product size/option</option>
                                                                        <?php foreach ($product_option as $row) {
                                                                        ?>
                                                                            <option value="<?= $row['id']; ?>" <?= (($data_row['product_option_id'] == $row['id']) ? 'selected' : '') ?>><?= $row['name']; ?></option>
                                                                        <?php
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-1">
                                                                <br>
                                                                <a href="javascript:void(0)" class="btn btn-danger remove">Remove</a>
                                                            </div>
                                                        </div>

                                                <?php
                                                    }
                                                }
                                                ?>
                                                <div class="fieldGroup row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Product Name</label>
                                                            <select class="form-control" name="product_nm[]" id="product_nm">
                                                                <option value="">Select Product name</option>
                                                                <?php foreach ($product_list as $row) {
                                                                ?>
                                                                    <option value="<?= $row['product_id']; ?>"><?= $row['product_name']; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Product size/option </label>
                                                            <select class="form-control" name="product_option[]" id="product_option">
                                                                <option value="">Select Product size/option</option>
                                                                <?php foreach ($product_option as $row) {
                                                                ?>
                                                                    <option value="<?= $row['id']; ?>"><?= $row['name']; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Price</label>
                                                            <input type="text" class="form-control" name="price[]" placeholder="price">
                                                        </div>
                                                    </div> -->
                                                    <div class="col-md-1">
                                                        <br>
                                                        <a href="javascript:void(0)" class="btn btn-success addMore">ADD </a>
                                                    </div>
                                                </div>
                                                <div class="fieldGroupCopy row" style="display: none;">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Product Name</label>
                                                            <select class="form-control" name="product_nm[]" id="product_nm">
                                                                <option value="">Select Product name</option>
                                                                <?php foreach ($product_list as $row) {
                                                                ?>
                                                                    <option value="<?= $row['product_id']; ?>"><?= $row['product_name']; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Product size/option </label>
                                                            <select class="form-control" name="product_option[]" id="product_option">
                                                                <option value="">Select Product size/option</option>
                                                                <?php foreach ($product_option as $row) {
                                                                ?>
                                                                    <option value="<?= $row['id']; ?>"><?= $row['name']; ?></option>
                                                                <?php
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-1">
                                                        </br>
                                                        <a href="javascript:void(0)" class="btn btn-danger remove">Remove</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- <div class="input-group col-md-12 mt-2" id="product">

                                                
                                            </div> -->


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
        // $('#getproduct').click(function() {
        //     var getproduct = $("#select2-1").val();
        //     console.log(getproduct);
        //     $.ajax({
        //         method: "POST",
        //         url: "<?= base_url('Ajax/searchproduct_name') ?>",
        //         data: {
        //             getproduct: getproduct
        //         },
        //         success: function(response) {
        //             console.log(response);
        //             $('.productlist').append(response);
        //         }
        //     });
        // });
        // $("body").on("click", ".remove", function() {
        //     $(this).parents(".fieldGroup").remove();
        // });

    });
</script>
<script type="application/javascript">
    $(document).ready(function() {
        //group add limit
        var maxGroup = 200;
        //add more fields group
        $(".addMore").click(function() {
            if ($('body').find('.fieldGroup').length < maxGroup) {
                var fieldHTML = '<div class="fieldGroup row">' + $(".fieldGroupCopy").html() + '</div>';
                $('body').find('.fieldGroup:last').after(fieldHTML);
            } else {
                alert('Maximum ' + maxGroup + ' groups are allowed.');
            }
        });
        $("body").on("click",
            ".remove",
            function() {
                $(this).parents(".fieldGroup").remove();
            });
    });
</script>
</body>

</html>