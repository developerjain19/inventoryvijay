<?php include('includes/header.php'); ?>
<div class="holder">
    <?php include('includes/menu.php'); ?>
    <div class="wrapper">
        <?php include('includes/top-header.php'); ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row"> 
                    <div class="col-md-5 ">
                        <div class="portlet">
                            <div class="portlet-header portlet-header-bordered">
                                <h3 class="portlet-title">Edit <?= $title ?></h3>
                            </div>
                            <div class="row">
                                <div class="portlet-body">
                                    <form method="post" action="">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Service Code</span></div><input type="text" class="form-control" name="code" value="<?= $service[0]['code'] ?>" placeholder="">
                                            </div><br>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Service Name</span></div><input type="text" class="form-control" name="name" value="<?= $service[0]['name'] ?>" placeholder="">
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
</body>

</html>