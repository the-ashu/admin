<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{$data['valid']=true;
		$this->load->view('login',$data);
	}
	public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run() === FALSE){
            $data['valid']=false;
           $this->load->view('login',$data);
        }
        else {

            // Get username
            $username = $this->input->post('username');
            // Get and encrypt the password
            $password = md5($this->input->post('password'));

            // Login user
            $user_id = $this->User_model->login($username, $password);

            if ($user_id) {
                // Create session
                $user_data = array(
                    'user_id' => $user_id,
                    'username' => $username,
                    'logged_in' => true
                );

                $this->session->set_userdata($user_data);
                $this->load->view('header');
                $this->load->view('dashboard');
                $this->load->view('footer');
                //echo "ashu";
                // Set message
                $this->session->set_flashdata('user_loggedin', 'You are now logged in');

               // redirect('posts');
            } else {
                // Set message
                $this->session->set_flashdata('login_failed', 'Login is invalid');
                $data['valid']=false;
                $this->load->view('login',$data);
            }
        }
    }
    public function logout(){
        // Unset user data

        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');

        // Set message
      //  $this->session->set_flashdata('user_loggedout', 'You are now logged out');
        $data['valid']=true;
        $this->load->view('login',$data);
    }
    public function dashboard()
    { if($this->session->userdata('logged_in')){
        $this->load->view('header');
        $this->load->view('dashboard');
        $this->load->view('footer');
    }
    else{
        $data['valid']=true;
    $this->load->view('login',$data);}}

    public function product()
{if($this->session->userdata('logged_in')){
    $data1['h']=$this->User_model->product();
   // echo $data1['name'];
    $this->load->view('header');
    $this->load->view('product',$data1);
    $this->load->view('footer');
}
else{
    $data['valid']=true;
    $this->load->view('login',$data);}}
public function supplier()
{
    if($this->session->userdata('logged_in')){
        $data1['h']=$this->User_model->supplier();
    $this->load->view('header');
    $this->load->view('supplier',$data1);
    $this->load->view('footer');
}
    else{
        $data['valid']=true;
        $this->load->view('login',$data);}}
public function purchaseproduct()
{ if($this->session->userdata('logged_in')){
    $data1['h']=$this->User_model->purchase_product();
   /* echo"<pre>";
print_r($data1);
   echo "</pre>";*/
   $this->load->view('header');
   $this->load->view('purchase-product',$data1);
   $this->load->view('footer');
}
else{
    $data['valid']=true;
    $this->load->view('login',$data);}}
public function newpurchase()
{ if($this->session->userdata('logged_in')){
    $this->load->view('header');
    $this->load->view('new-purchase');
    $this->load->view('footer');
}
else{
    $data['valid']=true;
    $this->load->view('login',$data);}}
public function client()
{ if($this->session->userdata('logged_in')){
    $data1['h']=$this->User_model->client();
    $this->load->view('header');
    $this->load->view('client',$data1);
    $this->load->view('footer');
}
else{
    $data['valid']=true;
    $this->load->view('login',$data);}}
public function bill()
{ if($this->session->userdata('logged_in')){
    $data1['h']=$this->User_model->bill();
    $this->load->view('header');
    $this->load->view('bill',$data1);
    $this->load->view('footer');
}
else{
    $data['valid']=true;
    $this->load->view('login',$data);}}
public function newbill()
{ if($this->session->userdata('logged_in')){
    $this->load->view('header');
    $this->load->view('new-bill');
    $this->load->view('footer');
}
else{
    $data['valid']=true;
    $this->load->view('login',$data);}}
public function clientproductrate()
{ if($this->session->userdata('logged_in')){
   $data1['h'] =$this->User_model->clientproductrate();
    $this->load->view('header');
    $this->load->view('client-product-rate',$data1);
    $this->load->view('footer');
}
else{
    $data['valid']=true;
    $this->load->view('login',$data);}}
public function newclientproductrate()
{ if($this->session->userdata('logged_in')){
    $this->load->view('header');
    $this->load->view('new-client-product-rate');
    $this->load->view('footer');
}
else{
    $data['valid']=true;
    $this->load->view('login',$data);}}
