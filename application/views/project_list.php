<?php include('includes/header.php'); ?>
<div class="holder">
    <?php include('includes/menu.php'); ?>
    <div class="wrapper">
        <?php include('includes/top-header.php'); ?>
        <div class="content">
            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet">
                                <div class="portlet-body">
                                    <div class="row">
                                        <?php
                                        if (!empty($projectlist)) {
                                            foreach ($projectlist as $projectdetails) {
                                        ?>
                                                <div class=" col-md-3 mb-4">
                                                    <!-- <img src="<?= base_url('uploads/project_logo/' . $projectdetails['project_logo']) ?>" class="card-img-top" alt="Card image"> -->
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="card-title"><?= $projectdetails['project_name'] ?></h5>
                                                            <p class="card-text">
                                                                Start date - <?= $projectdetails['project_start_date'] ?><br>
                                                                Deadline - <?= $projectdetails['project_end_date'] ?></p>
                                                            <a href="<?= $projectdetails['project_end_date'] ?>" class="btn btn-primary">Visit URL</a>
                                                            <a href="<?= base_url('AdminDashboard/project_pipeline/' . $projectdetails['project_id'] . '/' . $projectdetails['project_name']) ?>" class="btn btn-warning">View pipeline</a>
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php
                                            }
                                        } else {
                                            echo 'No projects till now';
                                        }
                                        ?>
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