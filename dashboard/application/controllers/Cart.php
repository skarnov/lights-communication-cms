<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL)
        {
            redirect('auth', 'refresh');
        }
        $this->load->model('business_model');
    }
    
    public function add_to_cart()
    {
        $client_id = $this->input->post('client_id', true);    
        $sdata = array();
        $sdata['client_id'] = $client_id;
        $this->session->set_userdata($sdata);
        $business_id = $this->input->post('business_id', true);
        $description = $this->input->post('description', true);
        $unit_price = $this->input->post('unit_price', true);
        $quantity = $this->input->post('quantity', true);
        $business_info = $this->business_model->select_business_by_id($business_id);
        $data = array(
            'id'      => $business_id,
            'qty'     => $quantity,
            'price'   => $unit_price,
            'name'    => $description,
            'coupon'  => $business_info->business_name,
        );
        $this->cart->insert($data);
        redirect('business/add_sale');
    }

    public function remove($rowid)
    {
        $data = array(
            'rowid' => $rowid,
            'qty' => '0'
        );
        $this->cart->update($data);
        redirect('business/add_sale');
    }

    public function save_sale()
    {
        $sdata = array();
        $sdata['save_sale'] = 'Success!';
        $this->session->set_userdata($sdata);
        $this->business_model->save_sale_info();
        $this->cart->destroy();
        redirect('business/add_sale');
    }
}