public function clientorder()
{ if($this->session->userdata('logged_in')){
    $data1['h']=$this->User_model->clientorder();
    $this->load->view('header');
    $this->load->view('client-order',$data1);
    $this->load->view('footer');
}
else{
    $data['valid']=true;
    $this->load->view('login',$data);}}
public function newclientorder()
{ if($this->session->userdata('logged_in')){
    $this->load->view('header');
    $this->load->view('new-client-order');
    $this->load->view('footer');
}
else{
    $data['valid']=true;
    $this->load->view('login',$data);}}
public function reportproduct()
{ if($this->session->userdata('logged_in')){
    $this->load->view('header');
    $this->load->view('report-product');
    $this->load->view('footer');
}
else{
    $data['valid']=true;
    $this->load->view('login',$data);}}
public function profile()
{ if($this->session->userdata('logged_in')){
    $data1['h']=$this->User_model->profile();
    $this->load->view('header');
    $this->load->view('profile',$data1);
    $this->load->view('footer');
}
else{
    $data['valid']=true;
    $this->load->view('login',$data);}}
public function changepassword()
{if($this->session->userdata('logged_in')){
    $this->load->view('header');
    $data['valid']=true;
    $this->load->view('change_password',$data);
    $this->load->view('footer');
}
else{
    $data['valid']=true;
    $this->load->view('login',$data);}}
public function reportbill()
{if($this->session->userdata('logged_in')){
    $this->load->view('header');
    $this->load->view('report-bill');
    $this->load->view('footer');
}
else{
    $data['valid']=true;
    $this->load->view('login',$data);}}
public function reportbilldetails()
{if($this->session->userdata('logged_in')){
    $this->load->view('header');
    $this->load->view('report-bill-details');
    $this->load->view('footer');
}
else{
    $data['valid']=true;
    $this->load->view('login',$data);}}
public function reportclient()
{if($this->session->userdata('logged_in')){
    $this->load->view('header');
    $this->load->view('report-client');
    $this->load->view('footer');
}
else{
    $data['valid']=true;
    $this->load->view('login',$data);}}
public function reportclientorder()
{if($this->session->userdata('logged_in')){
    $data['h']=$this->db->get('client');
    $this->load->view('header');
    $this->load->view('report-client-order',$data);
    $this->load->view('footer');
}
else{
    $data['valid']=true;
    $this->load->view('login',$data);}}
public function reportclientrate()
{if($this->session->userdata('logged_in')){
    $data['h']=$this->db->get('client');
    $this->load->view('header');
    $this->load->view('report-client-rate',$data);
    $this->load->view('footer');
}
else{
    $data['valid']=true;
    $this->load->view('login',$data);}}
public function reportclientsales()
{if($this->session->userdata('logged_in')){
    $this->load->view('header');
    $this->load->view('report-client-sales');
    $this->load->view('footer');
}
else{
    $data['valid']=true;
    $this->load->view('login',$data);}}
public function reportproductsales()
{if($this->session->userdata('logged_in')){
    $this->load->view('header');
    $this->load->view('report-product-sales');
    $this->load->view('footer');
}
else{
    $data['valid']=true;
    $this->load->view('login',$data);}}
public function reportpurchase()
{if($this->session->userdata('logged_in')){
    $this->load->view('header');
    $this->load->view('report-purchase');
    $this->load->view('footer');
}
else{
    $data['valid']=true;
    $this->load->view('login',$data);}}
public function reportpurchaseproduct()
{if($this->session->userdata('logged_in')){
    $this->load->view('header');
    $this->load->view('report-purchase-product');
    $this->load->view('footer');
}
else{
    $data['valid']=true;
    $this->load->view('login',$data);}}
public function reportsales()
{ if($this->session->userdata('logged_in')){
    $this->load->view('header');
    $this->load->view('report-sales');
    $this->load->view('footer');
}
else{
    $data['valid']=true;
    $this->load->view('login',$data);}}
public function reportsupplier()
{ if($this->session->userdata('logged_in')){
    $this->load->view('header');
    $this->load->view('report-supplier');
    $this->load->view('footer');
}
else{
    $data['valid']=true;
    $this->load->view('login',$data);}}
public function reportsupplierpurchase()
{ if($this->session->userdata('logged_in')){
    $this->load->view('header');
    $this->load->view('report-supplier-purchase');
    $this->load->view('footer');
} else{
    $data['valid']=true;
    $this->load->view('login',$data);}
}
public function new_product()
{
$this->load->view('header');
$this->load->view('new_product');
$this->load->view('footer');
}

