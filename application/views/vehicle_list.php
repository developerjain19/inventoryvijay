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
                                            <th>Vehicle no.</th>
                                            <th>Driver Name</th>
                                            <th>Driver no.</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        if (!empty($webangel_vehicle)) {
                                            foreach ($webangel_vehicle as $vehicle) {
                                        ?>
                                                <tr id="row<?= $vehicle['vid'] ?>">
                                                    <td><?= $i ?></td>
                                                    <td><?= $vehicle['veh_no'] ?></td>
                                                    <td><?= $vehicle['veh_driver_nm'] ?></td>
                                                    <td><?= $vehicle['veh_driver_no'] ?></td>
                                                    <td><a class="badge badge-success" href="<?= base_url('AdminDashboard/update_vehicle/' . $vehicle['vid']) ?>">Edit</a>
                                                    </td>
                                                    <td>
                                                        <button data-id="<?= $vehicle['vid'] ?>" data-tab="vehicle" class="badge badge-danger delete">Delete</button>
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