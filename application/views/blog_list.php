<?php include('includes/header.php'); ?>
<div class="holder">
    <?php include('includes/menu.php'); ?>
    <div class="wrapper">
        <?php include('includes/top-header.php'); ?>
        <div class="content">
            <div class="container-fluid">
                <div class="row d-none">
                    <div class="col-12">
                        <div class="portlet">
                            <div class="widget10 widget10-vertical-md">
                                <div class="widget10-item">
                                    <div class="widget10-content">
                                        <h2 class="widget10-title">$27,639</h2><span class="widget10-subtitle">Total Project</span>
                                    </div>
                                    <div class="widget10-addon">
                                        <div class="avatar avatar-label-info avatar-circle widget8-avatar m-0">
                                            <div class="avatar-display"><i class="fa fa-dollar-sign"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget10-item">
                                    <div class="widget10-content">
                                        <h2 class="widget10-title">87,123</h2><span class="widget10-subtitle">New Project</span>
                                    </div>
                                    <div class="widget10-addon">
                                        <div class="avatar avatar-label-primary avatar-circle widget8-avatar m-0">
                                            <div class="avatar-display"><i class="fa fa-boxes"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget10-item">
                                    <div class="widget10-content">
                                        <h2 class="widget10-title">237</h2><span class="widget10-subtitle">On users</span>
                                    </div>
                                    <div class="widget10-addon">
                                        <div class="avatar avatar-label-success avatar-circle widget8-avatar m-0">
                                            <div class="avatar-display"><i class="fa fa-users"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget10-item">
                                    <div class="widget10-content">
                                        <h2 class="widget10-title">5,726</h2><span class="widget10-subtitle">Unique visits</span>
                                    </div>
                                    <div class="widget10-addon">
                                        <div class="avatar avatar-label-danger avatar-circle widget8-avatar m-0">
                                            <div class="avatar-display"><i class="fa fa-link"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-xl-12">
                        <div class="portlet">
                            <div class="portlet-header">
                                <div class="portlet-icon"><i class="fa fa-funnel-dollar"></i></div>
                                <h3 class="portlet-title">Employee task </h3>
                            </div>
                            <div class="carousel carousel-center my-3" id="widget-carousel-nav">
                                <?php
                                // print_r($employees);
                                foreach ($employees as $employ) {
                                ?>
                                    <div class="carousel-item">
                                        <div class="widget6">
                                            <h5 class="widget6-title"><?= $employ['admin_name'] ?></h5><span class="widget6-subtitle"><?= $employ['admin_designation'] ?></span>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                                <!-- <div class="carousel-item">
                                            <div class="widget6">
                                                <h5 class="widget6-title">Javascript Developer</h5><span class="widget6-subtitle">Singapore</span>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="widget6">
                                                <h5 class="widget6-title">Marketing Designer</h5><span class="widget6-subtitle">Edinburgh</span>
                                            </div>
                                        </div> -->
                            </div>
                            <div class="portlet-body">
                                <div class="carousel" id="widget-carousel">
                                    <?php
                                    foreach ($employees as $employ) {

                                        $projectlist = getRowById('webangel_project_updates', 'project_assigned', $employ['admin_id']);

                                        if (!empty($projectlist)) {
                                            foreach ($projectlist as $project) {

                                    ?>
                                                <div class="carousel-item">
                                                    <div class="rich-list">

                                                        <div class="rich-list-item">
                                                            <div class="rich-list-prepend">
                                                                <div class="avatar">
                                                                    <div class="avatar-display"><img src="<?= base_url() ?>uploads/profile/<?= $employ['admin_pic'] ?>" alt="Avatar image"></div>
                                                                </div>
                                                            </div>
                                                            <div class="rich-list-content">
                                                                <h4 class="rich-list-title"><?= $project['project_update_title'] ?></h4><span class="rich-list-subtitle"><?= $project['project_update_deadline'] ?></span>
                                                            </div>
                                                            <div class="rich-list-append"><span class="badge badge-label-success badge-xl"><?= $project['project_work_status'] ?></span></div>
                                                        </div>

                                                    </div>
                                                </div>
                                    <?php
                                            }
                                        }
                                    }
                                    ?>
                                    <!-- <div class="carousel-item">
                                                <div class="rich-list">
                                                    <div class="rich-list-item">
                                                        <div class="rich-list-prepend">
                                                            <div class="avatar">
                                                                <div class="avatar-display"><img src="https://dashboard1.panely-html.blueupcode.com/assets/images/avatar/avatar-1.webp" alt="Avatar image"></div>
                                                            </div>
                                                        </div>
                                                        <div class="rich-list-content">
                                                            <h4 class="rich-list-title">Airi Satou</h4><span class="rich-list-subtitle">$433,060</span>
                                                        </div>
                                                        <div class="rich-list-append"><span class="badge badge-label-danger badge-xl">-$127</span></div>
                                                    </div>
                                                    <div class="rich-list-item">
                                                        <div class="rich-list-prepend">
                                                            <div class="avatar">
                                                                <div class="avatar-display"><img src="https://dashboard1.panely-html.blueupcode.com/assets/images/avatar/avatar-2.webp" alt="Avatar image"></div>
                                                            </div>
                                                        </div>
                                                        <div class="rich-list-content">
                                                            <h4 class="rich-list-title">Angelica Ramos</h4><span class="rich-list-subtitle">$162,700</span>
                                                        </div>
                                                        <div class="rich-list-append"><span class="badge badge-label-success badge-xl">+$17</span></div>
                                                    </div>
                                                    <div class="rich-list-item">
                                                        <div class="rich-list-prepend">
                                                            <div class="avatar">
                                                                <div class="avatar-display"><img src="https://dashboard1.panely-html.blueupcode.com/assets/images/avatar/avatar-5.webp" alt="Avatar image"></div>
                                                            </div>
                                                        </div>
                                                        <div class="rich-list-content">
                                                            <h4 class="rich-list-title">Garrett Winters</h4><span class="rich-list-subtitle">$327,900</span>
                                                        </div>
                                                        <div class="rich-list-append"><span class="badge badge-label-danger badge-xl">-$25</span></div>
                                                    </div>
                                                    <div class="rich-list-item">
                                                        <div class="rich-list-prepend">
                                                            <div class="avatar">
                                                                <div class="avatar-display"><img src="https://dashboard1.panely-html.blueupcode.com/assets/images/avatar/avatar-4.webp" alt="Avatar image"></div>
                                                            </div>
                                                        </div>
                                                        <div class="rich-list-content">
                                                            <h4 class="rich-list-title">Brielle Williamson</h4><span class="rich-list-subtitle">$86,000</span>
                                                        </div>
                                                        <div class="rich-list-append"><span class="badge badge-label-success badge-xl">+$6</span></div>
                                                    </div>
                                                    <div class="rich-list-item">
                                                        <div class="rich-list-prepend">
                                                            <div class="avatar">
                                                                <div class="avatar-display"><img src="https://dashboard1.panely-html.blueupcode.com/assets/images/avatar/avatar-7.webp" alt="Avatar image"></div>
                                                            </div>
                                                        </div>
                                                        <div class="rich-list-content">
                                                            <h4 class="rich-list-title">Colleen Hurst</h4><span class="rich-list-subtitle">$205,500</span>
                                                        </div>
                                                        <div class="rich-list-append"><span class="badge badge-label-success badge-xl">+$56</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="rich-list">
                                                    <div class="rich-list-item">
                                                        <div class="rich-list-prepend">
                                                            <div class="avatar">
                                                                <div class="avatar-display"><img src="https://dashboard1.panely-html.blueupcode.com/assets/images/avatar/avatar-1.webp" alt="Avatar image"></div>
                                                            </div>
                                                        </div>
                                                        <div class="rich-list-content">
                                                            <h4 class="rich-list-title">Airi Satou</h4><span class="rich-list-subtitle">$433,060</span>
                                                        </div>
                                                        <div class="rich-list-append"><span class="badge badge-label-danger badge-xl">-$127</span></div>
                                                    </div>
                                                    <div class="rich-list-item">
                                                        <div class="rich-list-prepend">
                                                            <div class="avatar">
                                                                <div class="avatar-display"><img src="https://dashboard1.panely-html.blueupcode.com/assets/images/avatar/avatar-7.webp" alt="Avatar image"></div>
                                                            </div>
                                                        </div>
                                                        <div class="rich-list-content">
                                                            <h4 class="rich-list-title">Colleen Hurst</h4><span class="rich-list-subtitle">$205,500</span>
                                                        </div>
                                                        <div class="rich-list-append"><span class="badge badge-label-success badge-xl">+$56</span></div>
                                                    </div>
                                                    <div class="rich-list-item">
                                                        <div class="rich-list-prepend">
                                                            <div class="avatar">
                                                                <div class="avatar-display"><img src="https://dashboard1.panely-html.blueupcode.com/assets/images/avatar/avatar-4.webp" alt="Avatar image"></div>
                                                            </div>
                                                        </div>
                                                        <div class="rich-list-content">
                                                            <h4 class="rich-list-title">Brielle Williamson</h4><span class="rich-list-subtitle">$86,000</span>
                                                        </div>
                                                        <div class="rich-list-append"><span class="badge badge-label-success badge-xl">+$6</span></div>
                                                    </div>
                                                    <div class="rich-list-item">
                                                        <div class="rich-list-prepend">
                                                            <div class="avatar">
                                                                <div class="avatar-display"><img src="https://dashboard1.panely-html.blueupcode.com/assets/images/avatar/avatar-5.webp" alt="Avatar image"></div>
                                                            </div>
                                                        </div>
                                                        <div class="rich-list-content">
                                                            <h4 class="rich-list-title">Garrett Winters</h4><span class="rich-list-subtitle">$327,900</span>
                                                        </div>
                                                        <div class="rich-list-append"><span class="badge badge-label-danger badge-xl">-$25</span></div>
                                                    </div>
                                                    <div class="rich-list-item">
                                                        <div class="rich-list-prepend">
                                                            <div class="avatar">
                                                                <div class="avatar-display"><img src="https://dashboard1.panely-html.blueupcode.com/assets/images/avatar/avatar-2.webp" alt="Avatar image"></div>
                                                            </div>
                                                        </div>
                                                        <div class="rich-list-content">
                                                            <h4 class="rich-list-title">Angelica Ramos</h4><span class="rich-list-subtitle">$162,700</span>
                                                        </div>
                                                        <div class="rich-list-append"><span class="badge badge-label-success badge-xl">+$17</span></div>
                                                    </div>
                                                </div>
                                            </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xl-12">
                        <div class="row portlet-row-fill-md">
                            <div class="col-md-12">
                                <div class="portlet">
                                    <div class="portlet-header portlet-header-bordered">
                                        <div class="portlet-icon"><i class="fa fa-clipboard-list"></i></div>
                                        <h3 class="portlet-title">Todays task</h3>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="timeline timeline-timed">
                                            <?php
                                            $i = 1;
                                            if (!empty($todayTask)) {
                                                foreach ($todayTask as $task) {
                                                    if (!empty($task)) {
                                            ?>
                                                        <div class="timeline-item"><span class="timeline-time"><?= $i ?></span>
                                                            <div class="timeline-pin"><i class="marker marker-circle text-warning"></i></div>
                                                            <div class="timeline-content">
                                                                <p class="mb-0"><?= $task['project_update_title'] ?></p>
                                                            </div>
                                                        </div>
                                                <?php
                                                        $i++;
                                                    }
                                                }
                                            } else {
                                                ?>
                                                <p>No task Assigned for today</p>
                                            <?php
                                            }
                                            ?>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xl-12 d-none">
                        <div class="row portlet-row-fill-md h-100">
                            <div class="col-md-12 col-xl-12">
                                <div class="portlet portlet-primary">
                                    <div class="portlet-header">
                                        <div class="portlet-icon"><i class="fa fa-chalkboard"></i></div>
                                        <h3 class="portlet-title">Company summary</h3>
                                        <div class="portlet-addon">
                                            <div class="dropdown"><button class="btn btn-label-light dropdown-toggle" data-toggle="dropdown">June, 2020</button>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated"><a class="dropdown-item" href="#">
                                                        <div class="dropdown-icon"><i class="fa fa-poll"></i></div><span class="dropdown-content">Report</span>
                                                    </a><a class="dropdown-item" href="#">
                                                        <div class="dropdown-icon"><i class="fa fa-chart-pie"></i></div><span class="dropdown-content">Charts</span>
                                                    </a><a class="dropdown-item" href="#">
                                                        <div class="dropdown-icon"><i class="fa fa-chart-line"></i></div><span class="dropdown-content">Statistics</span>
                                                    </a>
                                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                                                        <div class="dropdown-icon"><i class="fa fa-cog"></i></div><span class="dropdown-content">Settings</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="portlet mb-2">
                                            <div class="portlet-body">
                                                <div class="widget5">
                                                    <h4 class="widget5-title">Monthly income</h4>
                                                    <div class="widget5-group">
                                                        <div class="widget5-item"><span class="widget5-info">Total</span> <span class="widget5-value">$65,880</span></div>
                                                        <div class="widget5-item"><span class="widget5-info">Change</span> <span class="widget5-value text-success">+15%</span></div>
                                                        <div class="widget5-item"><span class="widget5-info">Sales</span> <span class="widget5-value">554</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet mb-2">
                                            <div class="portlet-body">
                                                <div class="widget5">
                                                    <h4 class="widget5-title">Employee amount</h4>
                                                    <div class="widget5-group">
                                                        <div class="widget5-item"><span class="widget5-info">Total</span> <span class="widget5-value">1250</span></div>
                                                        <div class="widget5-item"><span class="widget5-info">Change</span> <span class="widget5-value text-danger">-2%</span></div>
                                                        <div class="widget5-item"><span class="widget5-info">Active</span> <span class="widget5-value">1120</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet mb-2">
                                            <div class="portlet-body">
                                                <div class="widget5">
                                                    <h4 class="widget5-title">Product sales</h4>
                                                    <div class="widget5-group">
                                                        <div class="widget5-item"><span class="widget5-info">Total</span> <span class="widget5-value">2350</span></div>
                                                        <div class="widget5-item"><span class="widget5-info">Change</span> <span class="widget5-value text-success">+10%</span></div>
                                                        <div class="widget5-item"><span class="widget5-info">Last report</span> <span class="widget5-value">2220</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="portlet mb-0">
                                            <div class="portlet-body">
                                                <div class="widget5">
                                                    <h4 class="widget5-title">Monthly profit</h4>
                                                    <div class="widget5-group">
                                                        <div class="widget5-item"><span class="widget5-info">Total</span> <span class="widget5-value">$502,100</span></div>
                                                        <div class="widget5-item"><span class="widget5-info">Change</span> <span class="widget5-value text-success">+15%</span></div>
                                                        <div class="widget5-item"><span class="widget5-info">Last month</span> <span class="widget5-value">$453,000</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-footer text-right"><button class="btn btn-label-light">View all packages</button></div>
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