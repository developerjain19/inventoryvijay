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
                                <h3 class="portlet-title">NEW PROJECT INFO</h3>

                            </div>
                            <?= form_open_multipart('AdminDashboard/new_project') ?>
                            <div class="portlet-body">

                                <div class="form-group row"><label class="col-sm-4 col-lg-3 col-form-label text-muted text-sm-right"> Name of project</label>
                                    <div class="col-sm-8 col-lg-9">
                                        <?= form_input(['name'  => 'project_name', 'class' => 'form-control typeahead', 'value' => set_value('project_name')]); ?>
                                        <span class="text-danger"><?= form_error('project_name') ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-4 col-lg-3 col-form-label text-muted text-sm-right"> Project Documentation</label>
                                    <div class="col-sm-8 col-lg-9">
                                        <?= form_input(['type' => 'file', 'name'  => 'project_doc', 'class' => 'form-control typeahead', 'value' => set_value('project_doc')]); ?>
                                        <span class="text-danger"><?= form_error('project_doc') ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-4 col-lg-3 col-form-label text-muted text-sm-right"> Brief description of the project </label>
                                    <div class="col-sm-8 col-lg-9">
                                        <?= form_textarea(['name'  => 'project_desc', 'class' => 'form-control typeahead','id'=> 'quill1' , 'value' => set_value('project_desc')]); ?>
                                        <span class="text-danger"><?= form_error('project_desc') ?>

                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-4 col-lg-3 col-form-label text-muted text-sm-right"> References of projects </label>
                                    <div class="col-sm-8 col-lg-9">
                                        <?= form_textarea(['name'  => 'project_reference', 'class' => 'form-control typeahead','id'=> 'quill2' , 'value' => set_value('project_reference')]); ?>
                                        <span class="text-danger"><?= form_error('project_reference') ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-4 col-lg-3 col-form-label text-muted text-sm-right">Start Date</label>
                                    <div class="col-sm-8 col-lg-9">
                                        <?= form_input(['type'  => 'date','name'  => 'project_start_date', 'class' => 'form-control typeahead', 'value' => set_value('project_start_date')]); ?>
                                        <span class="text-danger"><?= form_error('project_start_date') ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-4 col-lg-3 col-form-label text-muted text-sm-right">End Date</label>
                                    <div class="col-sm-8 col-lg-9">
                                        <?= form_input(['type'  => 'date','name'  => 'project_end_date', 'class' => 'form-control typeahead', 'value' => set_value('project_end_date')]); ?>
                                        <span class="text-danger"><?= form_error('project_end_date') ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-4 col-lg-3 col-form-label text-muted text-sm-right">Domain details</label>
                                    <div class="col-sm-8 col-lg-9">
                                        <?= form_textarea(['name'  => 'project_domain', 'class' => 'form-control typeahead','id'=> 'quill3' , 'value' => set_value('project_domain')]); ?>
                                        <span class="text-danger"><?= form_error('project_domain') ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-4 col-lg-3 col-form-label text-muted text-sm-right">Hosting details</label>
                                    <div class="col-sm-8 col-lg-9">
                                        <?= form_textarea(['name'  => 'project_hosting', 'class' => 'form-control typeahead','id'=> 'quill4' ,'value' => set_value('project_hosting')]); ?>
                                        <span class="text-danger"><?= form_error('project_hosting') ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-4 col-lg-3 col-form-label text-muted text-sm-right">Client name</label>
                                    <div class="col-sm-8 col-lg-9">
                                        <?= form_input(['name'  => 'project_client_name', 'class' => 'form-control typeahead', 'value' => set_value('project_client_name')]); ?>
                                        <span class="text-danger"><?= form_error('project_client_name') ?>

                                        </span>
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-4 col-lg-3 col-form-label text-muted text-sm-right">Client contact no.</label>
                                    <div class="col-sm-8 col-lg-9">
                                        <?= form_input(['name'  => 'project_client_contact', 'class' => 'form-control typeahead', 'value' => set_value('project_client_contact')]); ?>
                                        <span class="text-danger"><?= form_error('project_client_contact') ?></span>

                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-4 col-lg-3 col-form-label text-muted text-sm-right"> Client email id</label>
                                    <div class="col-sm-8 col-lg-9">
                                        <?= form_input(['name'  => 'project_client_email', 'class' => 'form-control typeahead', 'value' => set_value('project_client_email')]); ?>
                                        <span class="text-danger"><span class="text-danger"><?= form_error('project_client_email') ?>

                                            </span>
                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-4 col-lg-3 col-form-label text-muted text-sm-right"> Priority level</label>
                                    <div class="col-sm-8 col-lg-9">
                                        <select name="project_priority_level" class="form-control typeahead">
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option> 
                                        </select> 
                                        <span class="text-danger"><?= form_error('project_priority_level') ?></span>

                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-4 col-lg-3 col-form-label text-muted text-sm-right">Project Type</label>
                                    <div class="col-sm-8 col-lg-9">
                                        <select name="project_type" class="form-control typeahead">
                                            <?php
                                            $admin = getAllRow('webangel_project_type');
                                            foreach($admin as $adminList){
                                            ?>
                                            <option value="<?= $adminList['pt_id'] ?>"><?= $adminList['pt_name'] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select> 
                                        <span class="text-danger"><?= form_error('project_type') ?></span>

                                    </div>
                                </div>
                                <div class="form-group row"><label class="col-sm-4 col-lg-3 col-form-label text-muted text-sm-right">Project head</label>
                                    <div class="col-sm-8 col-lg-9">
                                        <select name="asigned_to" class="form-control typeahead" required>
                                            <?php
                                            $admin = getAllRow('webangel_admin');
                                            foreach($admin as $adminList){
                                            ?>
                                            <option value="<?= $adminList['admin_id'] ?>"><?= $adminList['admin_name'] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select> 
                                        <!-- <span class="text-danger"><?= form_error('asigned_to') ?></span> -->

                                    </div>
                                </div>

                                <?= form_submit(['class' => 'btn btn-primary', 'value' => 'Submit']); ?>
                            </div>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div><?php include('includes/web-footer.php'); ?>
    </div>
</div>
<?php include('includes/footer.php') ?>
<?php include('includes/footer-link.php'); ?>
</body>

</html>