<?php

class Client_model extends CI_Model {
        
    public function save_client_info()
    {
        $data = array();
        $data['client_name'] = $this->input->post('name', true);
        $data['client_email'] = $this->input->post('email', true);
        $data['client_password'] = $this->input->post('password', true);
        $data['client_mobile'] = $this->input->post('mobile', true);
        $data['client_address'] = $this->input->post('address', true);
        $data['client_status'] = $this->input->post('status', true);
        $this->db->insert('tbl_client',$data);
    }

    public function select_all_client()
    {
        $sql = "SELECT * FROM tbl_client ORDER BY client_id DESC";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function delete_client_by_id($client_id)
    {
        $this->db->where('client_id',$client_id);
        $this->db->delete('tbl_client');
    }
    
    public function select_all_file()
    {
        $sql = "SELECT * FROM tbl_file AS f, tbl_project AS p, tbl_client AS c WHERE f.project_id=p.project_id AND p.client_id=c.client_id";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }

    public function save_project_info()
    {
        $data = array();
        $data['client_id'] = $this->input->post('id', true);
        $data['project_name'] = $this->input->post('name', true);
        $data['instruction_box'] = $this->input->post('instruction_box', true);
        $this->db->insert('tbl_project',$data);
    }
    
    public function select_all_project()
    {
        $sql = "SELECT * FROM tbl_project AS p, tbl_client AS c WHERE p.client_id=c.client_id ORDER BY p.project_id DESC";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function delete_project_by_id($project_id)
    {
        $this->db->where('project_id',$project_id);
        $this->db->delete('tbl_project');
    }   
    
    public function save_survey_info()
    {
        $data = array();
        $data['serial_no'] = $this->input->post('serial_no', true);
        $data['date'] = $this->input->post('date', true);
        $data['client_name'] = $this->input->post('client_name', true);
        $data['institution_name'] = $this->input->post('institution_name', true);
        $data['institution_type'] = $this->input->post('institution_type', true);
        $data['client_mobile'] = $this->input->post('client_mobile', true);
        $data['client_email'] = $this->input->post('client_email', true);
        $data['client_address'] = $this->input->post('client_address', true);
        $data['current_pos'] = $this->input->post('current_pos', true);
        $data['client_experience'] = $this->input->post('client_experience', true);
        $data['computer_user_status'] = $this->input->post('computer_user_status', true);
        $data['interested_in_digitalized'] = $this->input->post('interested_in_digitalized', true);
        $data['client_comment'] = $this->input->post('client_comment', true);
        $this->db->insert('tbl_survey',$data);
    }
    
    public function select_all_survey()
    {
        $sql = "SELECT * FROM tbl_survey ORDER BY survey_id DESC";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
}