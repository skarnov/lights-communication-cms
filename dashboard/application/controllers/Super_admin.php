<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Super_admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL)
        {
            redirect('auth', 'refresh');
        }
    }
    
    public function logout()
    {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        $sdata['exception'] = 'You are Successfully Logout ';
        $this->session->set_userdata($sdata);
        redirect('auth');
    }

    public function index()
    {
        $data = array();
        $data['title'] = 'Dashboard';
        $data['dashboard'] = $this->load->view('super_admin/dashboard', $data, true);       
        $this->load->view('super_admin/master', $data);
    }
    
    public function add_admin() 
    {
        $data = array();
        $data['title'] = 'Add Admin';
        $data['dashboard'] = $this->load->view('super_admin/add_admin', $data, true);
        $this->load->view('super_admin/master', $data);
    }

    public function save_admin()
    {
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[32]|matches[confirm_password]');
        $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required');
        if ($this->form_validation->run() == False)
        {
            $data = array();
            $data['title'] = 'Password Did Not Match';
            $data['dashboard'] = $this->load->view('super_admin/add_admin', $data, true);
            $this->load->view('super_admin/master', $data);
        } 
        else 
        {
            $this->super_admin_model->save_admin_info($data);
            $sdata = array();
            $sdata['save_admin'] = 'Admin Saved';
            $this->session->set_userdata($sdata);
            redirect('super_admin/add_admin');
        }
    }

    public function manage_admin()
    {
        $data = array();
        $data['title'] = 'Manage Admin';
        $data['all_admin'] = $this->super_admin_model->select_all_admin();
        $data['dashboard'] = $this->load->view('super_admin/manage_admin', $data, true);
        $this->load->view('super_admin/master', $data);
    }

    public function deactive_admin($admin_id) 
    {
        $this->super_admin_model->deactive_admin_by_id($admin_id);
        redirect('super_admin/manage_admin');
    }

    public function active_admin($admin_id)
    {
        $this->super_admin_model->active_admin_by_id($admin_id);
        redirect('super_admin/manage_admin');
    }

    public function edit_admin($admin_id) 
    {
        $data = array();
        $data['title'] = 'Edit Admin';
        $data['admin_info'] = $this->super_admin_model->select_admin_by_id($admin_id);
        $data['dashboard'] = $this->load->view('super_admin/edit_admin', $data, true);
        $sdata = array();
        $sdata['edit_admin'] = 'Update Admin Information Successfully';
        $this->session->set_userdata($sdata);
        $this->load->view('super_admin/master', $data);
    }

    public function update_admin() 
    {
        $this->super_admin_model->update_admin_info();
        redirect('super_admin/manage_admin');
    }

    public function delete_admin($admin_id) 
    {
        $this->super_admin_model->delete_admin_by_id($admin_id);
        redirect('super_admin/manage_admin');
    }
}