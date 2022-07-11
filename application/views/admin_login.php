<?php include('includes/header.php'); ?>

<body class="theme-light preload-active" id="fullscreen">
    <!-- <div class="preload">
        <div class="preload-dialog">
            <div class="spinner-border text-primary preload-spinner"></div>
        </div>
    </div> -->
    <div class="holder">
        <div class="wrapper p-0">
            <div class="content">
                <div class="container-fluid">
                    <div class="row no-gutters align-items-center justify-content-center h-100">
                        <div class="col-lg-6 col-xl-6">
                            <div class="portlet overflow-hidden">
                                <div class="row no-gutters">
                                    <div class="col-md-6">
                                        <div class="portlet-body d-flex flex-column justify-content-center align-items-start h-100 bg-primary text-white">
                                            <h2>Welcome back!</h2>
                                            <?php
                                            if ($this->session->has_userdata('msg')) {
                                             echo $this->session->userdata('msg');
                                             $this->session->unset_userdata('msg');
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6"> 
                                        <div class="portlet-body h-100">
                                             
                                            <?php echo form_open('adminlogin/validatelogin'); ?>
                                            <div class="form-group">
                                                <div class="float-label float-label-lg">
                                                    <?= form_input(['class' => 'form-control form-control-lg', 'placeholder' => 'Enter email', 'name' => 'admin_email', 'value' => set_value('admin_email')]) ?>
                                                    <label for="email">Email</label>
                                                    <p class="text-danger">   <?= form_error('admin_email') ?></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="float-label float-label-lg">
                                                <?= form_password(['class' => 'form-control form-control-lg', 'placeholder' => 'Enter password', 'name' => 'admin_password', 'value' => set_value('admin_password')]) ?> <label for="password">Password</label></div>
                                                <p  class="text-danger">   <?= form_error('admin_password') ?></p>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-4">
                                                <!-- <div class="form-group mb-0">
                                                    <div class="custom-control custom-control-lg custom-switch"><input type="checkbox" class="custom-control-input" id="remember" name="remember"> <label class="custom-control-label" for="remember">Remember me</label></div>
                                                </div><a href="#">Forgot password?</a> -->
                                            </div> 
                                            <?= form_submit(['class' => 'btn btn-label-primary btn-lg btn-block btn-pill', 'value' => 'Submit']); ?>
                                            <?php echo form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="sidemenu sidemenu-right sidemenu-wider" id="sidemenu-todo">
        <div class="sidemenu-header">
            <h3 class="sidemenu-title">May 14, 2020</h3>
            <div class="sidemenu-addon"><button class="btn btn-label-danger btn-icon" data-dismiss="sidemenu"><i class="fa fa-times"></i></button></div>
        </div>
        <div class="sidemenu-body pb-0" data-simplebar="data-simplebar">
            <div class="portlet portlet-bordered">
                <div class="portlet-header portlet-header-bordered">
                    <div class="portlet-icon"><i class="fa fa-tasks"></i></div>
                    <h3 class="portlet-title">Upcoming events</h3>
                </div>
                <div class="portlet-body">
                    <div class="timeline rich-list-bordered">
                        <div class="timeline-item">
                            <div class="timeline-pin"><i class="marker marker-circle text-primary"></i></div>
                            <div class="timeline-content">
                                <div class="rich-list-item">
                                    <div class="rich-list-content">
                                        <h5 class="rich-list-title">12:00</h5>
                                        <p class="rich-list-paragraph">Donec laoreet fringilla justo a pellentesque</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-pin"><i class="marker marker-circle text-success"></i></div>
                            <div class="timeline-content">
                                <div class="rich-list-item">
                                    <div class="rich-list-content">
                                        <h5 class="rich-list-title">13:20</h5>
                                        <p class="rich-list-paragraph">Nunc quis massa nec enim</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-pin"><i class="marker marker-circle text-danger"></i></div>
                            <div class="timeline-content">
                                <div class="rich-list-item">
                                    <div class="rich-list-content">
                                        <h5 class="rich-list-title">14:00</h5>
                                        <p class="rich-list-paragraph">Praesent sit amet</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portlet portlet-bordered">
                <div class="portlet-header portlet-header-bordered">
                    <div class="portlet-icon"><i class="fa fa-users"></i></div>
                    <h3 class="portlet-title">Contacts</h3>
                    <div class="portlet-addon"><button class="btn btn-label-primary btn-icon"><i class="fa fa-plus"></i></button></div>
                </div>
                <div class="portlet-body p-0">
                    <div class="rich-list rich-list-flush rich-list-action"><a href="#" class="rich-list-item">
                            <div class="rich-list-prepend">
                                <div class="avatar avatar-circle">
                                    <div class="avatar-addon avatar-addon-top">
                                        <div class="avatar-icon avatar-icon-info"><i class="fa fa-thumbtack"></i></div>
                                    </div>
                                    <div class="avatar-display"><img src="https://dashboard1.panely-html.blueupcode.com/assets/images/avatar/avatar-3.webp" alt="Avatar image"></div>
                                    <div class="avatar-addon avatar-addon-bottom"><i class="marker marker-dot text-secondary"></i></div>
                                </div>
                            </div>
                            <div class="rich-list-content">
                                <h4 class="rich-list-title">Charlie Stone</h4><span class="rich-list-subtitle">Art Director</span>
                            </div>
                            <div class="rich-list-append flex-column align-items-end"><span class="text-muted text-nowrap">1 min</span> <span class="badge badge-success badge-pill">1</span></div>
                        </a><a href="#" class="rich-list-item">
                            <div class="rich-list-prepend">
                                <div class="avatar avatar-circle">
                                    <div class="avatar-display"><img src="https://dashboard1.panely-html.blueupcode.com/assets/images/avatar/avatar-5.webp" alt="Avatar image"></div>
                                    <div class="avatar-addon avatar-addon-bottom"><i class="marker marker-dot text-success"></i></div>
                                </div>
                            </div>
                            <div class="rich-list-content">
                                <h4 class="rich-list-title">Freddie Stevens</h4><span class="rich-list-subtitle">Journalist</span>
                            </div>
                            <div class="rich-list-append flex-column align-items-end"><span class="text-muted text-nowrap">2 hour</span> <span class="badge badge-success badge-pill">12</span></div>
                        </a><a href="#" class="rich-list-item">
                            <div class="rich-list-prepend">
                                <div class="avatar avatar-circle">
                                    <div class="avatar-display"><img src="https://dashboard1.panely-html.blueupcode.com/assets/images/avatar/avatar-2.webp" alt="Avatar image"></div>
                                    <div class="avatar-addon avatar-addon-bottom"><i class="marker marker-dot text-success"></i></div>
                                </div>
                            </div>
                            <div class="rich-list-content">
                                <h4 class="rich-list-title">Tyler Clark</h4><span class="rich-list-subtitle">Programmer</span>
                            </div>
                            <div class="rich-list-append flex-column align-items-end"><span class="text-muted text-nowrap">5 hour</span></div>
                        </a><a href="#" class="rich-list-item">
                            <div class="rich-list-prepend">
                                <div class="avatar avatar-circle">
                                    <div class="avatar-addon avatar-addon-top">
                                        <div class="avatar-icon avatar-icon-success"><i class="fa fa-check"></i></div>
                                    </div>
                                    <div class="avatar-display"><img src="https://dashboard1.panely-html.blueupcode.com/assets/images/avatar/avatar-4.webp" alt="Avatar image"></div>
                                    <div class="avatar-addon avatar-addon-bottom"><i class="marker marker-dot text-secondary"></i></div>
                                </div>
                            </div>
                            <div class="rich-list-content">
                                <h4 class="rich-list-title">Darcy Harrison</h4><span class="rich-list-subtitle">Internet Marketer</span>
                            </div>
                            <div class="rich-list-append flex-column align-items-end"><span class="text-muted text-nowrap">1 day</span> <span class="badge badge-success badge-pill">2</span></div>
                        </a><a href="#" class="rich-list-item">
                            <div class="rich-list-prepend">
                                <div class="avatar avatar-circle">
                                    <div class="avatar-display"><img src="https://dashboard1.panely-html.blueupcode.com/assets/images/avatar/avatar-7.webp" alt="Avatar image"></div>
                                    <div class="avatar-addon avatar-addon-bottom"><i class="marker marker-dot text-success"></i></div>
                                </div>
                            </div>
                            <div class="rich-list-content">
                                <h4 class="rich-list-title">Victor Payne</h4><span class="rich-list-subtitle">Accountant</span>
                            </div>
                            <div class="rich-list-append flex-column align-items-end"><span class="text-muted text-nowrap">1 day</span> <span class="badge badge-success badge-pill">5</span></div>
                        </a><a href="#" class="rich-list-item">
                            <div class="rich-list-prepend">
                                <div class="avatar avatar-circle">
                                    <div class="avatar-display"><img src="https://dashboard1.panely-html.blueupcode.com/assets/images/avatar/avatar-9.webp" alt="Avatar image"></div>
                                    <div class="avatar-addon avatar-addon-bottom"><i class="marker marker-dot text-secondary"></i></div>
                                </div>
                            </div>
                            <div class="rich-list-content">
                                <h4 class="rich-list-title">Alberta Harris</h4><span class="rich-list-subtitle">UI Designer</span>
                            </div>
                            <div class="rich-list-append flex-column align-items-end"><span class="text-muted text-nowrap">2 day</span> <span class="badge badge-success badge-pill">4</span></div>
                        </a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidemenu sidemenu-right sidemenu-wider" id="sidemenu-settings">
        <div class="sidemenu-header">
            <h3 class="sidemenu-title">Settings</h3>
            <div class="sidemenu-addon"><button class="btn btn-label-danger btn-icon" data-dismiss="sidemenu"><i class="fa fa-times"></i></button></div>
        </div>
        <div class="sidemenu-body pb-0" data-simplebar="data-simplebar">
            <div class="portlet portlet-bordered">
                <div class="portlet-header portlet-header-bordered">
                    <div class="portlet-icon"><i class="fa fa-bolt"></i></div>
                    <h3 class="portlet-title">Performance</h3>
                </div>
                <div class="portlet-body">
                    <div class="widget4 mb-3">
                        <div class="widget4-group">
                            <div class="widget4-display">
                                <h6 class="widget4-subtitle">CPU Load</h6>
                            </div>
                            <div class="widget4-addon">
                                <h6 class="widget4-subtitle text-info">60%</h6>
                            </div>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-info" style="width: 60%"></div>
                        </div>
                    </div>
                    <div class="widget4 mb-3">
                        <div class="widget4-group">
                            <div class="widget4-display">
                                <h6 class="widget4-subtitle">CPU Temparature</h6>
                            </div>
                            <div class="widget4-addon">
                                <h6 class="widget4-subtitle text-success">42°</h6>
                            </div>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-success" style="width: 30%"></div>
                        </div>
                    </div>
                    <div class="widget4">
                        <div class="widget4-group">
                            <div class="widget4-display">
                                <h6 class="widget4-subtitle">RAM Usage</h6>
                            </div>
                            <div class="widget4-addon">
                                <h6 class="widget4-subtitle text-danger">6,532 MB</h6>
                            </div>
                        </div>
                        <div class="progress progress-sm">
                            <div class="progress-bar bg-danger" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="portlet portlet-bordered">
                <div class="portlet-header">
                    <h3 class="portlet-title">Customer care</h3>
                </div>
                <div class="portlet-body">
                    <div class="form-group">
                        <div class="custom-control custom-control-lg custom-switch"><input type="checkbox" class="custom-control-input" id="generalSetting1"> <label class="custom-control-label" for="generalSetting1">Enable notifications</label></div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-control-lg custom-switch"><input type="checkbox" class="custom-control-input" id="generalSetting2" checked="checked"> <label class="custom-control-label" for="generalSetting2">Enable case tracking</label></div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="custom-control custom-control-lg custom-switch"><input type="checkbox" class="custom-control-input" id="generalSetting3"> <label class="custom-control-label" for="generalSetting3">Support portal</label></div>
                    </div>
                </div>
            </div>
            <div class="portlet portlet-bordered">
                <div class="portlet-header">
                    <h3 class="portlet-title">Reports</h3>
                </div>
                <div class="portlet-body">
                    <div class="form-group">
                        <div class="custom-control custom-control-lg custom-switch"><input type="checkbox" class="custom-control-input" id="generalSetting4"> <label class="custom-control-label" for="generalSetting4">Generate reports</label></div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-control-lg custom-switch"><input type="checkbox" class="custom-control-input" id="generalSetting5" checked="checked"> <label class="custom-control-label" for="generalSetting5">Enable report export</label></div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="custom-control custom-control-lg custom-switch"><input type="checkbox" class="custom-control-input" id="generalSetting6"> <label class="custom-control-label" for="generalSetting6">Allow data</label></div>
                    </div>
                </div>
            </div>
            <div class="portlet portlet-bordered">
                <div class="portlet-header">
                    <h3 class="portlet-title">Projects</h3>
                </div>
                <div class="portlet-body">
                    <div class="form-group">
                        <div class="custom-control custom-control-lg custom-switch"><input type="checkbox" class="custom-control-input" id="generalSetting7"> <label class="custom-control-label" for="generalSetting7">Enable create projects</label></div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-control-lg custom-switch"><input type="checkbox" class="custom-control-input" id="generalSetting8" checked="checked"> <label class="custom-control-label" for="generalSetting8">Enable custom projects</label></div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="custom-control custom-control-lg custom-switch"><input type="checkbox" class="custom-control-input" id="generalSetting9"> <label class="custom-control-label" for="generalSetting9">Enable project review</label></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="float-btn float-btn-right"><button class="btn btn-flat-primary btn-icon mb-2" id="theme-toggle" data-toggle="tooltip" data-placement="right" title="Change theme"><i class="fa fa-moon"></i></button> <a href="https://dashboard1.panely-html.blueupcode.com/rtl/index.html" class="btn btn-flat-primary btn-icon" data-toggle="tooltip" data-placement="right" title="Switch to RTL"><i class="fa fa-sync"></i></a></div> -->
    <script type="text/javascript" src="assets/build/scripts/mandatory.js"></script>
    <script type="text/javascript" src="assets/build/scripts/core.js"></script>
    <script type="text/javascript" src="assets/build/scripts/vendor.js"></script>
    <script type="text/javascript" src="assets/app/pages/login.js"></script>
</body>

</html>