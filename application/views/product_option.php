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
                                <h3 class="portlet-title">Add <?= $title ?></h3>
                            </div>
                            <div class="row">
                                <div class="portlet-body">
                                    <form method="post" action="">
                                        <div class="form-group">

                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend"><span class="input-group-text">Product size and option</span></div><input type="text" class="form-control" name="name" value="<?= set_value('name') ?>" placeholder="">
                                            </div>
                                            <!-- <div class="input-group  mb-3">
                                                <div class="input-group-prepend  mb-3"><span class="input-group-text">Select Product </span></div><br>
                                                <select class="form-control" name="dataid[]" id="select2-3" multiple="multiple">
                                                    <optgroup label="Product List">
                                                        <?php
                                                        // $i = 1;
                                                        // if (!empty($product_list)) {
                                                        //     foreach ($product_list as $product) {
                                                        ?>
                                                                <option value="<?= $product['product_id'] ?>"><?= $product['product_item_code'] ?> - <?= $product['product_name'] ?></option>
                                                        <?php
                                                        //         $i++;
                                                        //     }
                                                        // }
                                                        ?>
                                                    </optgroup>

                                                </select>

                                            </div> -->




                                        </div>

                                        <button class="btn btn-primary" type="submit">Submit</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
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
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                if (!empty($product_option)) {
                                                    foreach ($product_option as $pro_option) {
                                                ?>
                                                        <tr id="row<?= $pro_option['id'] ?>">
                                                            <td><?= $i ?></td>
                                                            <td><?= $pro_option['name'] ?></td>
                                                            <td><a class="badge badge-success" href="<?= base_url('AdminDashboard/update_product_option/' . $pro_option['id']) ?>">Edit</a>
                                                            </td>
                                                            <!-- <td>
                                                                <button data-id="<?= $pro_option['id'] ?>" data-tab="pro_groupl" class="badge badge-danger delete">Delete</button>
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
            </div>
        </div>
        <?php include('includes/web-footer.php'); ?>
    </div>
</div>
<?php include('includes/footer.php') ?>
<?php include('includes/footer-link.php'); ?>
</body>

</html>