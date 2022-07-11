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
                                <table id="datatable-1" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>S.no.</th>
                                            <th>Name</th>
                                            <th>Product list</th>
                                            <th>Stock update</th>
                                            <th>Payment details</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        if (!empty($vendor_list)) {
                                            foreach ($vendor_list as $store) {
                                        ?>
                                                <tr id="row<?= $store['id'] ?>">
                                                    <td><?= $i ?></td>
                                                    <td><?= $store['name'] ?></td>
                                                    <td>
                                                        <a class="badge badge-primary" href="<?= base_url('AdminDashboard/update_vendor_productlist/' . $store['id']) ?>">Product list</a>
                                                    </td>
                                                    <td>
                                                        <a class="badge badge-info" href="<?= base_url('AdminDashboard/update_stock/' . $store['id']) ?>">Update Stock</a>
                                                    </td>
                                                    <td>
                                                        <a class="badge badge-success" href="<?= base_url('AdminDashboard/update_store/' . $store['id']) ?>">Payment details</a>
                                                    </td>
                                                    <td>
                                                        <a class="badge badge-danger" href="<?= base_url('AdminDashboard/update_store/' . $store['id']) ?>">Edit</a>
                                                    </td>
                                                </tr>
                                        <?php
                                                $i++;
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
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