<?php
class User_model extends CI_Model
{
    public function login($username, $password){
        // Validate
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('admin');

        if($result->num_rows() == 1){
            return $result->row(0)->adminid;
        } else {
            return false;
        }
    }
public function product()
{
    $result = $this->db->get('product');
    return $result;
}
    public function purchase_product()
    {
      /*  $result = $this->db->get('purchase');
        return $result;
        $this->db->select('purchase.*,supplier.name');
        $this->db->from('purchase');
        $this->db->join('supplier', 'purchase.supplier_id = supplier.supplier_id', 'INNER');
        $re= $this->db->get();
        return $re->result();*/
        $this->db->select("purchase.*,supplier.name,purchase_product.*");
        $this->db->from('purchase');
        $this->db->join('supplier', 'supplier.supplier_id = purchase.supplier_id');
        $this->db->join('purchase_product', 'purchase.purchase_id = purchase_product.purchase_id');
        $query = $this->db->get();
        return $query;
    }

    public function add_product($data)
    {
        $this->db->insert('product',$data);
    }

    public function edit_product($id)
    {
        $this->db->where('product_id',$id);
        $result=$this->db->get_where('product',array('product_id'=>$id));
        return $result->row_array();
    }

    public function update_product($data)
    {
        $this->db->where('product_id',$data['product_id']);
        return $this->db->update('product',$data);
    }
    public function delete_product($id)
    {
        $this->db->where('product_id',$id);
        $this->db->delete('product');
        return true;
    }

    public function supplier()
    {
        $result = $this->db->get('supplier');
        return $result;
    }

    public function new_supplier1($data)
    {
        $this->db->insert('supplier',$data);
    }

    public function edit_supplier($id)
    {
        $this->db->where('supplier_id',$id);
        $result=$this->db->get_where('supplier',array('supplier_id'=>$id));
        return $result->row_array();
    }

    public function update_supplier($data)
    {
        $this->db->where('supplier_id',$data['supplier_id']);
        return $this->db->update('supplier',$data);
    }

    public function delete_supplier($id)
    {
        $this->db->where('supplier_id',$id);
        $this->db->delete('supplier');
        return true;
    }

    public function client()
    {
        $result = $this->db->get('client');
        return $result;
    }

    public function new_client1($data)
    {
        $this->db->insert('client',$data);
    }

    public function edit_client($id)
    {
        $this->db->where('client_id',$id);
        $result=$this->db->get_where('client',array('client_id'=>$id));
        return $result->row_array();
    }

    public function update_client($data)
    {
        $this->db->where('client_id',$data['client_id']);
        return $this->db->update('client',$data);
    }

    public function delete_client($id)
    {
        $this->db->where('client_id',$id);
        $this->db->delete('client');
        return true;
    }

    public function clientproductrate()
    {
       /* $result = $this->db->get('client_product_rate');
        return $result;*/
        $this->db->select("client_product_rate.*,client.name");

        $this->db->from('client_product_rate');
        $this->db->join('client','client_product_rate.client_id=client.client_id');
        $query = $this->db->get();
        return $query;
    }

    public function clientorder()
    {
       /* $result = $this->db->get('client_order');
        return $result;*/
        $this->db->select("client_order.*,client.name");

        $this->db->from('client_order');
        $this->db->join('client', 'client.client_id = client_order.client_id');
        $query = $this->db->get();
        return $query;
    }

    public function bill()
    {

        $this->db->select("bill_details.*,client.name,bill.*");

        $this->db->from('bill_details');
        $this->db->join('bill','bill_details.bill_id=bill.bill_id');
        $this->db->join('client', 'client.client_id = bill.client_id');
        $query = $this->db->get();
        return $query;
    }

    public function profile()
    {
        $query=$this->db->get('admin');
        $result = $query->first_row('array');
        return $result;
    }

    public function update_profile($data)
    {
        $this->db->where('phone_no',$data['phone_no']);
        return $this->db->update('admin',$data);
    }

    public function changepass($id,$pass)
    {
        $this->db->where('password',$pass);
        $result=$this->db->get('admin');
        if($result->num_rows()==1)
            return true;
        else
            return false;
    }

    public function updatepass($newpass,$oldpass)
    {
        $this->db->where('password',$oldpass);
        $this->db->update('admin',array('password'=>$newpass));
    }

    public function findsales($date1,$date2)
    {
        $this->db->select("bill.*,client.name");

        $this->db->from('bill');
        $this->db->join('client', 'client.client_id = bill.client_id');
        $this->db->where('created >=', $date1);
        $this->db->where('created <=', $date2);
        $query = $this->db->get();
        return $query;
    }

    public function printbill($id)
    { $this->db->select("bill.*,client.name");
        $this->db->where('bill_id',$id);
        $this->db->from('bill');
        $this->db->join('client', 'client.client_id = bill.client_id');
        $result=$this->db->get();
        $data= $result->row(0);
        return $data;
    }

    public function printbill2($id)
    {    $this->db->select("bill_details.*,product.name,product.product_code");
        $this->db->where('bill_id',$id);
        $this->db->from('bill_details');
        $this->db->join('product','product.product_id=bill_details.product_id');
        $result=$this->db->get();
        return $result;
    }

    public function newprebill($pro)
    {
       // $this->db->where('name',$pro);
      /* $result=$this->db->get('product');
       return $result->result();*/
       // $result=$this->db->get_where('product',array('name'=>$pro));
        $this->db->where('name',$pro);
        $result=$this->db->get('product');
        return $result->row(0);
      //  print_r($result->result());
    }

    public function newprepbill1($name)
    {
        $this->db->where('name',$name);
        $result=$this->db->get('client');
        return $result->row(0);
    }

    public function newpreclient($name)
    {
        $this->db->where('name',$name);
        $result=$this->db->get('client');
        return $result->row(0);
    }

    public function newpreclient1($name)
    {
        $this->db->where('name',$name);
        $result=$this->db->get('product');
        return $result->row(0);
    }

    public function editclient($id)
    {
        $this->db->where('client_product_rate_id',$id);
        $result=$this->db->get_where('client_product_rate',array('client_product_rate_id'=>$id));
        return $result->row_array();
    }

}

?>