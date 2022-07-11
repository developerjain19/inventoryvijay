<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ajax extends CI_Controller
{
    public function index()
    {
    }
    public function delete()
    {
        extract($_POST);
        $table = ' ';
        $idnm = ' ';
        if ($datatable == 'admin') {
            $table = 'webangel_admin';
            $idnm = 'admin_id';
        }
        if ($datatable == 'category') {
            $table = 'webangel_category';
            $idnm = 'cat_id';
        }
        if ($datatable == 'product') {
            $table = 'webangel_product';
            $idnm = 'product_id';
        }
        if ($datatable == 'quantity') {
            $table = 'webangel_quantity_type';
            $idnm = 'qty_id';
        }
        if ($datatable == 'service') {
            $table = 'webangel_service_type';
            $idnm = 'id';
        }
        if ($datatable == 'servicel') {
            $table = 'webangel_service_list';
            $idnm = 'id';
        }
        if ($datatable == 'pro_groupl') {
            $table = 'webangel_product_group';
            $idnm = 'id';
        }
        if ($datatable == 'vehicle') {
            $table = 'webangel_vehicle';
            $idnm = 'vid';
        }
        if ($datatable == 'job') {
            $table = 'webangel_jobsheet';
            $idnm = 'jid';
        }

        $update = $this->CommonModal->deleteRowById($table, array($idnm => $dataid));
        if ($update) {
            echo '1';
        } else {
            echo '0';
        }
    }
    public function block()
    {
        extract($_POST);
        if ($datatable == 'admin') {
            $table = 'webangel_admin';
            $idnm = 'admin_id';
            $status_col = 'admin-status';
        } else {
            $table = '';
            $idnm = '';
            $status_col = '';
        }
        $update = $this->CommonModal->updateRowById($table, $idnm, $dataid, array($status_col => $status));
        if ($update) {
            echo '1';
        } else {
            echo '0';
        }
    }
    public function searchproduct()
    {
        extract($_POST);
        $row = $this->CommonModal->getRowByIn('webangel_product_group', $getproduct, 'id', 'name', 'asc');
        $msg = '';
        $i = 1;
        if (!empty($row)) {
            foreach ($row as $data) {

                $row_data = $this->CommonModal->getRowById('webangel_product_group_items', 'pg_id', $data['id']);
                if (!empty($row_data)) {
                    foreach ($row_data as $row_datapro) {
                        $row_data_product = $this->CommonModal->getRowById('webangel_product', 'product_id', $row_datapro['product_id']);
                        if (in_array($row_datapro['product_id'], sessionId('invproduct'))) {
                            echo '1';
                        } else {
                            $old = sessionId('invproduct');
                            $msg .= '<tr id="row' . $row_data_product[0]['product_id'] . '" >
                            <td> ' . $i . ' </td>
                            <td>' . $row_data_product[0]['product_name'] . ' </td>
                            <td><input type="text" name="mrp[]" class="element mrp " data-id="' . $row_data_product[0]['product_id'] . '" id="mrp' . $row_data_product[0]['product_id'] . '" value="' . $row_data_product[0]['product_mrp'] . '" />
                            <input type="hidden" name="product[]" class=""   value="' . $row_data_product[0]['product_id'] . '" />
                            <input type="hidden" name="product_nm[]" class=""   value="' . $row_data_product[0]['product_name'] . '" />
                            </td>
                            <td><input type="text" name="quantity[]" class="element quantity" data-id="' . $row_data_product[0]['product_id'] . '" id="quan' . $row_data_product[0]['product_id'] . '" value="' . $row_data_product[0]['product_quantity'] . '" /> </td>
                            <td> <input type="text" name="total[]" value="' . ((int)$row_data_product[0]['product_mrp'] * (int)$row_data_product[0]['product_quantity']) . '" class="element total" data-id="' . $row_data_product[0]['product_id'] . '" id="total' . $row_data_product[0]['product_id'] . '" /> </td>
                            <td> <span style="cursor:pointer" class="elementclose" data-id="' . $row_data_product[0]['product_id'] . '" >X </span></td>
                            </tr>';
                            array_push($old, $row_datapro['product_id']);
                            userData('invproduct', $old);
                            $i++;
                        }
                    }
                }
            }
            echo $msg;
        } else {
            echo '0';
        }
    }

    public function removedata()
    {
        extract($_POST);
        $old = sessionId('invproduct');
        if (($key = array_search($vid, $old)) !== false) {
            unset($old[$key]);
        }
        userData('invproduct', $old);
    }
    public function searchsingleproduct()
    {
        extract($_POST);
        $i = 1;
        $msg = '';
        $row_data_product = $this->CommonModal->getRowById('webangel_product', 'product_id', $getproduct);
        // print_r($row_data_product);
        if (!empty($row_data_product)) {
            if (in_array($row_data_product[0]['product_id'], sessionId('invproduct'))) {
                echo '1';
            } else {
                $old = sessionId('invproduct');
                $msg .= '<tr id="row' . $row_data_product[0]['product_id'] . '" >
                            <td> ' . $i . ' </td>
                            <td>' . $row_data_product[0]['product_name'] . ' </td>
                            <td><input type="text" name="mrp[]" class="element mrp " data-id="' . $row_data_product[0]['product_id'] . '" id="mrp' . $row_data_product[0]['product_id'] . '" value="' . $row_data_product[0]['product_mrp'] . '" />
                            <input type="hidden" name="product[]" class="element  " data-id="' . $row_data_product[0]['product_id'] . '" id="mrp' . $row_data_product[0]['product_id'] . '" value="' . $row_data_product[0]['product_id'] . '" />
                            </td>
                            <td><input type="text" name="quantity[]" class="element quantity" data-id="' . $row_data_product[0]['product_id'] . '" id="quan' . $row_data_product[0]['product_id'] . '" value="' . $row_data_product[0]['product_quantity'] . '" /> </td>
                            <td> <input type="text" name="total[]" value="' . ((int)$row_data_product[0]['product_mrp'] * (int)$row_data_product[0]['product_quantity']) . '" class="element total" data-id="' . $row_data_product[0]['product_id'] . '" id="total' . $row_data_product[0]['product_id'] . '" /> </td>
                            <td> <span style="cursor:pointer" class="elementclose" data-id="' . $row_data_product[0]['product_id'] . '" >X </span></td>
                            </tr>';
                array_push($old, $row_data_product[0]['product_id']);
                userData('invproduct', $old);
                $i++;
            }
            echo $msg;
        } else {
            echo '0';
        }
    }



    public function geteditdata()
    {
        extract($_POST);
        $table = ' ';
        $idnm = ' ';
        if ($datatable == 'admin') {
            $table = 'webangel_admin';
            $idnm = 'admin_id';
        }
        if ($datatable == 'category') {
            $table = 'webangel_category';
            $idnm = 'cat_id';
        }
        if ($datatable == 'product') {
            $table = 'webangel_product';
            $idnm = 'product_id';
        }
        if ($datatable == 'quantity') {
            $table = 'webangel_quantity_type';
            $idnm = 'qty_id';
        }
        if ($datatable == 'service') {
            $table = 'webangel_service_type';
            $idnm = 'id';
        }
        if ($datatable == 'servicel') {
            $table = 'webangel_service_list';
            $idnm = 'id';
        }
        if ($datatable == 'pro_groupl') {
            $table = 'webangel_product_group';
            $idnm = 'id';
        }
        $update = $this->CommonModal->getRowById($table, $idnm, $dataid);
        print_r($update);
    }

    public function searchproduct_name()
    {
        extract($_POST);
        $row = $this->CommonModal->getRowById('webangel_product',  'product_id', $getproduct);
        if (!empty($row)) {

            $msg = '<tr class="fieldGroup">
                <td> ' . $row[0]['product_item_code'] . '<input type="hidden" name="dataid[]" class="element   "   value="' . $row[0]['product_id'] . '" /></td>
                <td>' . $row[0]['product_name'] . ' </td>
                <td><input type="text" name="unit[]" class="element   " data-id="' . $row[0]['product_id'] . '" id="mrp' . $row[0]['product_id'] . '" value="PCS" /></td>
                <td><input type="text" name="quantity[]" class="element  " data-id="' . $row[0]['product_id'] . '" id="quan' . $row[0]['product_id'] . '" value="1" /> </td>
                
                <td> <a href="javascript:void(0)" class="btn btn-danger remove"><span class="fa fa-trash" aria-hidden="true"> </span> </a>  </td>
                </tr>';

            echo $msg;
        } else {
            echo '0';
        }
    }
    public function getdata()
    {
        extract($this->input->post());
        $row = $this->CommonModal->getRowById('webangel_vehicle',  'vid', $vid)[0];
        print_r(json_encode($row));
    }

    public function getproduct()
    {
        $vendor = $this->input->post('vendor');
        $data['vendor'] = $this->CommonModal->getRowByIdGroup('webangel_vendor_product_option', array('v_id' => $vendor), 'product_id');
        $this->load->view('getproduct', $data);
    }


    public function getsize()
    {
        $vendor = $this->input->post('vendor');
        $product = $this->input->post('product');

        $data['option'] = $this->CommonModal->getRowByIdInOrder('webangel_vendor_product_option', array('v_id' => $vendor,  'product_id' => $product), 'product_id', 'asc');
        $this->load->view('getoption', $data);
    }
}
