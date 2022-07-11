<div class="aside">
    <div class="aside-header">
        <h3 class="aside-title">Inventory</h3>
        <div class="aside-addon"><button class="btn btn-label-primary btn-icon btn-lg" data-toggle="aside"><i class="fa fa-times aside-icon-minimize"></i> <i class="fa fa-thumbtack aside-icon-maximize"></i></button></div>
    </div>
    <div class="aside-body" data-simplebar="data-simplebar">
        <div class="menu">
            <div class="menu-item"><a href="<?= base_url('AdminDashboard'); ?>" class="menu-item-link">
                    <div class="menu-item-icon"><i class="fa fa-desktop"></i></div><span class="menu-item-text">Dashboard</span>
                    <!-- <div class="menu-item-addon"><span class="badge badge-success">New</span></div> -->
                </a></div>

            <div class="menu-item"><button class="menu-item-link menu-item-toggle">
                    <div class="menu-item-icon"><i class="fa fa-desktop"></i></div><span class="menu-item-text">vendor</span>
                    <div class="menu-item-addon"><i class="menu-item-caret caret"></i></div>
                </button>
                <div class="menu-submenu">
                    <div class="menu-item"><a href="<?= base_url('AdminDashboard/new_vendor'); ?>" data-menu-path="<?= base_url('AdminDashboard/new_vendor'); ?>" class="menu-item-link"><i class="menu-item-bullet"></i> <span class="menu-item-text">Add vendor</span></a></div>
                    <div class="menu-item"><a href="<?= base_url('AdminDashboard/vendor_list'); ?>" data-menu-path="<?= base_url('AdminDashboard/vendor_list'); ?>" class="menu-item-link"><i class="menu-item-bullet"></i> <span class="menu-item-text">vendor list</span></a></div>
                </div>
            </div>

            <div class="menu-item"><button class="menu-item-link menu-item-toggle">
                    <div class="menu-item-icon"><i class="fa fa-desktop"></i></div><span class="menu-item-text">Product</span>
                    <div class="menu-item-addon"><i class="menu-item-caret caret"></i></div>
                </button>
                <div class="menu-submenu">
                    <div class="menu-item"><a href="<?= base_url('AdminDashboard/product_option'); ?>" data-menu-path="<?= base_url('AdminDashboard/product_option'); ?>" class="menu-item-link"><i class="menu-item-bullet"></i> <span class="menu-item-text">Add Product size and option </span></a></div>

                    <div class="menu-item"><a href="<?= base_url('AdminDashboard/add_product'); ?>" data-menu-path="<?= base_url('AdminDashboard/add_product'); ?>" class="menu-item-link"><i class="menu-item-bullet"></i> <span class="menu-item-text">Add product name</span></a></div>

                    <div class="menu-item"><a href="<?= base_url('AdminDashboard/product_list'); ?>" data-menu-path="<?= base_url('AdminDashboard/product_list'); ?>" class="menu-item-link"><i class="menu-item-bullet"></i> <span class="menu-item-text"> Product List</span></a></div>

                    <div class="menu-item"><a href="<?= base_url('AdminDashboard/update_stock'); ?>" data-menu-path="<?= base_url('AdminDashboard/update_stock'); ?>" class="menu-item-link"><i class="menu-item-bullet"></i> <span class="menu-item-text">Update stocks</span></a></div>
                </div>
            </div>

            <div class="menu-item"><a href="<?= base_url('AdminDashboard/available_stocks'); ?>" class="menu-item-link">
                    <div class="menu-item-icon"><i class="fa fa-desktop"></i></div><span class="menu-item-text">Available stocks</span>

                </a></div>
            <!-- <div class="menu-item"><a href="<?= base_url('AdminDashboard/available_stocks'); ?>" class="menu-item-link">
                    <div class="menu-item-icon"><i class="fa fa-desktop"></i></div><span class="menu-item-text">Billing</span>
                    
                </a></div> -->

            <div class="menu-item"><button class="menu-item-link menu-item-toggle">
                    <div class="menu-item-icon"><i class="fa fa-desktop"></i></div><span class="menu-item-text">Billing</span>
                    <div class="menu-item-addon"><i class="menu-item-caret caret"></i></div>
                </button>
                <div class="menu-submenu">
                    <div class="menu-item"><a href="<?= base_url('AdminDashboard/add_billing'); ?>" data-menu-path="<?= base_url('AdminDashboard/add_billing'); ?>" class="menu-item-link"><i class="menu-item-bullet"></i> <span class="menu-item-text">Add Billing </span></a></div>
                    <div class="menu-item"><a href="<?= base_url('AdminDashboard/billing_list'); ?>" data-menu-path="<?= base_url('AdminDashboard/billing_list'); ?>" class="menu-item-link"><i class="menu-item-bullet"></i> <span class="menu-item-text">View Billing</span></a></div>
                </div>
            </div>
            <div class="menu-item"><button class="menu-item-link menu-item-toggle">
                    <div class="menu-item-icon"><i class="fa fa-desktop"></i></div><span class="menu-item-text">Vehicle</span>
                    <div class="menu-item-addon"><i class="menu-item-caret caret"></i></div>
                </button>
                <div class="menu-submenu">
                    <div class="menu-item"><a href="<?= base_url('AdminDashboard/add_vehicle'); ?>" data-menu-path="<?= base_url('AdminDashboard/add_vehicle'); ?>" class="menu-item-link"><i class="menu-item-bullet"></i> <span class="menu-item-text">Add vehicle </span></a></div>
                    <div class="menu-item"><a href="<?= base_url('AdminDashboard/vehicle_list'); ?>" data-menu-path="<?= base_url('AdminDashboard/vehicle_list'); ?>" class="menu-item-link"><i class="menu-item-bullet"></i> <span class="menu-item-text">View vehicle</span></a></div>

                </div>
            </div>

            <div class="menu-item"><button class="menu-item-link menu-item-toggle">
                    <div class="menu-item-icon"><i class="fa fa-desktop"></i></div><span class="menu-item-text">Money Manager </span>
                    <div class="menu-item-addon"><i class="menu-item-caret caret"></i></div>
                </button>
                <div class="menu-submenu">
                    <div class="menu-item"><a href="<?= base_url('AdminDashboard/particular'); ?>" data-menu-path="<?= base_url('AdminDashboard/particular'); ?>" class="menu-item-link"><i class="menu-item-bullet"></i> <span class="menu-item-text">Particular</span></a></div>

                    <div class="menu-item"><a href="<?= base_url('AdminDashboard/particular_category'); ?>" data-menu-path="<?= base_url('AdminDashboard/particular_category'); ?>" class="menu-item-link"><i class="menu-item-bullet"></i> <span class="menu-item-text">Particular Category</span></a></div>
                </div>
            </div>




            <div class="menu-item"><button class="menu-item-link menu-item-toggle">
                    <div class="menu-item-icon"><i class="fa fa-desktop"></i></div><span class="menu-item-text">Report</span>
                    <div class="menu-item-addon"><i class="menu-item-caret caret"></i></div>
                </button>
                <div class="menu-submenu">
                    <div class="menu-item"><a href="<?= base_url('AdminDashboard/vendor_report'); ?>" data-menu-path="<?= base_url('AdminDashboard/vendor_report'); ?>" class="menu-item-link"><i class="menu-item-bullet"></i> <span class="menu-item-text">vendor report </span></a></div>
                    <div class="menu-item"><a href="<?= base_url('AdminDashboard/product_report'); ?>" data-menu-path="<?= base_url('AdminDashboard/product_report'); ?>" class="menu-item-link"><i class="menu-item-bullet"></i> <span class="menu-item-text">Product reports</span></a></div>
                </div>
            </div>
            <div class="menu-item"><button class="menu-item-link menu-item-toggle">
                    <div class="menu-item-icon"><i class="fa fa-desktop"></i></div><span class="menu-item-text">Complaints</span>
                    <div class="menu-item-addon"><i class="menu-item-caret caret"></i></div>
                </button>
                <div class="menu-submenu">
                    <div class="menu-item"><a href="<?= base_url('AdminDashboard/complaints_list'); ?>" data-menu-path="<?= base_url('AdminDashboard/complaints_list'); ?>" class="menu-item-link"><i class="menu-item-bullet"></i> <span class="menu-item-text">New complaints</span></a></div>
                </div>
            </div>
            <div class="menu-item"><button class="menu-item-link menu-item-toggle">
                    <div class="menu-item-icon"><i class="fa fa-desktop"></i></div><span class="menu-item-text">Setting</span>
                    <div class="menu-item-addon"><i class="menu-item-caret caret"></i></div>
                </button>
                <div class="menu-submenu">
                    <div class="menu-item"><a href="<?= base_url('AdminDashboard/category'); ?>" data-menu-path="<?= base_url('AdminDashboard/category'); ?>" class="menu-item-link"><i class="menu-item-bullet"></i> <span class="menu-item-text">Category </span></a></div>
                    <div class="menu-item"><a href="<?= base_url('AdminDashboard/quantity_type'); ?>" data-menu-path="<?= base_url('AdminDashboard/quantity_type'); ?>" class="menu-item-link"><i class="menu-item-bullet"></i> <span class="menu-item-text">Unit Type </span></a></div>
                    <div class="menu-item"><a href="<?= base_url('AdminDashboard/service_type'); ?>" data-menu-path="<?= base_url('AdminDashboard/service_type'); ?>" class="menu-item-link"><i class="menu-item-bullet"></i> <span class="menu-item-text">Service Type </span></a></div>
                    <div class="menu-item"><a href="<?= base_url('AdminDashboard/service_list'); ?>" data-menu-path="<?= base_url('AdminDashboard/service_list'); ?>" class="menu-item-link"><i class="menu-item-bullet"></i> <span class="menu-item-text">Service List </span></a></div>

                </div>
            </div>
        </div>
    </div>
</div>