public function new_product1()
{
    $data['weight']=$this->input->post('unit');
    $data['product_code']=$this->input->post('hsn');
    $data['cgst']=$this->input->post('cgst');
    $data['sgst']=$this->input->post('sgst');
    $data['igst']=$this->input->post('igst');
    $data['gst_type']=$this->input->post('gst');
     $data['status']=$this->input->post('status');
    $data['name']=$this->input->post('name');
    $data['rate']=$this->input->post('rate');
    $data['created']=date("hh:mm:yyyy");
    $this->User_model->add_product($data);
    $this->product();
}

public function edit_product($id)
{
   //echo $id;
   $data['h']=$this->User_model->edit_product($id);
   $this->load->view('header');
  $this->load->view('edit_product',$data);
   $this->load->view('footer');
}

public function update_product()
{
    $data['weight']=$this->input->post('unit');
    $data['product_id']=$this->input->post('hsn');
    $data['cgst']=$this->input->post('cgst');
    $data['sgst']=$this->input->post('sgst');
    $data['igst']=$this->input->post('igst');
    $data['gst_type']=$this->input->post('gst');
    $data['status']=$this->input->post('status');
    $data['name']=$this->input->post('name');
    $data['rate']=$this->input->post('rate');
$this->User_model->update_product($data);
redirect('welcome/product');
}

public function delete_product($id)
{
    $this->User_model->delete_product($id);
    redirect('welcome/product');
}

public function new_supplier()
{
$this->load->view('header');
$this->load->view('new_supplier');
$this->load->view('footer');
}

public function new_supplier1()
{
    $data['name']=$this->input->post('name');
    $data['email']=$this->input->post('email');
    $data['address']=$this->input->post('address');
    $data['contact']=$this->input->post('contact');
    $data['gst_no']=$this->input->post('gst_no');
    $data['status']=$this->input->post('status');
    $data['city']=$this->input->post('city');
    $data['state']=$this->input->post('state');
    $data['pincode']=$this->input->post('pincode');
    $this->User_model->new_supplier1($data);
    redirect('welcome/supplier');
}

    public function edit_supplier($id)
    {
        //echo $id;
        $data['h']=$this->User_model->edit_supplier($id);
        $this->load->view('header');
        $this->load->view('edit_supplier',$data);
        $this->load->view('footer');
    }

public function update_supplier()
{
    $data['name']=$this->input->post('name');
    $data['email']=$this->input->post('email');
    $data['address']=$this->input->post('address');
    $data['contact']=$this->input->post('contact');
    $data['gst_no']=$this->input->post('gst_no');
    $data['status']=$this->input->post('status');
    $data['city']=$this->input->post('city');
    $data['state']=$this->input->post('state');
    $data['pincode']=$this->input->post('pincode');
    $data['supplier_id']=$this->input->post('supplier_id');
    $this->User_model->update_supplier($data);
    redirect('welcome/supplier');
}

public function delete_supplier($id)
{
    $this->User_model->delete_supplier($id);
    redirect('welcome/supplier');
}

    public function new_client()
    {
        $this->load->view('header');
        $this->load->view('new_client');
        $this->load->view('footer');
    }

    public function new_client1()
    {
        $data['name']=$this->input->post('name');
        $data['email']=$this->input->post('email');
        $data['address']=$this->input->post('address');
        $data['contact']=$this->input->post('contact');
        $data['gst_no']=$this->input->post('gst_no');
        $data['status']=$this->input->post('status');
        $data['city']=$this->input->post('city');
        $data['state']=$this->input->post('state');
        $data['pincode']=$this->input->post('pincode');
        //$data['created']=date("hh:mm:yyyy");
        $this->User_model->new_client1($data);
        redirect('welcome/client');
    }

    public function edit_client($id)
    {
        //echo $id;
        $data['h']=$this->User_model->edit_client($id);
        $this->load->view('header');
        $this->load->view('edit_client',$data);
        $this->load->view('footer');
    }

    public function update_client()
    {
        $data['name']=$this->input->post('name');
        $data['email']=$this->input->post('email');
        $data['address']=$this->input->post('address');
        $data['contact']=$this->input->post('contact');
        $data['gst_no']=$this->input->post('gst_no');
        $data['status']=$this->input->post('status');
        $data['city']=$this->input->post('city');
        $data['state']=$this->input->post('state');
        $data['pincode']=$this->input->post('pincode');
        //$data['created']=date("hh:mm:yyyy");
        $data['client_id']=$this->input->post('client_id');
        $this->User_model->update_client($data);
        redirect('welcome/client');
    }

    public function delete_client($id)
    {
        $this->User_model->delete_client($id);
        redirect('welcome/client');
    }

    public function printreportproduct()
    {
        $date1=$this->input->post('start_date');
        $date2=$this->input->post('end_date');
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "product_report.csv";
        $this->db->where('created >=', $date1);
        $this->db->where('created <=', $date2);
        $result=$this->db->get('product');
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
    }

