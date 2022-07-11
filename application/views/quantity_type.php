<?php include('includes/header.php'); ?>
<div class="holder">
    <?php include('includes/menu.php'); ?>
    <div class="wrapper">
        <?php include('includes/top-header.php'); ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-7">
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
                                <div class="col-md-12">
                                    <div class="portlet-body">
                                        <br>
                                        <table id="datatable-1" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>S.no.</th>
                                                    <th>Name</th>
                                                    <th>Delete</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                if (!empty($quantity_type)) {
                                                    foreach ($quantity_type as $quantity) {
                                                ?>
                                                        <tr id="row<?= $quantity['qty_id'] ?>">
                                                            <td><?= $i ?></td>
                                                            <td><?= $quantity['qty_name'] ?></td>
                                                            <td>
                                                                <a href="<?= base_url('AdminDashboard/edit_quantity_type/'.$quantity['qty_id']) ?>">
                                                                <button class="badge badge-primary">Edit</button>
                                                                </a>
                                                                
                                                                <!-- <button data-id="<?= $quantity['qty_id'] ?>" data-tab="quantity" class="badge badge-danger delete">Delete</button> -->
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
                    <div class="col-md-5 ">
                        <div class="portlet">
                            <div class="portlet-header portlet-header-bordered">
                                <h3 class="portlet-title">Add <?= $title ?></h3>
                            </div>
                            <div class="row">
                                <div class="portlet-body">
                                    <form method="post" action="">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text">Quantity name</span></div><input type="text" class="form-control" name="qty_name" value="<?= set_value('qty_name') ?>" placeholder="">
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