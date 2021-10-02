<?php

class Business_model extends CI_Model {
        
    public function save_business_info()
    {
        $data = array();
        $data['business_name'] = $this->input->post('name', true);
        $this->db->insert('tbl_business',$data);
    }

    public function select_all_business()
    {
        $sql = "SELECT * FROM tbl_business";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function delete_business_by_id($business_id)
    {
        $this->db->where('business_id',$business_id);
        $this->db->delete('tbl_business');
    }
    
    public function select_all_sale()
    {
        $sql = "SELECT * FROM tbl_sale AS s, tbl_client AS c WHERE s.client_id=c.client_id";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_sale_by_id($sale_id)
    {
        $sql = "SELECT * FROM tbl_sale AS s, tbl_client AS c WHERE s.sale_id = '$sale_id' AND s.client_id=c.client_id";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }
    
    public function select_sale_details_by_id($sale_id)
    {
        $sql = "SELECT * FROM tbl_sale AS s, tbl_sale_details AS d WHERE s.sale_id = '$sale_id' AND s.sale_id=d.sale_id";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_business_by_id($business_id)
    {
        $sql = "SELECT business_name FROM tbl_business WHERE business_id = '$business_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }
    
    public function save_sale_info()
    {
        $data=array();
        $data['client_id']=$this->session->userdata('client_id');
        $data['ground_total']=$this->cart->total();
        $data['date']=date('d-m-Y');
        $this->db->insert('tbl_sale',$data);
        $sale_id=$this->db->insert_id();
        foreach ($this->cart->contents() as $values)
        {
           $sale=array();
           $sale['sale_id']=$sale_id;
           $sale['sale_description']=$values['coupon'].'<br>['.$values['name'].']';
           $sale['unit_price']=$values['price'];
           $sale['quantity']=$values['qty'];
           $this->db->insert('tbl_sale_details',$sale);
        }
        $sql = "SELECT current_balance FROM tbl_cashbook ORDER BY cashbook_id DESC LIMIT 1 ";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        $current_balance=$result->current_balance;
        $income_amount = $this->cart->total();
        $balance=($current_balance+$income_amount);
        $admin_id = $this->session->userdata('admin_id');
        $cashbook_entry_time=date('d-m-Y');
        $insert_sql = "INSERT INTO tbl_cashbook (admin_id, sale_id, current_balance, income_amount, cashbook_entry_time) VALUES ('$admin_id', '$sale_id', '$balance', '$income_amount', '$cashbook_entry_time')";
        $this->db->query($insert_sql);
    }
    
    public function select_all_cashbook()
    {
        $sql = "SELECT * FROM tbl_cashbook AS c, tbl_admin AS a WHERE c.admin_id=a.admin_id ORDER BY c.cashbook_id DESC";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
}