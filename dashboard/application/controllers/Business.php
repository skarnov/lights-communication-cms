<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Business extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL)
        {
            redirect('auth', 'refresh');
        }
        $this->load->model('client_model');
        $this->load->model('business_model');
    }
    
    public function add_business() 
    {
        $data = array();
        $data['title'] = 'Add Business';
        $data['dashboard'] = $this->load->view('business/add_business', $data, true);
        $this->load->view('super_admin/master', $data);
    }
    
    public function save_business()
    {
        $this->business_model->save_business_info();
        $sdata = array();
        $sdata['save_business'] = 'Business Saved';
        $this->session->set_userdata($sdata);
        redirect('business/add_business');
    }
    
    public function manage_business()
    {
        $data = array();
        $data['title'] = 'Manage Business';
        $data['all_business'] = $this->business_model->select_all_business();
        $data['dashboard'] = $this->load->view('business/manage_business', $data, true);
        $this->load->view('super_admin/master', $data);
    }
    
    public function delete_business($business_id) 
    {
        $this->business_model->delete_business_by_id($business_id);
        redirect('business/manage_business');
    }
    
    public function add_sale() 
    {
        $data = array();
        $data['title'] = 'Add Sale';
        $data['all_client'] = $this->client_model->select_all_client();
        $data['all_business'] = $this->business_model->select_all_business();
        $data['dashboard'] = $this->load->view('business/add_sale', $data, true);
        $this->load->view('super_admin/master', $data);
    }
    
    public function manage_sale()
    {
        $data = array();
        $data['title'] = 'Manage Sale';
        $data['all_sale'] = $this->business_model->select_all_sale();
        $data['dashboard'] = $this->load->view('business/manage_sale', $data, true);
        $this->load->view('super_admin/master', $data);
    }
    
    public function sale_invoice($sale_id) 
    {
        $data = array();
        $data['title'] = 'Sale Invoice';
        $data['sale_details'] = $this->business_model->select_sale_details_by_id($sale_id);
        $data['sale_info'] = $this->business_model->select_sale_by_id($sale_id);
        $data['dashboard'] = $this->load->view('business/sale_invoice', $data, true);
        $this->load->view('super_admin/master', $data);
    }
    
    public function download_invoice($sale_id)
    {
        $data = array();
        $data['sale_details'] = $this->business_model->select_sale_details_by_id($sale_id);
        $data['sale_info'] = $this->business_model->select_sale_by_id($sale_id);    
        $this->load->view('business/download_invoice', $data);
        $html = $this->output->get_output();        
        $this->load->library('dompdf_gen');
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("invoice.pdf");
    }
    
    public function manage_cashbook()
    {
        $data = array();
        $data['title'] = 'Manage Cashbook';
        $data['all_cashbook'] = $this->business_model->select_all_cashbook();
        $data['dashboard'] = $this->load->view('business/manage_cashbook', $data, true);
        $this->load->view('super_admin/master', $data);
    }
}