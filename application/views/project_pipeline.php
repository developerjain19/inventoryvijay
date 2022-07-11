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
                                <h3 class="portlet-title"><?= $title ?> Project Timeline</h3>
                                <button class="btn btn-primary m-1" data-toggle="modal" data-target="#modal6">Client Details </button>
                                <button class="btn btn-primary m-1" data-toggle="modal" data-target="#modal2">Domain/ Hosting </button>
                                <button class="btn btn-primary m-1" data-toggle="modal" data-target="#modal9">Project Details </button>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#modal8">New Task</button>
                                <button class="btn btn-primary m-1" data-toggle="modal" data-target="#modal5"><i class="fa fa-pen"></i></button>
                                <div class="modal fade" id="modal8">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <?= form_open(''); ?>
                                            <div class="modal-header">
                                                <h5 class="modal-title">New Task</h5><button type="button" class="btn btn-label-danger btn-icon" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group"><label for="email1">Deadline </label> <input type="date" class="form-control" name="project_update_deadline"> <small class="form-text text-danger text-muted"><?= form_error('project_update_deadline') ?></small>
                                                    <input type="hidden" class="form-control" name="project_id" value="<?= $id ?>" />
                                                </div>
                                                <div class="form-group"><label for="email1">Title </label> <input type=" text" class="form-control" name="project_update_title"> <small class="form-text text-danger text-muted"> <?= form_error('project_update_title') ?></small></div>
                                                <div class="form-group"><label for="email1">Work description </label> <input type=" text" class="form-control" name="project_update_details"> <small class="form-text text-danger text-muted"> <?= form_error('project_update_details') ?></small></div>
                                                <div class="form-group"><label for="email1">Assign task to </label>
                                                    <select class="form-control" name="project_assigned">
                                                        <?php
                                                        foreach ($emp as $empList) {
                                                        ?>
                                                            <option value="<?= $empList['admin_id'] ?>"><?= $empList['admin_name'] ?> </option>
                                                        <?php
                                                        }
                                                        ?>


                                                    </select><small class="form-text text-danger text-muted"> <?= form_error('project_assigned') ?></small>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <?= form_submit(['class' => 'btn btn-primary mr-2', 'value' => 'Submit']); ?>
                                            </div>
                                            <?= form_close() ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bd-example-modal-lg" id="modal9">
                                    <div class="modal-dialog  modal-lg ">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title">Project Details</h5><button type="button" class="btn btn-label-danger btn-icon" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                            </div>
                                            <div class="modal-body">

                                                <h6>Project Name - </h6>
                                                <p><?= $projectDetail[0]['project_name'] ?></p>
                                                <h6>Project Desciption - </h6>
                                                <p><?= $projectDetail[0]['project_desc'] ?></p>
                                                <h6>Project References - </h6>
                                                <p><?= $projectDetail[0]['project_reference'] ?></p>
                                                <h6>Project Documentation - </h6>
                                                <p><?= $projectDetail[0]['project_doc'] ?></p>
                                                <h6>Project Start date - </h6>
                                                <p><?= $projectDetail[0]['project_start_date'] ?></p>
                                                <h6>Project Deadline - </h6>
                                                <p><?= $projectDetail[0]['project_end_date'] ?></p>

                                                <h6>Project Priority Level - </h6>
                                                <p><?= $projectDetail[0]['project_priority_level'] ?></p>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bd-example-modal-lg" id="modal2">
                                    <div class="modal-dialog  modal-lg ">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title">Project Details</h5><button type="button" class="btn btn-label-danger btn-icon" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                            </div>
                                            <div class="modal-body">


                                                <h6>Project Domain details -</h6>
                                                <p><?= $projectDetail[0]['project_domain'] ?></p>
                                                <hr>
                                                <h6>Project Hosting details - </h6>
                                                <p><?= $projectDetail[0]['project_hosting'] ?></p>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bd-example-modal-sm" id="modal6">
                                    <div class="modal-dialog  modal-lg ">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title">Project Details</h5><button type="button" class="btn btn-label-danger btn-icon" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                            </div>
                                            <div class="modal-body">


                                                <h6>Project client Name - <?= $projectDetail[0]['project_client_name'] ?></h6>
                                                <h6>Project Client contact - <?= $projectDetail[0]['project_client_contact'] ?></h6>
                                                <h6>Project Cliet Email - <?= $projectDetail[0]['project_client_email'] ?></h6>
                                                <h6>Project Priority Level - <?= $projectDetail[0]['project_priority_level'] ?></h6>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade bd-example-modal-lg" id="modal5">
                                    <div class="modal-dialog  modal-lg ">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title">Update Project Details</h5><button type="button" class="btn btn-label-danger btn-icon" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                            </div>
                                            <div class="modal-body">


                                                <?= form_open_multipart('AdminDashboard/update_project') ?>
                                                <div class="portlet-body">

                                                    <div class="form-group row"><label class="col-sm-4 col-lg-3 col-form-label text-muted text-sm-right"> Name of project</label>
                                                        <div class="col-sm-8 col-lg-9">
                                                            <?= form_input(['name'  => 'project_name', 'class' => 'form-control typeahead', 'value' => $projectDetail[0]['project_name']]); ?>
                                                            <span class="text-danger"><?= form_error('project_name') ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row"><label class="col-sm-4 col-lg-3 col-form-label text-muted text-sm-right"> Project Documentation</label>
                                                        <div class="col-sm-8 col-lg-9">
                                                            <?= form_input(['type' => 'file', 'name'  => 'project_doc', 'class' => 'form-control typeahead', 'value' => $projectDetail[0]['project_doc']]); ?>
                                                            <span class="text-danger"><?= form_error('project_doc') ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row"><label class="col-sm-4 col-lg-3 col-form-label text-muted text-sm-right"> Brief description of the project </label>
                                                        <div class="col-sm-8 col-lg-9">
                                                            <?= form_textarea(['name'  => 'project_desc', 'class' => 'form-control typeahead', 'id' => 'quill1', 'value' => $projectDetail[0]['project_desc']]); ?>
                                                            <span class="text-danger"><?= form_error('project_desc') ?>

                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row"><label class="col-sm-4 col-lg-3 col-form-label text-muted text-sm-right"> References of projects </label>
                                                        <div class="col-sm-8 col-lg-9">
                                                            <?= form_textarea(['name'  => 'project_reference', 'class' => 'form-control typeahead', 'id' => 'quill2', 'value' => $projectDetail[0]['project_reference']]); ?>
                                                            <span class="text-danger"><?= form_error('project_reference') ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row"><label class="col-sm-4 col-lg-3 col-form-label text-muted text-sm-right">Start Date</label>
                                                        <div class="col-sm-8 col-lg-9">
                                                            <?= form_input(['type'  => 'date', 'name'  => 'project_start_date', 'class' => 'form-control typeahead', 'value' => $projectDetail[0]['project_start_date']]); ?>
                                                            <span class="text-danger"><?= form_error('project_start_date') ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row"><label class="col-sm-4 col-lg-3 col-form-label text-muted text-sm-right">End Date</label>
                                                        <div class="col-sm-8 col-lg-9">
                                                            <?= form_input(['type'  => 'date', 'name'  => 'project_end_date', 'class' => 'form-control typeahead', 'value' => $projectDetail[0]['project_end_date']]); ?>
                                                            <span class="text-danger"><?= form_error('project_end_date') ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row"><label class="col-sm-4 col-lg-3 col-form-label text-muted text-sm-right">Domain details</label>
                                                        <div class="col-sm-8 col-lg-9">
                                                            <?= form_textarea(['name'  => 'project_domain', 'class' => 'form-control typeahead', 'id' => 'quill3', 'value' => $projectDetail[0]['project_domain']]); ?>
                                                            <span class="text-danger"><?= form_error('project_domain') ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row"><label class="col-sm-4 col-lg-3 col-form-label text-muted text-sm-right">Hosting details</label>
                                                        <div class="col-sm-8 col-lg-9">
                                                            <?= form_textarea(['name'  => 'project_hosting', 'class' => 'form-control typeahead', 'id' => 'quill4', 'value' => $projectDetail[0]['project_hosting']]); ?>
                                                            <span class="text-danger"><?= form_error('project_hosting') ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row"><label class="col-sm-4 col-lg-3 col-form-label text-muted text-sm-right">Client name</label>
                                                        <div class="col-sm-8 col-lg-9">
                                                            <?= form_input(['name'  => 'project_client_name', 'class' => 'form-control typeahead', 'value' => $projectDetail[0]['project_client_name']]); ?>
                                                            <span class="text-danger"><?= form_error('project_client_name') ?>

                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row"><label class="col-sm-4 col-lg-3 col-form-label text-muted text-sm-right">Client contact no.</label>
                                                        <div class="col-sm-8 col-lg-9">
                                                            <?= form_input(['name'  => 'project_client_contact', 'class' => 'form-control typeahead', 'value' => $projectDetail[0]['project_client_contact']]); ?>
                                                            <span class="text-danger"><?= form_error('project_client_contact') ?></span>

                                                        </div>
                                                    </div>
                                                    <div class="form-group row"><label class="col-sm-4 col-lg-3 col-form-label text-muted text-sm-right"> Client email id</label>
                                                        <div class="col-sm-8 col-lg-9">
                                                            <?= form_input(['name'  => 'project_client_email', 'class' => 'form-control typeahead', 'value' =>$projectDetail[0]['project_client_email']]); ?>
                                                            <span class="text-danger"><span class="text-danger"><?= form_error('project_client_email') ?>

                                                                </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row"><label class="col-sm-4 col-lg-3 col-form-label text-muted text-sm-right"> Priority level</label>
                                                        <div class="col-sm-8 col-lg-9">
                                                            <select name="project_priority_level" class="form-control typeahead">
                                                                <option value="A" <?= (($projectDetail[0]['project_priority_level'] == 'A')? 'selected':'') ?>>A</option>
                                                                <option value="B" <?= (($projectDetail[0]['project_priority_level'] == 'B')? 'selected':'') ?>>B</option>
                                                                <option value="C" <?= (($projectDetail[0]['project_priority_level'] == 'C')? 'selected':'') ?>>C</option>
                                                                <option value="D" <?= (($projectDetail[0]['project_priority_level'] == 'D')? 'selected':'') ?>>D</option>
                                                            </select>
                                                            <span class="text-danger"><?= form_error('project_priority_level') ?></span>

                                                        </div>
                                                    </div>
                                                    <div class="form-group row"><label class="col-sm-4 col-lg-3 col-form-label text-muted text-sm-right">Project Type</label>
                                                        <div class="col-sm-8 col-lg-9">
                                                            <select name="project_type" class="form-control typeahead">
                                                                <?php
                                                                $admin = getAllRow('webangel_project_type');
                                                                foreach ($admin as $adminList) {
                                                                ?>
                                                                    <option value="<?= $adminList['pt_id'] ?>" <?= (($projectDetail[0]['project_type'] == $adminList['pt_id'])? 'selected':'') ?>><?= $adminList['pt_name'] ?></option>
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
                                                                foreach ($admin as $adminList) {
                                                                ?>
                                                                    <option value="<?= $adminList['admin_id'] ?>" <?= (($projectDetail[0]['asigned_to'] == $adminList['admin_id'])? 'selected':'') ?>><?= $adminList['admin_name'] ?></option>
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
                            </div>

                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="portlet">
                            <div class="portlet-body">
                                <div class="rich-list rich-list-flush">
                                    <?php
                                    if (!empty($projectPipeline)) {
                                        foreach ($projectPipeline as $projPipelineArr) {

                                            $admin = getRowById('webangel_admin', 'admin_id', $projPipelineArr['project_assigned']);
                                    ?>
                                            <div class="rich-list-item">
                                                <div class="rich-list-prepend">
                                                    <div class="avatar">
                                                        <div class="avatar-display"><img src="<?= base_url() ?>uploads/profile/<?= $admin[0]['admin_pic'] ?>" /></div>
                                                    </div>
                                                </div>
                                                <div class="rich-list-content">
                                                    <h4 class="rich-list-title"><?= $projPipelineArr['project_update_title'] ?></h4><span class="rich-list-subtitle"><?= $projPipelineArr['project_update_details'] ?></span>

                                                </div>
                                                <div class="rich-list-append"><?= $projPipelineArr['project_update_deadline'] ?></div>
                                                <div class="rich-list-append"><button class="btn btn-primary" data-toggle="modal" data-target="#modal7"><?= (($projPipelineArr['project_work_status'] == '0') ? 'NEW' : (($projPipelineArr['project_work_status'] == '1') ? 'ON-WORKING' : (($projPipelineArr['project_work_status'] == '2') ? 'STUCK' : (($projPipelineArr['project_work_status'] == '3') ? 'ON-HOLD' : (($projPipelineArr['project_work_status'] == '4') ? 'COMPLETED' : ''))))) ?></button>

                                                </div>
                                                <div class="modal fade" id="modal7">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Update Task Status </h5><button type="button" class="btn btn-label-danger btn-icon" data-dismiss="modal"><i class="fa fa-times"></i></button>
                                                            </div>
                                                            <form action="<?= base_url('AdminDashboard/project_pipeline_task_update/' . $id . '/' . $title) ?>" method="POST">
                                                                <div class="modal-body">
                                                                    <p class="mb-0">Better be completed</p>
                                                                    <input type="hidden" name="project_updates_id" value="<?= $projPipelineArr['project_updates_id'] ?>" />
                                                                    <input type="radio" value="0" name="project_work_status" <?= (($projPipelineArr['project_work_status'] == '0') ? 'checked' : '') ?> /> NEW <br />
                                                                    <label id="1"><input type="radio" value="1" name="project_work_status" <?= (($projPipelineArr['project_work_status'] == '1') ? 'checked' : '') ?> /> ON-WORKING</label> <br />
                                                                    <label id="2"><input type="radio" value="2" name="project_work_status" <?= (($projPipelineArr['project_work_status'] == '2') ? 'checked' : '') ?> /> STUCK </label><br />
                                                                    <label id="3"><input type="radio" value="3" name="project_work_status" <?= (($projPipelineArr['project_work_status'] == '3') ? 'checked' : '') ?> /> ON-HOLD </label><br />
                                                                    <label id="4"><input type="radio" value="4" name="project_work_status" <?= (($projPipelineArr['project_work_status'] == '4') ? 'checked' : '') ?> /> COMPLETED </label> <br />
                                                                </div>
                                                                <div class="modal-footer"><button type="submit" class="btn btn-primary mr-2">Submit</button> <button class="btn btn-outline-danger">Cancel</button></div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </div>
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