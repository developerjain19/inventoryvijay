<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdminDashboard extends CI_Controller
{
    public $profile_data = array();
    public function __construct()
    {
        parent::__construct();
        if (sessionId('user_id') == "") {
            redirect("Adminlogin");
        }
        $this->profile_data = $this->CommonModal->getRowById('webangel_admin', 'admin_id', sessionId('user_id'));
        date_default_timezone_set("Asia/Kolkata");
        $this->load->library('zend');
        $this->zend->load('Zend/Barcode');
    }
    public function index()
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = ' Dashboard';
        $this->load->view('admindashboard', $data);
    }
    public function new_vendor()
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = 'Add vendor ';
        $data['tag'] = 'new';
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $vendor_id = $this->CommonModal->insertRowReturnId('webangel_vendor', $post);
            if ($vendor_id) {
                userData('msg', '<div class="alert alert-success">vendor added successfully</div>');
                redirect('AdminDashboard/vendor_list');
            } else {
                userData('msg', '<div class="alert alert-danger">vendor not added, Server error..</div>');
                $this->load->view('new_vendor', $data);
            }
        } else {
            $this->load->view('new_vendor', $data);
        }
    }
    public function vendor_list()
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = 'vendor list ';
        $data['vendor_list'] = $this->CommonModal->getAllRows('webangel_vendor');
        $this->load->view('vendor_list', $data);
    }
    public function update_vendor($pid)
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = 'Update vendor';
        $data['tag'] = 'edit';
        $data['vendor_list'] = $this->CommonModal->getRowById('webangel_admin', 'admin_id', $pid);

        if (count($_POST) > 0) {
            $post = $this->input->post();
            $vendor_id = $this->CommonModal->updateRowById('webangel_admin', 'admin_id', $pid, $post);
            if ($vendor_id) {
                userData('msg', '<div class="alert alert-success">vendor Updated successfully</div>');
                redirect('AdminDashboard/vendor_list');
            } else {
                userData('msg', '<div class="alert alert-danger">vendor not updated, Server error..</div>');
                $this->load->view('new_vendor', $data);
            }
        } else {
            $this->load->view('new_vendor', $data);
        }
    }
    public function update_vendor_productlist($pid = 0)
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = 'Update vendor product list';
        $data['tag'] = 'edit';
        $data['product_list'] = $this->CommonModal->getAllRows('webangel_product');
        $data['product_option'] = $this->CommonModal->getAllRows('webangel_product_option');
        $data['vendor_product_option'] = $this->CommonModal->getRowByMoreId('webangel_vendor_product_option', array('v_id' => $pid, 'is_delete' => '0'));
        $data['vid'] = $pid;

        if ($pid == 0) {
            $data['vendor'] = $this->CommonModal->getAllRows('webangel_vendor');
        } else {
            $data['vendor'] = $this->CommonModal->getRowById('webangel_vendor', 'id', $pid);
        }

        if (count($_POST) > 0) {

            $product_nm = $this->input->post('product_nm');

            $delete = updateRowById('webangel_vendor_product_option', 'v_id', $pid, array('is_delete' => '1'));

            for ($r = 0; $r < count($product_nm); $r++) {

                if ($this->input->post('product_nm')[$r] != '' && $this->input->post('product_nm')[$r] != 0) {
                    $pro = array('v_id' => $pid, 'product_id' => $this->input->post('product_nm')[$r], 'product_option_id' => $this->input->post('product_option')[$r], 'is_delete' => '0');

                    $row = $this->CommonModal->getSingleRowById('webangel_vendor_product_option', array('v_id' => $pid, 'product_id' => $this->input->post('product_nm')[$r], 'product_option_id' => $this->input->post('product_option')[$r]));

                    if ($row != '') {
                        $product_option_item_id = $this->CommonModal->updateRowById('webangel_vendor_product_option', 'id', $row['id'], $pro);
                    } elseif ($row == '') {
                        $product_option_item_id = $this->CommonModal->insertRowReturnId('webangel_vendor_product_option', $pro);
                    } else {
                    }
                }
            }
            userData('msg', '<div class="alert alert-success">Vendor Updated successfully</div>');
            redirect('AdminDashboard/vendor_list');
        } else {
        }
        $this->load->view('vendor_productlist', $data);
    }

    public function category()
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = 'Category   ';
        $data['category_list'] = $this->CommonModal->getAllRows('webangel_category');

        if (count($_POST) > 0) {
            $post = $this->input->post();
            $vendor_id = $this->CommonModal->insertRowReturnId('webangel_category', $post);
            if ($vendor_id) {
                userData('msg', '<div class="alert alert-success">Category added successfully</div>');
            } else {
                userData('msg', '<div class="alert alert-danger">vendor not added, Server error..</div>');
            }
            redirect('AdminDashboard/category');
        } else {
            $this->load->view('category', $data);
        }
    }
    public function edit_category($cat_id)
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = 'Category';

        $data['category_list'] = $this->CommonModal->getRowById('webangel_category', 'cat_id', $cat_id);
        if (count($_POST) > 0) {
            extract($this->input->post());
            $vendor_id = $this->CommonModal->updateRowById('webangel_category', 'cat_id', $cat_id, array('cat_name' => $cat_name));
            if ($vendor_id) {
                userData('msg', '<div class="alert alert-success">Category updated successfully</div>');
            } else {
                userData('msg', '<div class="alert alert-danger">Category not updated , Server error..</div>');
            }
            redirect('AdminDashboard/category');
        } else {
            $this->load->view('edit_category', $data);
        }
    }
    public function quantity_type()
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = 'Unit Type   ';
        $data['quantity_type'] = $this->CommonModal->getAllRows('webangel_quantity_type');
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $quantity_id = $this->CommonModal->insertRowReturnId('webangel_quantity_type', $post);
            if ($quantity_id) {
                userData('msg', '<div class="alert alert-success">Quantity Type added successfully</div>');
            } else {
                userData('msg', '<div class="alert alert-danger">Quantity Type not added, Server error..</div>');
            }
            redirect('AdminDashboard/quantity_type');
        } else {
            $this->load->view('quantity_type', $data);
        }
    }
    public function edit_quantity_type($quantity_id)
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = ' Unit Type   ';
        $data['quantity_type'] = $this->CommonModal->getRowById('webangel_quantity_type', 'qty_id', $quantity_id);
        if (count($_POST) > 0) {
            extract($this->input->post());
            $quantity_id = $this->CommonModal->updateRowById('webangel_quantity_type', 'qty_id', $quantity_id, array('qty_name' => $qty_name));
            if ($quantity_id) {
                userData('msg', '<div class="alert alert-success">Quantity Type updated successfully</div>');
            } else {
                userData('msg', '<div class="alert alert-danger">Quantity Type not updated, Server error..</div>');
            }
            redirect('AdminDashboard/quantity_type');
        } else {
            $this->load->view('edit_quantity_type', $data);
        }
    }
    public function service_type()
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = 'Service Type   ';
        $data['service_type'] = $this->CommonModal->getAllRows('webangel_service_type');
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $service_type_id = $this->CommonModal->insertRowReturnId('webangel_service_type', $post);
            if ($service_type_id) {
                userData('msg', '<div class="alert alert-success">Service Type added successfully</div>');
            } else {
                userData('msg', '<div class="alert alert-danger">Service Type not added, Server error..</div>');
            }
            redirect('AdminDashboard/service_type');
        } else {
            $this->load->view('service_type', $data);
        }
    }
    public function edit_service_type($service_type_id)
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = ' Service Type   ';
        $data['service_type'] = $this->CommonModal->getRowById('webangel_service_type', 'id', $service_type_id);
        if (count($_POST) > 0) {
            extract($this->input->post());
            $service_type_id = $this->CommonModal->updateRowById('webangel_service_type', 'id', $service_type_id, array('name' => $name));
            if ($service_type_id) {
                userData('msg', '<div class="alert alert-success">Service Type    updated successfully</div>');
            } else {
                userData('msg', '<div class="alert alert-danger">Service Type    not updated, Server error..</div>');
            }
            redirect('AdminDashboard/service_type');
        } else {
            $this->load->view('edit_service_type', $data);
        }
    }
    public function service_list()
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = 'Service List   ';
        $data['service_list'] = $this->CommonModal->getAllRows('webangel_service_list');
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $service_list_id = $this->CommonModal->insertRowReturnId('webangel_service_list', $post);
            if ($service_list_id) {
                userData('msg', '<div class="alert alert-success">Service Type added successfully</div>');
            } else {
                userData('msg', '<div class="alert alert-danger">Service Type not added, Server error..</div>');
            }
            redirect('AdminDashboard/service_list');
        } else {
            $this->load->view('service_list', $data);
        }
    }
    public function edit_service_list($service_list_id)
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = ' Service Type   ';
        $data['service'] = $this->CommonModal->getRowById('webangel_service_list', 'id', $service_list_id);
        if (count($_POST) > 0) {
            extract($this->input->post());
            $service_list_id = $this->CommonModal->updateRowById('webangel_service_list', 'id', $service_list_id, array('name' => $name, 'code' => $code));
            if ($service_list_id) {
                userData('msg', '<div class="alert alert-success">Service Type    updated successfully</div>');
            } else {
                userData('msg', '<div class="alert alert-danger">Service Type    not updated, Server error..</div>');
            }
            redirect('AdminDashboard/service_list');
        } else {
            $this->load->view('edit_service_list', $data);
        }
    }
    public function product_option()
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = 'Product Size and option   ';
        $data['product_option'] = $this->CommonModal->getAllRows('webangel_product_option');

        if (count($_POST) > 0) {
            $dataid = $this->input->post('dataid');
            $name = $this->input->post('name');
            $product_option_id = $this->CommonModal->insertRowReturnId('webangel_product_option', array('name' => $name));
            if ($product_option_id) {
                foreach ($dataid as $id) {
                    $product_option_item_id = $this->CommonModal->insertRowReturnId('webangel_product_option_items', array('pg_id' => $product_option_id, 'product_id' => $id));
                }
                userData('msg', '<div class="alert alert-success">Product Group added successfully</div>');
            } else {
                userData('msg', '<div class="alert alert-danger">Product Group not added, Server error..</div>');
            }
            redirect('AdminDashboard/product_option');
        } else {
            $this->load->view('product_option', $data);
        }
    }

    public function update_product_option($pgid)
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = 'Product Group Update ';
        $data['product_option'] = $this->CommonModal->getRowById('webangel_product_option', 'id', $pgid)[0];
        $data['product_list'] = $this->CommonModal->getAllRows('webangel_product');

        if (count($_POST) > 0) {
            $dataid = $this->input->post('dataid');
            $name = $this->input->post('name');
            $product_option_id = $this->CommonModal->updateRowById('webangel_product_option', 'id', $pgid, array('name' => $name));
            // $delete = deleteRowById('webangel_product_option_items', 'pg_id', $pgid);
            // foreach ($dataid as $id) {
            //     $product_option_item_id = $this->CommonModal->insertRowReturnId('webangel_product_option_items', array('pg_id' => $pgid, 'product_id' => $id));
            // }
            userData('msg', '<div class="alert alert-success">Product Group Updated successfully</div>');

            redirect('AdminDashboard/product_option');
        } else {
            $this->load->view('edit_product_option', $data);
        }
    }
    public function edit_items_product_option($pgid)
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = 'Product Group Update ';
        $data['product_option'] = $this->CommonModal->getRowById('webangel_product_option', 'id', $pgid)[0];
        $data['product_option_items'] = $this->CommonModal->getRowById('webangel_product_option_items', 'pg_id', $pgid);
        $data['product_list'] = $this->CommonModal->getAllRows('webangel_product');

        if (count($_POST) > 0) {
            $dataid = $this->input->post('dataid');
            $delete = deleteRowById('webangel_product_option_items', 'pg_id', $pgid);
            for ($i = 0; $i <= count($dataid); $i++) {
                if (!empty($this->input->post('dataid')[$i])) {
                    $product_option_item_id = $this->CommonModal->insertRowReturnId('webangel_product_option_items', array('pg_id' => $pgid, 'product_id' => $this->input->post('dataid')[$i], 'unit' => $this->input->post('unit')[$i], 'quantity' => $this->input->post('quantity')[$i]));
                }
            }
            userData('msg', '<div class="alert alert-success">Product Group Updated successfully</div>');

            redirect('AdminDashboard/product_option');
        } else {
            $this->load->view('add_items_product_option', $data);
        }
    }

    public function available_stocks()
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = 'Available Stock ';
        $data['vendor_product_option'] = $this->CommonModal->getRowByMoreId('webangel_vendor_product_option', array('is_delete' => '0'));
        $this->load->view('available_stock', $data);
    }
    public function add_product()
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = 'Add Product ';
        $data['tag'] = 'add';
        // $data['category_list'] = $this->CommonModal->getAllRows('webangel_category');
        // $data['quantity_type'] = $this->CommonModal->getAllRows('webangel_quantity_type');
        if (count($_POST) > 0) {
            $post = $this->input->post();
            // $imageResource = Zend_Barcode::factory('code128', 'image', array('text' => $post['product_barcode_no']), array())->draw("", "");
            // imagepng($imageResource, 'uploads/product_barcode/' . $post['product_barcode_no'] . '.png');
            $product_id = $this->CommonModal->insertRowReturnId('webangel_product', $post);
            if ($product_id) {
                userData('msg', '<div class="alert alert-success">Product added successfully</div>');
            } else {
                userData('msg', '<div class="alert alert-danger">Product not added, Server error..</div>');
            }
            redirect('AdminDashboard/product_list');
        } else {
        }
        $data['bar_code'] = productBarCodeGenerate();
        $this->load->view('add_product', $data);
    }
    public function importproduct()
    {

        if (count($_FILES) > 0) {
            $config['upload_path'] = 'uploads/product/';
            $config['allowed_types'] = 'csv';
            $config['max_size'] = '100000'; // max_size in kb
            $config['file_name'] = $_FILES['file']['name'];

            // File upload
            // print_r($_FILES);
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload('file')) {
                // Get data about the file
                $uploadData = $this->upload->data();
                // print_r($uploadData);
                $filename = $uploadData['file_name'];

                // Reading file
                $file = fopen("uploads/product/" . $filename, "r");
                $i = 0;

                $importData_arr = array();
                while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                    $num = count($filedata);
                    for ($c = 0; $c < $num; $c++) {
                        $importData_arr[$i][] = $filedata[$c];
                    }
                    $i++;
                }
                fclose($file);
                $skip = 0;

                $insertId = 0;
                foreach ($importData_arr as $userdata) {
                    if ($skip != 0) {
                        $product_barcode_no = productBarCodeGenerate();
                        $post['category'] = $userdata[0];
                        $post['product_hsncode'] = $userdata[1];
                        $post['product_name'] = $userdata[2];
                        $post['product_mrp'] = $userdata[3];
                        $post['product_item_code'] = $userdata[4];
                        $post['quantity_type'] = $userdata[5];
                        $post['product_quantity'] = $userdata[6];
                        $post['product_barcode_no'] = $product_barcode_no;
                        $imageResource = Zend_Barcode::factory('code128', 'image', array('text' => $product_barcode_no), array())->draw("", "");
                        imagepng($imageResource, 'uploads/product_barcode/' . $product_barcode_no . '.png');
                        $insertId = $this->CommonModal->insertRowReturnId('webangel_product', $post);
                        echo $insertId . '<br>';
                    }
                    $skip++;
                }
                userData('errors', 'Data Add Successfully.');
                // unlink("uploads/product/" . $filename);
            } else {
                userData('errors', $this->upload->display_errors());
            }

            redirect(base_url('AdminDashboard/product_list'));
        } else {
            redirect(base_url('AdminDashboard/product_list'));
        }
    }
    public function product_list()
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = ' Product list';
        $data['product_list'] = $this->CommonModal->getAllRows('webangel_product');
        $this->load->view('product_list', $data);
    }
    public function update_product($pid)
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = 'Update Product';
        $data['tag'] = 'edit';
        $data['category_list'] = $this->CommonModal->getAllRows('webangel_category');
        $data['quantity_type'] = $this->CommonModal->getAllRows('webangel_quantity_type');
        $data['product_list'] = $this->CommonModal->getRowById('webangel_product', 'product_id', $pid);

        if (count($_POST) > 0) {
            $post = $this->input->post();
            if ($data['product_list'][0]['product_barcode_no'] != $post['product_barcode_no']) {
                $imageResource = Zend_Barcode::factory('code128', 'image', array('text' => $post['product_barcode_no']), array())->draw("", "");
                imagepng($imageResource, 'uploads/product_barcode/' . $post['product_barcode_no'] . '.png');
            }
            $product_id = $this->CommonModal->updateRowById('webangel_product', 'product_id', $pid, $post);
            if ($product_id) {
                userData('msg', '<div class="alert alert-success">Product Updated successfully</div>');
                redirect('AdminDashboard/product_list');
            } else {
                userData('msg', '<div class="alert alert-danger">Product not updated, Server error..</div>');
                $this->load->view('add_product', $data);
            }
        } else {
        }
        $this->load->view('add_product', $data);
    }
    public function update_stock($pid)
    {

        $post = $this->input->post();
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = 'Update Stock ';
        $data['vendor_product_option'] = $this->CommonModal->getRowByMoreId('webangel_vendor_product_option', array('v_id' => $pid, 'is_delete' => '0'));
        if (count($_POST) > 0) {


            $option = $this->input->post('option');
            $product_quantity = $this->input->post('product_quantity');
            $old_product_quantity = $this->input->post('old_product_quantity');
            $v_price = $this->input->post('v_price');
            for ($i = 0; $i <= count($option); $i++) {
                if ($option[$i] != '') {
                    $stock = $old_product_quantity[$i] + $product_quantity[$i];
                    $vo = $this->CommonModal->getSingleRowById('webangel_vendor_product_option', array('id' => $option[$i]));

                    $product_id = $this->CommonModal->updateRowById('webangel_vendor_product_option', 'id', $option[$i], array('quantity' => $stock));


                    $res = bcmul($product_quantity[$i], $v_price[$i]);

                    if ($product_quantity[$i] > 0) {
                        $product_insert_log = $this->CommonModal->insertRow('webangel_stock_log', array('vpo_id' => $option[$i], 'vendor_id' => $vo['v_id'], 'product_id' => $vo['product_id'], 'product_size_id' => $vo['product_option_id'], 'per_price' =>  $v_price[$i], 'quantity' => $product_quantity[$i], 'total_price' => $res));
                    }
                }
            }
            userData('msg', '<div class="alert alert-success">Product Updated successfully</div>');
            redirect('AdminDashboard/update_stock/' . $pid);
        }

        $this->load->view('update_stock', $data);
    }
    public function add_vehicle()
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = 'Add vehicle ';
        $data['tag'] = 'add';
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $vehicle_id = $this->CommonModal->insertRowReturnId('webangel_vehicle', $post);
            if ($vehicle_id) {
                userData('msg', '<div class="alert alert-success">vehicle added successfully</div>');
            } else {
                userData('msg', '<div class="alert alert-danger">vehicle not added, Server error..</div>');
            }
            redirect('AdminDashboard/vehicle_list');
        } else {
        }
        $this->load->view('add_vehicle', $data);
    }
    public function update_vehicle($vid)
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = 'Update vehicle';
        $data['tag'] = 'edit';

        $data['vehicle_list'] = $this->CommonModal->getRowById('webangel_vehicle', 'vid', $vid);

        if (count($_POST) > 0) {
            $post = $this->input->post();

            $vehicle_id = $this->CommonModal->updateRowById('webangel_vehicle', 'vid', $vid, $post);
            if ($vehicle_id) {
                userData('msg', '<div class="alert alert-success">vehicle Updated successfully</div>');
                redirect('AdminDashboard/vehicle_list');
            } else {
                userData('msg', '<div class="alert alert-danger">vehicle not updated, Server error..</div>');
                $this->load->view('add_vehicle', $data);
            }
        } else {
        }
        $this->load->view('add_vehicle', $data);
    }

    public function vehicle_list()
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = 'Vehicle List';
        $data['webangel_vehicle'] = $this->CommonModal->getAllRows('webangel_vehicle');
        $this->load->view('vehicle_list', $data);
    }
    public function sess()
    {
        print_R(sessionId('invproduct'));
    }
    public function add_billing()
    {
        $i = 0;
        userData('invproduct', array());
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = 'New Billing';
        $data['vendor'] = $this->CommonModal->getAllRows('webangel_vendor');
        $data['product'] = $this->CommonModal->getAllRows('webangel_product');
        $data['product_option'] = $this->CommonModal->getAllRows('webangel_product_option');
        if (count($_POST) > 0) {
            // $post = $this->input->post();

            $datarow = array('date' => $this->input->post('date'),  'driver_nm' => $this->input->post('driver_nm'), 'driver_no' => $this->input->post('driver_no'), 'total_amount' => $this->input->post('total_amount'), 'payment_mode' => $this->input->post('payment_mode'), 'payment_type' => $this->input->post('payment_type'), 'paid_amount' => $this->input->post('paid_amount'), 'summary' => $this->input->post('summary'));

            $billing_id = $this->CommonModal->insertRowReturnId('webangel_billing', $datarow);
            print_r($_POST);
            for ($i = 0; $i <= count($this->input->post('product')); $i++) {


                if (!empty($this->input->post('product')[$i])) {

                    $upload = array('jid' => $billing_id, 'product' => $this->input->post('product')[$i], 'price' => $this->input->post('price')[$i], 'quantity' => $this->input->post('quantity')[$i], 'total' => $this->input->post('total')[$i]);

                    // print_r($upload);
                    $postid = $this->CommonModal->insertRowReturnId('webangel_billing_product', $upload);
                }
            }
            redirect('AdminDashboard/billing/' . $billing_id);
            // exit();
        }
        $this->load->view('add_billing', $data);
    }
    public function billing($billing_id)
    {

        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = 'Billing';
        $data['billing'] = $this->CommonModal->getRowById('webangel_billing', 'jid', $billing_id);
        $this->load->view('billing_invoice', $data);
    }
    public function billing_list()
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = 'Billing List';
        $data['billing'] = $this->CommonModal->getAllRows('webangel_billing');
        $this->load->view('billing_list', $data);
    }
    public function vendor_report()
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = ' ';
        $this->load->view('vendor_report', $data);
    }
    public function product_report()
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = ' ';
        $this->load->view('product_report', $data);
    }
    public function complaints_list()
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = ' ';
        $this->load->view('complaints_list', $data);
    }
    public function logout()
    {
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('user_type');
        redirect(base_url());
    }

    public function testBarCode()
    {
        $data = [];
        $code = rand(10000, 99999);

        $this->load->library('zend');
        $this->zend->load('Zend/Barcode');
        $imageResource = Zend_Barcode::factory('code128', 'image', array('text' => $code), array())->draw("", "");
        imagepng($imageResource, 'uploads/product_barcode/' . $code . '.png');

        $data['barcode'] = 'uploads/product_barcode/' . $code . '.png';
        $this->load->view('barcode_test', $data);
    }


    public function particular_category()
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = 'Particular Category';
        $data['particular_category'] = $this->CommonModal->getAllRows('webangel_particular_category');

        if (count($_POST) > 0) {
            $post = $this->input->post();


            $particular_category_id = $this->CommonModal->insertRowReturnId('webangel_particular_category', $post);
            if ($particular_category_id) {

                userData('msg', '<div class="alert alert-success">Particular Category added successfully</div>');
            } else {
                userData('msg', '<div class="alert alert-danger">Particular Category not added, Server error..</div>');
            }
            redirect('AdminDashboard/particular_category');
        } else {
            $this->load->view('particular_category', $data);
        }
    }

    public function particular()
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = 'Particular';
        $data['parti'] = $this->CommonModal->GetRowByDistinct('webangel_particular', 'date');
        $data['total_exp'] = $this->CommonModal->runQuery("select sum(`amount`) from webangel_particular where `type` = '1'
        ");
        $data['total_in'] = $this->CommonModal->runQuery("select sum(`amount`) from webangel_particular where `type` = '0'
        ");

        $data['month_exp'] = $this->CommonModal->runQuery("SELECT SUM(`amount`) AS amount FROM webangel_particular WHERE `type` = '1' AND MONTH(`date`) = MONTH(now())");

        $data['month_In'] = $this->CommonModal->runQuery("SELECT SUM(`amount`) AS amount FROM webangel_particular WHERE `type` = '0' AND MONTH(`date`) = MONTH(now())");




        $this->load->view('particular', $data);
    }
    public function particular_add()
    {
        $data['profile'] = $this->profile_data;
        $data['projectTitle'] = 'Inventory Management';
        $data['title'] = 'Particular Add';
        if (count($_POST) > 0) {
            $post = $this->input->post();
            $particular_id = $this->CommonModal->insertRowReturnId('webangel_particular', $post);
            if ($particular_id) {

                userData('msg', '<div class="alert alert-success">Particular Category added successfully</div>');
            } else {
                userData('msg', '<div class="alert alert-danger">Particular Category not added, Server error..</div>');
            }
            redirect('AdminDashboard/particular');
        } else {
            $this->load->view('particular_add', $data);
        }
    }


    public function getcategory()
    {
        $type = $this->input->post('type');


        $data['category'] = $this->CommonModal->getRowByIdInOrder('webangel_particular_category', array('ex_type' => $type), 'name', 'asc');

        print_r($data['category']);

        $this->load->view('getcategory', $data);
    }
}
