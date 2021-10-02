<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL)
        {
            redirect('auth', 'refresh');
        }
        $this->load->model('client_model');
    }
    
    public function add_client() 
    {
        $data = array();
        $data['title'] = 'Add Client';
        $data['dashboard'] = $this->load->view('client/add_client', $data, true);
        $this->load->view('super_admin/master', $data);
    }
    
    public function save_client()
    {
        $this->client_model->save_client_info();
        $sdata = array();
        $sdata['save_client'] = 'Client Saved';
        $this->session->set_userdata($sdata);
        redirect('client/add_client');
    }
    
    public function manage_client()
    {
        $data = array();
        $data['title'] = 'Manage Client';
        $data['all_client'] = $this->client_model->select_all_client();
        $data['dashboard'] = $this->load->view('client/manage_client', $data, true);
        $this->load->view('super_admin/master', $data);
    }
    
    public function delete_client($client_id) 
    {
        $this->client_model->delete_client_by_id($client_id);
        redirect('client/manage_client');
    }
    
    public function manage_file()
    {
        $data = array();
        $data['title'] = 'Manage File';
        $data['all_file'] = $this->client_model->select_all_file();
        $data['dashboard'] = $this->load->view('client/manage_file', $data, true);
        $this->load->view('super_admin/master', $data);
    }
    
    public function add_project() 
    {
        $data = array();
        $data['title'] = 'Add Project';
        $data['all_client'] = $this->client_model->select_all_client();
        $data['dashboard'] = $this->load->view('client/add_project', $data, true);
        $this->load->view('super_admin/master', $data);
    }
    
    public function save_project()
    {
        $this->client_model->save_project_info();
        $sdata = array();
        $sdata['save_project'] = 'Project Saved';
        $this->session->set_userdata($sdata);
        redirect('client/add_project');
    }
    
    public function manage_project()
    {
        $data = array();
        $data['title'] = 'Manage Project';
        $data['all_project'] = $this->client_model->select_all_project();
        $data['dashboard'] = $this->load->view('client/manage_project', $data, true);
        $this->load->view('super_admin/master', $data);
    }
    
    public function delete_project($project_id) 
    {
        $this->client_model->delete_project_by_id($project_id);
        redirect('client/manage_project');
    }
    
    public function add_survey() 
    {
        $data = array();
        $data['title'] = 'Add Survey';
        $data['dashboard'] = $this->load->view('client/add_survey', $data, true);
        $this->load->view('super_admin/master', $data);
    }
    
    public function save_survey()
    {
        $this->client_model->save_survey_info();
        $sdata = array();
        $sdata['save_survey'] = 'Survey Saved';
        $this->session->set_userdata($sdata);
        redirect('client/add_survey');
    }
    
    public function manage_survey()
    {
        $data = array();
        $data['title'] = 'Manage Survey';
        $data['all_survey'] = $this->client_model->select_all_survey();
        $data['dashboard'] = $this->load->view('client/manage_survey', $data, true);
        $this->load->view('super_admin/master', $data);
    }
    
    public function delete_survey($survey_id) 
    {
        $this->survey_model->delete_survey_by_id($survey_id);
        redirect('client/manage_survey');
    }
}