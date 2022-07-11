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
                                        <div class="form-group row">
                                            <div class="input-group col-md-6 mt-2">
                                                <div class="input-group-prepend"><span class="input-group-text">Particular Type</span></div>

                                                <select class="form-control" name="ex_type" required="">
                                                    <option value="">Select Type</option>
                                                    <option value="0">Income</option>
                                                    <option value="1">Expense</option>


                                                </select>
                                            </div>
                                            <div class="input-group col-md-6 mt-2">
                                                <div class="input-group-prepend"><span class="input-group-text">Particular Category</span></div><input type="text" class="form-control" name="name" value="<?= set_value('name') ?>" placeholder="">
                                            </div>
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
                                                    <th>particular Type</th>
                                                    <th>Name</th>
                                                    <!-- <th>Edit</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                if (!empty($particular_category)) {
                                                    foreach ($particular_category as $category) {
                                                ?>
                                                        <tr id="row<?= $category['pid'] ?>">
                                                            <td><?= $i ?></td>
                                                            <td><?= (($category['ex_type'] == 0) ? 'Income' : 'Expense') ?></td>
                                                            <td><?= $category['name'] ?></td>
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