public function update_profile()
{
    $data['company_name']=$this->input->post('company_name');
    $data['email']=$this->input->post('email');
    $data['phone_no']=$this->input->post('phone_no');
    $data['pincode']=$this->input->post('pincode');
    $data['state']=$this->input->post('state');
    $data['gst_no']=$this->input->post('gst_no');
    $data['reg_office']=$this->input->post('reg_office');
    $data['street_address']=$this->input->post('street_address');
    $this->User_model->update_profile($data);
    redirect('welcome/profile');
}

public function change_pass()
{
    $oldpass=$this->input->post('oldpass');
    $newpass=$this->input->post('newpass');
    $newpass2=$this->input->post('newpass2');
    $oldpass=md5($oldpass);
     if($this->User_model->changepass(1, $oldpass));
    {
        if($newpass==$newpass2)
        {
            $this->User_model->updatepass(md5($newpass),$oldpass);
            redirect('welcome/dashboard');
        }
        else
        {
            $this->load->view('header');
            $data['valid']=false;
            $this->load->view('change_password',$data);
            $this->load->view('footer');
        }
    }
}

public function printreportsales()
{
    $date1=$this->input->post('start_date');
    $date2=$this->input->post('end_date');
  //  $result=$this->User_model->findsales($date1,$date2);
    $this->load->dbutil();
    $this->load->helper('file');
    $this->load->helper('download');
    $this->db->select("bill.*,client.name");
    $this->db->where('bill.created >=', $date1);
    $this->db->where('bill.created <=', $date2);
    $this->db->from('bill');
    $this->db->join('client', 'client.client_id = bill.client_id');
    $result = $this->db->get();
    $delimiter = ",";
    $newline = "\r\n";
    $filename = "Sales_report.csv";
    $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
    force_download($filename, $data);
}

