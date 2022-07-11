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
                                <div class="col-md-12">
                                    <div class="portlet-body">
                                        <br>
                                        <table id="datatable-1" class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Invoice no.</th>
                                                    <th>Date</th>
                                                  
                                                    <th>Customer Name </th>
                                                   
                                                    <th>Total amount</th>
                                                    <th>View Invoice </th>
                                                    <th>Action </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                if (!empty($billing)) {
                                                    foreach ($billing as $job) {
                                                       

                                                ?>
                                                        <tr id="row<?= $job['jid'] ?>">
                                                            <td><?= $job['jid'] ?></td>
                                                            <td><?=  $job['date']  ?></td>
                                                          
                                                            <td><?= $job['driver_nm'] ?>(<?= $job['driver_no'] ?>)</td>
                                                           
                                                            <td>Rs. <?= $job['total_amount'] ?> /-</td>
                                                            <td>
                                                                <a href="<?= base_url('AdminDashboard/billing/' . $job['jid']) ?>"><button class="badge badge-primary">View Invoice</button>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <button data-id="<?= $job['jid'] ?>" data-tab="job" class="badge badge-danger delete">Returns</button>

                                                                <button data-id="<?= $job['jid'] ?>" data-tab="job" class="badge badge-warning">Replace</button>
                                                                
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