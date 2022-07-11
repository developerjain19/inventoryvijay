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
                                            <div class="input-group-prepend"><span class="input-group-text">Vehicle no</span></div><input type="text" class="form-control" name="veh_no" value="<?= (($tag == 'edit') ? $vehicle_list['0']['veh_no'] : '') ?>" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">Driver Name</span></div><input type="text" class="form-control" name="veh_driver_nm" value="<?= (($tag == 'edit') ? $vehicle_list['0']['veh_driver_nm'] : '') ?>" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text">Driver Contact</span></div><input type="text" class="form-control" name="veh_driver_no" value="<?= (($tag == 'edit') ? $vehicle_list['0']['veh_driver_no'] : '') ?>" placeholder="">
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