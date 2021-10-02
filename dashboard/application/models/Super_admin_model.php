<?php

class Super_admin_model extends CI_Model {
    
    public function save_admin_info()
    {
        $data = array();
        $data['admin_name'] = $this->input->post('name', true);
        $data['admin_email'] = $this->input->post('email', true);
        $data['admin_password'] = $this->input->post('password', true);
        $data['admin_level'] = $this->input->post('level', true);
        $data['admin_type'] = $this->input->post('type', true);
        $data['admin_status'] = $this->input->post('status', true);
        $this->db->insert('tbl_admin',$data);
    }
    
    public function select_all_admin()
    {
        $sql = "SELECT * FROM tbl_admin";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function deactive_admin_by_id($admin_id)
    {
        $this->db->set('admin_status',0);
        $this->db->where('admin_id',$admin_id);
        $this->db->update('tbl_admin');
    }
    
    public function active_admin_by_id($admin_id)
    {
        $this->db->set('admin_status',1);
        $this->db->where('admin_id',$admin_id);
        $this->db->update('tbl_admin');
    }
    
    public function select_admin_by_id($admin_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_id',$admin_id);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function update_admin_info()
    {
        $data=array();
        $data['admin_name'] = $this->input->post('name', true);
        $data['admin_email'] = $this->input->post('email', true);
        $data['admin_password'] = $this->input->post('password', true);
        $data['admin_level'] = $this->input->post('level', true);
        $data['admin_type'] = $this->input->post('type', true);
        $data['admin_status'] = $this->input->post('status', true);
        $admin_id=$this->input->post('admin_id',true);
        $this->db->where('admin_id',$admin_id);
        $this->db->update('tbl_admin',$data);
    }
    
    public function delete_admin_by_id($admin_id)
    {
        $this->db->where('admin_id',$admin_id);
        $this->db->delete('tbl_admin');
    }
}