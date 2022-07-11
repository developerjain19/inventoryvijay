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
                                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Import Product List
                                </button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Import Product List</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form method="post" action="<?= base_url('AdminDashboard/importproduct') ?>" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span class="input-group-text">Select file</span></div><input type="file" class="form-control" name="file" placeholder="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Import</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> -->
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
                                            <div class="input-group-prepend"><span class="input-group-text">Item Name</span></div><input type="text" class="form-control" name="product_name" value="<?= (($tag == 'edit') ? $product_list['0']['product_name'] : '') ?>" placeholder="">
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
</body>

</html>