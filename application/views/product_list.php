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
                                            <th>Edit</th>
                                            <!-- <th>Delete</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        if (!empty($product_list)) {
                                            foreach ($product_list as $product) { 
                                        ?>
                                                <tr id="row<?= $product['product_id'] ?>">
                                                    <td><?= $i ?></td> 
                                                    <td><?= $product['product_name'] ?></td> 
                                                    <td><a class="badge badge-success" href="<?= base_url('AdminDashboard/update_product/' . $product['product_id']) ?>">Edit</a>
                                                    </td>
                                                    <!-- <td>
                                                        <button data-id="<?= $product['product_id'] ?>" data-tab="product" class="badge badge-danger delete">Delete</button>
                                                    </td> -->


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