public function printreportbilldetails()
{
    $date1=$this->input->post('start_date');
    $date2=$this->input->post('end_date');
    //  $result=$this->User_model->findsales($date1,$date2);
    $this->load->dbutil();
    $this->load->helper('file');
    $this->load->helper('download');
    $this->db->select("bill_details.*,client.name,bill.invoice_no,bill.client_id");
    $this->db->from('bill_details');
    $this->db->join('bill','bill.bill_id=bill_details.bill_id');
    $this->db->where('bill.created >=', $date1);
    $this->db->where('bill.created <=', $date2);
    $this->db->join('client', 'client.client_id = bill.client_id');
    $result = $this->db->get();
    $delimiter = ",";
    $newline = "\r\n";
    $filename = "Bill_details_report.csv";
    $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
    force_download($filename, $data);
}

    public function printreportbillissue()
    {
        $date1=$this->input->post('start_date');
        $date2=$this->input->post('end_date');
        //  $result=$this->User_model->findsales($date1,$date2);
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $this->db->select("bill.*,client.name");
        $this->db->where('bill.created >=', $date1);
        $this->db->where('bill.created <=', $date2);
        $this->db->from('bill');
        $this->db->join('client', 'client.client_id = bill.client_id');
        $result = $this->db->get();
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "Bill_Issue_report.csv";
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
    }

    public function printreportclientsales()
    {
        $date1=$this->input->post('start_date');
        $date2=$this->input->post('end_date');
        //  $result=$this->User_model->findsales($date1,$date2);
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $this->db->select("client.*,sales.payable_amount");
        $this->db->where('client.date >=', $date1);
        $this->db->where('client.date <=', $date2);
        $this->db->from('client');
        $this->db->join('sales', 'client.name = sales.client_name');
        $result = $this->db->get();
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "client_sales.csv";
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
    }

    public function printreportclient()
    {
        $date1=$this->input->post('start_date');
        $date2=$this->input->post('end_date');
        //  $result=$this->User_model->findsales($date1,$date2);
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $this->db->where('date >=', $date1);
        $this->db->where('date <=', $date2);
        $result = $this->db->get('client');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "client.csv";
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
    }

    public function printsupplierpurchase()
    {
        $date1=$this->input->post('start_date');
        $date2=$this->input->post('end_date');
        //  $result=$this->User_model->findsales($date1,$date2);
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $this->db->select("supplier.*,purchase.total");
        $this->db->from('supplier');
        $this->db->where('supplier.date >=', $date1);
        $this->db->where('supplier.date <=', $date2);
        $this->db->join('purchase','supplier.supplier_id=purchase.supplier_id');
        $result = $this->db->get();
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "Supplier_purchase_report.csv";
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
    }

    public function printreportpurchase()
    {
        $date1=$this->input->post('start_date');
        $date2=$this->input->post('end_date');
        //  $result=$this->User_model->findsales($date1,$date2);
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $this->db->select("purchase.*,supplier.name,purchase_product.*");
        $this->db->where('purchase.date >=', $date1);
        $this->db->where('purchase.date <=', $date2);
        $this->db->from('purchase');
        $this->db->join('purchase_product','purchase_product.purchase_id=purchase.purchase_id');
        $this->db->join('supplier', 'supplier.supplier_id = purchase.supplier_id');
        $result = $this->db->get();
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "purchase_report.csv";
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
    }

    public function printreportpurchaseproduct()
    {
        $date1=$this->input->post('start_date');
        $date2=$this->input->post('end_date');
        //  $result=$this->User_model->findsales($date1,$date2);
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $this->db->select("purchase.*,supplier.name");
        $this->db->where('purchase.purchase_date >=', $date1);
        $this->db->where('purchase.purchase_date <=', $date2);
        $this->db->from('purchase');
        $this->db->join('supplier', 'supplier.supplier_id = purchase.supplier_id');
        $result = $this->db->get();
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "purchase_product_report.csv";
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
    }

    public function printreportsupplier()
    {
        $date1=$this->input->post('start_date');
        $date2=$this->input->post('end_date');
        //  $result=$this->User_model->findsales($date1,$date2);
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $this->db->where('supplier.date >=', $date1);
        $this->db->where('supplier.date <=', $date2);
        $result = $this->db->get('supplier');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "Supplier_report.csv";
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
    }

    public function printreportproductsales()
    {
        $date1=$this->input->post('start_date');
        $date2=$this->input->post('end_date');
        //  $result=$this->User_model->findsales($date1,$date2);
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $this->db->where('created >=', $date1);
        $this->db->where('created <=', $date2);
        $result = $this->db->get('product');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "Product_sales_report.csv";
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
    }

    public function printclientrate()
    {
        $client_name=$this->input->post('client_name');
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $this->db->select("client.client_id,client.name,client_product_rate.client_product_rate_id,client_product_rate_description.*,product.name");
        $this->db->where('client.name=', $client_name);
        $this->db->from('client');
        $this->db->join('client_product_rate', 'client_product_rate.client_id = client.client_id');
        $this->db->join('client_product_rate_description', 'client_product_rate.client_product_rate_id = client_product_rate_description.client_product_rate_id');
        $this->db->join('product','client_product_rate_description.product_id=product.product_id');
        $result = $this->db->get();
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "Client_rate_report.csv";
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
    }

    public function printclientorder()
    {
        $client_name=$this->input->post('client_name');
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $this->db->select("client.client_id,client.name,client_order.client_order_id,client_order_details.*");
        $this->db->where('client.name=', $client_name);
        $this->db->from('client');
        $this->db->join('client_order', 'client_order.client_id = client.client_id');
        $this->db->join('client_order_details', 'client_order.client_order_id = client_order_details.client_order_id');
        $this->db->join('product','client_order_details.product_id=product.product_id');
       // $this->db->join('product','client_order_details.product_id=product.product_id');
        $result = $this->db->get();
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "Client_rate_report.csv";
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
    }
}