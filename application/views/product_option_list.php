<?php include('includes/header.php'); ?>
<div class="holder">
    <?php include('includes/menu.php'); ?>
    <div class="wrapper">
        <?php include('includes/top-header.php'); ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-md-12     ">
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
                                                    <th>Product Code</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                if (!empty($product_group)) {
                                                    foreach ($product_group as $pro_group) {
                                                        $count = getNumRows('webangel_product_group_items', array('pg_id' => $pro_group['id']));
                                                        $pro_data = getRowById('webangel_product_group_items', 'pg_id', $pro_group['id']);
                                                ?>
                                                        <tr id="row<?= $pro_group['id'] ?>">
                                                            <td><?= $i ?></td>
                                                            <td><?= $pro_group['name'] ?></td>
                                                            <td>
                                                                <?php
                                                                $arr=array();
                                                                foreach ($pro_data as $data) { 
                                                                    $productinfo = getSingleRowById('webangel_product', array('product_id'=> $data['product_id']));
                                                                    $arr[]= $productinfo['product_item_code'];
                                                                }
                                                                echo implode(', ',$arr);
                                                                ?>
                                                            </td>
                                                            <td><a class="badge badge-success" href="<?= base_url('AdminDashboard/update_product_group/' . $pro_group['id']) ?>">Edit</a>
                                                            </td>
                                                            <td>
                                                                <button data-id="<?= $pro_group['id'] ?>" data-tab="pro_groupl" class="badge badge-danger delete">Delete</button>
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
            </div>
        </div>
        <?php include('includes/web-footer.php'); ?>
    </div>
</div>
<?php include('includes/footer.php') ?>
<?php include('includes/footer-link.php'); ?>
</body>

</html>