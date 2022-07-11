<?php include('includes/header.php'); ?>
<div class="holder">
    <?php include('includes/menu.php'); ?>
    <div class="wrapper">
        <?php include('includes/top-header.php'); ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="portlet">
                            <div class="portlet-header portlet-header-bordered">
                                <h3 class="portlet-title">
                                    <?= $title ?>
                                </h3>
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
                                <form method="post" action="">

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">Date</span></div><input type="date" class="form-control" name="date" value="<?= date("Y-m-d") ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">Particular Type</span></div>
                                            <select class="form-control" name="type" required="" id="type">
                                                <option value="">Select Type</option>
                                                <option value="0">Income</option>
                                                <option value="1">Expense</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">Category</span></div>

                                            <select name="category" class="form-control" id="category">


                                                <option value="">Select category</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">Account</span></div>
                                            <select class="form-control" name="account" required="">
                                                <option value="">Select Account</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Check">Check</option>
                                                <option value="Online">Online</option>
                                            </select>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">Amount</span></div><input type="text" class="form-control" name="amount">
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
        <?php include('includes/web-footer.php'); ?>
    </div>
</div>




<?php include('includes/footer.php') ?>
<?php include('includes/footer-link.php'); ?>


<script>
    $(document).on('change', '#type', function() {

        var type = $(this).val();

       
        $.ajax({
            method: "POST",
            url: "<?= base_url('AdminDashboard/getcategory') ?>",
            data: {
                type: type
            },
            success: function(response) {
                console.log(response);

                $('#category').html(response);
            }
        });
    });
</script>
</body>

</html>