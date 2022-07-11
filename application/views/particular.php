<style>
    .float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 80px;
        right: 40px;
        background-color: #bf190f;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }

    .my-float {
        margin-top: 16px;
    }
</style>


<?php include('includes/header.php'); ?>
<div class="holder">
    <?php include('includes/menu.php'); ?>
    <div class="wrapper">
        <?php include('includes/top-header.php'); ?>
        <div class="content">
            <div class="container-fluid">
                <h2 class="text-center"><b>ALL Expenses & Income</b></h2>
                <br>


                <div class="row">
                    <div class="col-12">
                        <div class="portlet">
                            <div class="widget10 widget10-vertical-md">
                                <div class="widget10-item">
                                    <div class="widget10-content">
                                        <h2 class="widget10-title"> ₹ <?= $total_exp[0]['sum(`amount`)'] ?></h2><span class="widget10-subtitle">Total Expense</span>
                                    </div>
                                    <div class="widget10-addon">
                                        <div class="avatar avatar-label-danger avatar-circle widget8-avatar m-0">
                                            <div class="avatar-display"><i class="fa fa-dollar-sign"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget10-item">
                                    <div class="widget10-content">
                                        <h2 class="widget10-title"> ₹ <?= $total_in[0]['sum(`amount`)'] ?></h2><span class="widget10-subtitle">Total Income</span>
                                    </div>
                                    <div class="widget10-addon">
                                        <div class="avatar avatar-label-success avatar-circle widget8-avatar m-0">
                                            <div class="avatar-display"><i class="fa fa-dollar-sign"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget10-item">
                                    <div class="widget10-content">
                                        <h2 class="widget10-title">

                                        ₹  <?php
                                            print_r($month_exp[0]['amount']);
                                            ?>

                                        </h2><span class="widget10-subtitle">

                                            Monthly Expense

                                        </span>
                                    </div>
                                    <div class="widget10-addon">
                                        <div class="avatar avatar-label-danger avatar-circle widget8-avatar m-0">
                                            <div class="avatar-display"><i class="fa fa-dollar-sign"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget10-item">
                                    <div class="widget10-content">
                                        <h2 class="widget10-title"> ₹ <?php
                                                                    print_r($month_In[0]['amount']);
                                                                    ?></h2><span class="widget10-subtitle">Monthly Income</span>
                                    </div>
                                    <div class="widget10-addon">
                                        <div class="avatar avatar-label-success avatar-circle widget8-avatar m-0">
                                            <div class="avatar-display"><i class="fa fa-dollar-sign"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-12">
                    <div class="portlet portlet-primary">
                        <?php
                        $pr = 0;
                        if (!empty($parti)) {
                            foreach ($parti as $getdate) {
                        ?>

                                <div class="portlet-header">
                                    <div class="portlet-icon"><i class="fa fa-calendar"></i></div>
                                    <h3 class="portlet-title"><?= date_format(date_create($getdate['date']), 'd M , Y')  ?></h3>

                                </div>
                                <div class="portlet-body">

                                    <?php
                                    $ex = getRowById('webangel_particular', 'date', $getdate['date']);
                                    if (!empty($ex)) {
                                        foreach ($ex as $money) {

                                    ?>

                                            <div class="portlet mb-2">
                                                <div class="portlet-body">
                                                    <div class="widget5">
                                                        <h4 class="widget5-title"></h4>
                                                        <div class="widget5-group">
                                                            <div class="widget5-item"><span class="widget5-info">Expense Type</span>
                                                                <span class="widget5-value  <?= (($money['type'] == '0') ? 'text-success' : 'text-danger')  ?> "><?= (($money['type'] == '0') ? 'Income' : 'Expense')  ?> </span>
                                                            </div>
                                                            <div class="widget5-item"><span class="widget5-info">Category</span>
                                                                <span class="widget5-value"><?= $money['category'] ?></span>
                                                            </div>

                                                            <div class="widget5-item"><span class="widget5-info">Amount</span>

                                                                <span class="badge  <?= (($money['type'] == '0') ? 'badge-label-success' : 'badge-label-danger')  ?>   badge-xl" style="max-width:100px"> <?= (($money['type'] == '+') ? 'badge-label-success' : '-')  ?> ₹ <?= $money['amount'] ?></span>
                                                                <?php $pr += (int)$money['amount'] ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                    <?php

                                        }
                                    }
                                    ?>


                                </div>

                        <?php

                            }
                        }
                        ?>



                    </div>
                </div>


            </div>
        </div>
        <?php include('includes/web-footer.php'); ?>
    </div>
</div>


<a href="<?= base_url('AdminDashboard/particular_add'); ?>" class="float" target="_blank">
    <i class="fa fa-plus my-float"></i>
</a>
<?php include('includes/footer.php') ?>
<?php include('includes/footer-link.php'); ?>
</body>

</html>