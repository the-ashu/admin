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
                $data['pro']=$this->db->get('product')->num_rows();
                $data['pur']=$this->db->get('purchase_product')->num_rows();
                $data['client']=$this->db->get('client_order')->num_rows();
                $data['bill']=$this->db->get('bill_details')->num_rows();
                $data['h']=$this->db->get('supplier');
                $data['k']=$this->db->get('client');
                $this->db->select("bill.*,client.name");
                $this->db->from('bill');
                $this->db->join('client', 'client.client_id = bill.client_id');
                $data['l'] = $this->db->get();
                $this->load->view('header');
                $this->load->view('dashboard',$data);
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
        $data['pro']=$this->db->get('product')->num_rows();
        $data['pur']=$this->db->get('purchase_product')->num_rows();
        $data['client']=$this->db->get('client_order')->num_rows();
        $data['bill']=$this->db->get('bill_details')->num_rows();
        $data['h']=$this->db->get('supplier');
        $data['k']=$this->db->get('client');
        $this->db->select("bill.*,client.name");
        $this->db->from('bill');
        $this->db->join('client', 'client.client_id = bill.client_id');
        $data['l'] = $this->db->get();
        $this->load->view('dashboard',$data);
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
    $data['h']=$this->db->get('supplier');
    $data['k']=$this->db->get('product');
    $this->load->view('header');
    $this->load->view('new_pre_purchase',$data);
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
    $data['h']=$this->db->get('client');
    $data['k']=$this->db->get('product');
    $this->load->view('header');
    $this->load->view('new_pre_bill',$data);
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
public function newpreclient()
{ if($this->session->userdata('logged_in')){
    $data['client']=$this->db->get('client');
    $data['product']=$this->db->get('product');
    $this->load->view('header');
    $this->load->view('new_pre_client_purchase',$data);
    $this->load->view('footer');
}
else{
    $data['valid']=true;
    $this->load->view('login',$data);}}
public function clientorder()
{ if($this->session->userdata('logged_in')){
    $data1['h']=$this->User_model->clientorder();
    //$data['k']=$this->db->
    $this->load->view('header');
    $this->load->view('client-order',$data1);
    $this->load->view('footer');
}
else{
    $data['valid']=true;
    $this->load->view('login',$data);}}
public function newclientorder()
{ if($this->session->userdata('logged_in')){
    $data['product']=$this->db->get('product');
    $data['client']=$this->db->get('client');
    $this->load->view('header');
    $this->load->view('new-client-order',$data);
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
    $data['created']=date('Y-m-d H:i:s');
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
    $data['product_code']=$this->input->post('hsn');
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
    $data['date']=date('Y-m-d H:i:s');
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
        $data['date']=date('Y-m-d H:i:s');
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
        $data2['h']=$this->db->get('product');
        $this->load->view('header');
        $this->load->view('viewproduct',$data2);
       $this->load->view('footer');
        //$data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
      //  force_download($filename, $data);
    }

    public function printreportproduct1()
    {
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "product_report.csv";
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
    $this->db->select("sales.*");
    //$this->db->where('bill.created >=', $date1);
   // $this->db->where('bill.created <=', $date2);
    $this->db->from('sales');
   // $this->db->join('client', 'client.client_id = bill.client_id');
    $data['h'] = $this->db->get();
    $delimiter = ",";
    $newline = "\r\n";
    $filename = "Sales_report.csv";
    $this->load->view('header');
    $this->load->view('viewsales',$data);
    $this->load->view("footer");
   // $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
   // force_download($filename, $data);
}

public function printreportsales1()
{ $this->load->dbutil();
    $this->load->helper('file');
    $this->load->helper('download');
    $this->db->select("bill.*,client.name");
    $this->db->from('bill');
    $this->db->join('client', 'client.client_id = bill.client_id');
    $result = $this->db->get();
    $delimiter = ",";
    $newline = "\r\n";
    $filename = "Bill_Issue_report.csv";
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
    $data['h'] = $this->db->get();
    $this->load->view('header');
    $this->load->view('viewbilldetails',$data);
    $this->load->view('footer');
    $delimiter = ",";
    $newline = "\r\n";
    $filename = "Bill_details_report.csv";
   // $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
   // force_download($filename, $data);
}

public function printreportbilldetails1()
{
    $this->load->dbutil();
    $this->load->helper('file');
    $this->load->helper('download');
    $this->db->select("bill_details.*,client.name,bill.*");
    $this->db->from('bill_details');
    $this->db->join('bill','bill.bill_id=bill_details.bill_id');
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
        $data['h'] = $this->db->get();
        $this->load->view('header');
        $this->load->view('viewbillissue',$data);
        $this->load->view('footer');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "Bill_Issue_report.csv";
       // $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
       // force_download($filename, $data);
    }

    public function printbillissue1()
    {
        //  $result=$this->User_model->findsales($date1,$date2);
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $this->db->select("bill.*,client.name");
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
        $data['h'] = $this->db->get();
        $this->load->view('header');
        $this->load->view('viewclientsales',$data);
        $this->load->view('footer');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "client_sales.csv";
       // $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
    }

    public function printreportclientsales1()
    {
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $this->db->select("client.*,sales.payable_amount");
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
        $data['h'] = $this->db->get('client');
        $this->load->view('header');
        $this->load->view('viewclient',$data);
        $this->load->view('footer');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "client.csv";
       // $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
       // force_download($filename, $data);
    }

    public function printreportclient1()
    {
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
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
        $this->db->where('supplier.date >=',$date1);
        $this->db->where('supplier.date <=',$date2);
        $this->db->join('purchase','supplier.supplier_id=purchase.supplier_id');
        $data['h'] = $this->db->get();
        $this->load->view('header');
        $this->load->view('viewsupplierpurchase',$data);
        $this->load->view('footer');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "Supplier_purchase_report.csv";
       // $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        //force_download($filename, $data);
    }

    public function printsupplierpurchase1()
    {
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $this->db->select("supplier.*,purchase.total");
        $this->db->from('supplier');
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
        $this->db->where('purchase.created >=', $date1);
        $this->db->where('purchase.created <=', $date2);
        $this->db->from('purchase');
        $this->db->join('purchase_product','purchase_product.purchase_id=purchase.purchase_id');
        $this->db->join('supplier', 'supplier.supplier_id = purchase.supplier_id');
        $data['h'] = $this->db->get();
        $this->load->view('header');
        $this->load->view('viewpurchase',$data);
        $this->load->view('footer');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "purchase_report.csv";
       // $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
       // force_download($filename, $data);
    }

    public function printreportpurchase1()
    {
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $this->db->select("purchase.*,supplier.name,purchase_product.*");
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
        $this->db->select("purchase.*,supplier.name,purchase_product.*");
        $this->db->where('purchase.created >=', $date1);
        $this->db->where('purchase.created <=', $date2);
        $this->db->from('purchase');
        $this->db->join('supplier', 'supplier.supplier_id = purchase.supplier_id');
        $this->db->join('purchase_product', 'purchase_product.purchase_id = purchase.purchase_id');
        $data['h'] = $this->db->get();
        $this->load->view('header');
        $this->load->view('viewpurchaseproduct',$data);
        $this->load->view('footer');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "purchase_product_report.csv";
       // $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
       // force_download($filename, $data);
    }

    public function printreportpurchaseproduct1()
    {
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $this->db->select("purchase.*,supplier.name");
       // $this->db->where('purchase.purchase_date >=', $date1);
       // $this->db->where('purchase.purchase_date <=', $date2);
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
        $data['h'] = $this->db->get('supplier');
        $this->load->view('header');
        $this->load->view('viewsupplier',$data);
        $this->load->view('footer');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "Supplier_report.csv";
       // $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
       // force_download($filename, $data);
    }

    public function printreportsupplier1()
    {
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
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
        $data['h'] = $this->db->get('product');
        $this->load->view('header');
        $this->load->view('viewproductsales',$data);
        $this->load->view('footer');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "Product_sales_report.csv";
      //  $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
      //  force_download($filename, $data);
    }

    public function printreportproductsales1()
    {
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
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
        $data['h'] = $this->db->get();
        $this->load->view('header');
        $this->load->view('viewclientrate',$data);
        $this->load->view('footer');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "Client_rate_report.csv";
      //  $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
       // force_download($filename, $data);
    }

    public function printclientrate1()
    {
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $this->db->select("client.client_id,client.name,client_product_rate.client_product_rate_id,client_product_rate_description.*,product.name");
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
        $this->db->select("client.client_id,client.name,client_order.*,client_order_details.*");
        $this->db->where('client.name=', $client_name);
        $this->db->from('client');
        $this->db->join('client_order', 'client_order.client_id = client.client_id');
        $this->db->join('client_order_details', 'client_order.client_order_id = client_order_details.client_order_id');
        $this->db->join('product','client_order_details.product_id=product.product_id');
       // $this->db->join('product','client_order_details.product_id=product.product_id');
        $data['h'] = $this->db->get();
        $this->load->view('header');
        $this->load->view('viewclientorder',$data);
        $this->load->view('footer');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "Client_rate_report.csv";
       // $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
       // force_download($filename, $data);
    }

    public function printclientorder1()
    {
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $this->db->select("client.client_id,client.name,client_order.client_order_id,client_order_details.*");
        $this->db->from('client');
        $this->db->join('client_order', 'client_order.client_id = client.client_id');
        $this->db->join('client_order_details', 'client_order.client_order_id = client_order_details.client_order_id');
        $this->db->join('product','client_order_details.product_id=product.product_id');
        $result = $this->db->get();
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "Client_rate_report.csv";
         $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
         force_download($filename, $data);
    }

    public function printbill($id)
    {
        $data['h']=$this->User_model->printbill($id);
        $data['k']=$this->User_model->printbill2($id);
        $this->load->view('header');
     $this->load->view('print_bill',$data);
     $this->load->view('footer');
    }

    public function newbillprint()
    {
        $this->load->view('header');
        $this->load->view('new_bill_print');
        $this->load->view('footer');
    }

    public function newprebill()
    {
   $data['client_name']=$this->input->post('client_name');
   $data['date']=$this->input->post('date');
        $data['invoice_date']=date('Y-m-d H:i:s');
        $data['gr_no']=$this->input->post('gr_no');
        $data['way_bill_ref']=$this->input->post('way_bill_ref');
        $data['place_of_order']=$this->input->post('place_of_order');
        $data['bill_date']=date('Y-m-d H:i:s');
        $data['product_name']=$this->input->post('product_name');
        $data['rate']=$this->input->post('rate');
        $data['quantity']=$this->input->post('quantity');
        $data['invoice_no']=$this->input->post('invoice_no');
        $data['tpt_co']=$this->input->post('tpt_co');
      //  echo $data['product_name'];
       $data['product']=$this->User_model->newprebill($data['product_name']);
       //print_r($data);
    //   echo $data['product']->product_id;
        $data['client']=$this->User_model->newprepbill1($data['client_name']);
       // echo $data['client']->client_id;
        $data['contact']=$data['client']->contact;
        $data['email']=$data['client']->email;
        $data['address']=$data['client']->address;
        $data['state']=$data['client']->state;
        $data['city']=$data['client']->city;
        $data['pincode']=$data['client']->pincode;
        $data['gst_no']=$data['client']->gst_no;
        $data['client_id']=$data['client']->client_id;
        $data['hsn_code']=$data['product']->product_code;
        $data['unit']=$data['product']->weight;
        $data['gst_type']=$data['product']->gst_type;
        $data['cgst']=$data['product']->cgst;
        $data['sgst']=$data['product']->sgst;
        $data['igst']=$data['product']->igst;
        $data['product_id']=$data['product']->product_id;
        $data['sub_total']=($data['rate']*$data['quantity']);
        $data['cgst_amount']=($data['sub_total']*$data['cgst']*0.01);
        $data['sgst_amount']=($data['sub_total']*$data['sgst']*0.01);
        $data['igst_amount']=($data['sub_total']*$data['igst']*0.01);
        $data['total_taxable_amount']=$data['cgst_amount']+$data['sgst_amount']+$data['igst_amount'];
        $data['paid_amount']=0;
        $data['total']=$data['total_taxable_amount']+$data['sub_total'];
        $data2['client_id']=$data['client_id'];
        $data2['contact']=$data['contact'];
        $data2['email']=$data['email'];
        $data2['address']=$data['address'];
        $data2['state']=$data['state'];
        $data2['city']=$data['city'];
        $data2['pincode']=$data['pincode'];
        $data2['gst_no']=$data['gst_no'];
        $data2['bill_date']=$data['bill_date'];
        $data2['total']=$data['total'];
        $data2['sub_total']=$data['sub_total'];
        $data2['total_taxable_amount']=$data['total_taxable_amount'];
        $data2['invoice_date']=$data['invoice_date'];
       $data2['tpt_co']=$data['tpt_co'];
        $data2['gr_no']=$data['gr_no'];
        $data2['invoice_no']=$data['invoice_no'];
        $data2['created']=date('Y-m-d H:i:s');
        $data2['way_bill_ref']=$data['way_bill_ref'];
        $data2['place_of_order']=$data['place_of_order'];
        $this->db->insert('bill',$data2);
        $query ="select * from  bill order by bill_id DESC limit 1";
        $res = $this->db->query($query)->row()->bill_id;
        $data3['bill_id']=$res;
        $data['bill_id']=$data3['bill_id'];
        $data3['product_id']=$data['product']->product_id;
        $data3['product_code']=$data['hsn_code'];
        $data3['rate']=$data['rate'];
        $data['weight']=$data['unit'];
        $data3['quantity']=$data['quantity'];
        $data3['basic_amount']=$data['sub_total'];
        $data3['gst_type']=$data['gst_type'];
        $data3['cgst']=$data['cgst'];
        $data3['sgst']=$data['sgst'];
        $data3['igst']=$data['igst'];
        $data3['cgst_amount']=$data['cgst_amount'];
        $data3['sgst_amount']=$data['sgst_amount'];
        $data3['igst_amount']=$data['igst_amount'];
        $data3['taxable_amount']=$data['total_taxable_amount'];
        $data3['total']=$data['total'];
        $this->db->insert('bill_details',$data3);
        $query ="select * from  bill_details order by bill_id DESC limit 1";
          $res = $this->db->query($query)->row()->bill_detail_id;
         $data['bill_detail_id']=$res;
               $this->load->view('header');
        $this->load->view('new-bill',$data);
        $this->load->view('footer');
    }

    public function newprebill1($id)
    {
        $data['paid_amount']=($this->input->post('paid_amount'))+($this->input->post('paid_amount1'));
        $data['pending_amount']=$this->input->post('total')-$data['paid_amount'];
        $this->db->where('bill_detail_id',$id);
        $this->db->update('bill_details',$data);

    redirect('welcome/bill');
    }

    public function cancelbill($id1,$id2)
    {
        $this->db->where('bill_id',$id1);
        $this->db->delete('bill');
        $this->db->where('bill_detail_id',$id2);
        $this->db->delete('bill_details');
       redirect('welcome/bill');
    }

   public function newpreclient1()
   {
       $data['date']=date('Y-m-d H:i:s');
       $data['client_name']=$this->input->post('client_name');
       $data['product_name']=$this->input->post('product_name');
      $data['client']=$this->User_model->newpreclient($data['client_name']);
      $data['product']=$this->User_model->newpreclient1($data['product_name']);
      $data['product_id']=$data['product']->product_id;
      $data['weight']=$data['product']->weight;
      $data['rate']=$data['product']->rate;
      $data['gst_type']=$data['product']->gst_type;
      $data['cgst']=$data['product']->cgst;
      $data['sgst']=$data['product']->sgst;
      $data['igst']=$data['product']->igst;
      $data['unit']=$data['product']->weight;
      $data['client_id']=$data['client']->client_id;
      $data2['client_id']=$data['client_id'];
      $data2['date']=$data['date'];
      $data2['status']=1;
      $data2['created']=$data['date'];
      $this->db->insert('client_product_rate',$data2);
       $query ="select * from  client_product_rate order by client_product_rate_id DESC limit 1";
       $res = $this->db->query($query)->row()->client_product_rate_id;
       $data['client_product_rate_id']=$res;
       $data3['client_product_rate_id']=$data['client_product_rate_id'];
       $data3['product_id']=$data['product_id'];
       $data3['weight']=$data['weight'];
       $data3['rate']=$data['rate'];
       $data3['sgst']=$data['sgst'];
       $data3['cgst']=$data['cgst'];
       $data3['igst']=$data['igst'];
       $data3['gst_type']=$data['gst_type'];
       $data3['added']=$data['date'];
       $this->db->insert('client_product_rate_description',$data3);
       $query ="select * from  client_product_rate_description order by client_product_rate_description_id DESC limit 1";
     $res = $this->db->query($query)->row()->client_product_rate_description_id;
       $data['client_product_rate_description_id']=$res;

       $this->load->view('header');
       $this->load->view('new-client-product-rate',$data);
       $this->load->view('footer');
   }

   public function preclientproduct()
   {
       redirect('welcome/clientproductrate');
   }

   public function cancelclient($id1,$id2)
   {
       $this->db->where('client_product_rate_id',$id1);
       $this->db->delete('client_product_rate');
       $this->db->where('client_product_rate_description_id',$id2);
       $this->db->delete('client_product_rate_description');
       redirect('welcome/clientproductrate');
   }

public function editclientproduct($id1,$id2)
{
$this->db->where('client_product_rate_id',$id1);
$data['h']=$this->db->get('client_product_rate')->row(0);
$this->db->where('client_product_rate_description_id',$id2);
$data['k']=$this->db->get('client_product_rate_description')->row(0);
$data['l']=$this->db->get('client');
$data['m']=$this->db->get('product');
$this->load->view('header');
$this->load->view('edit_client_product',$data);
$this->load->view('footer');
}

public function editclientproduct1($id1)
{
    $name1=$this->input->post('client_name');
    $data['weight']=$this->input->post('weight');
    $data['cgst']=$this->input->post('cgst');
    $data['sgst']=$this->input->post('sgst');
    $data['igst']=$this->input->post('igst');
    $data['rate']=$this->input->post('rate');
    $name2=$this->input->post('product_name');
   $data['date']=$this->input->date('Y-m-d H:i:s');
    $this->db->where('name',$name2);
    $data1['product']=$this->db->get('product')->row(0);
    $data['product_id']=$data1['product']->product_id;
    $this->db->where('client_product_rate_id',$id1);
     $this->db->update('client_product_rate_description',$data);
    $data['date']=date('Y-m-d H:i:s');
    $this->db->where('name',$name1);
    $data1['client']=$this->db->get('client')->row(0);
    $data3['client_id']=$data1['client']->client_id;
    $this->db->where('client_product_rate_id',$id1);
    $this->db->update('client_product_rate',$data3);
    redirect('welcome/clientproductrate');
}

public function newclientorder1()
{
$data['client_name']=$this->input->post('client_name');
$data['product_name']=$this->input->post('product_name');
    $data['date']=date('Y-m-d H:i:s');
    $data['status']=$this->input->post('status');
    $data['weight']=$this->input->post('weight');
    $data['quantity']=$this->input->post('quantity');
    $this->db->where('name',$data['client_name']);
    $data['client']=$this->db->get('client')->row(0);
    $data1['client_id']=$data['client']->client_id;
    $data1['date']=date('Y-m-d H:i:s');
    $data1['status']=$data['status'];
    $data1['created']=date('Y-m-d H:i:s');
    $this->db->insert('client_order',$data1);
    $query ="select * from  client_order order by client_order_id DESC limit 1";
    $res = $this->db->query($query)->row()->client_order_id;
    $data2['client_order_id']=$res;
    $this->db->where('name',$data['product_name']);
    $data['product']=$this->db->get('product')->row(0);
    $data2['product_id']=$data['product']->product_id;
    $data2['weight']=$data['weight'];
    $data2['quantity']=$data['quantity'];
    $this->db->insert('client_order_details',$data2);
    redirect('welcome/clientorder');
}

public function newprepurchase()
{
$data['rate']=$this->input->post('rate');
    $data['supplier_name']=$this->input->post('supplier_name');
    $data['product_name']=$this->input->post('product_name');
    $data['quantity']=$this->input->post('quantity');
    $data['rate']=$this->input->post('rate');
    $data['invoice_no']=$this->input->post('invoice_no');
    $data['date']=date('Y-m-d H:i:s');
    $data['invoice_date']=date('Y-m-d H:i:s');
    $this->db->where('name',$data['supplier_name']);
    $data['supplier']=$this->db->get('supplier');
    $this->db->where('name',$data['supplier_name']);
    $data['supplier']=$this->db->get('supplier')->row(0);
    $data['supplier_id']=$data['supplier']->supplier_id;
    $data['contact']=$data['supplier']->contact;
    $data['paid_amount']=0;
    $data['email']=$data['supplier']->email;
    $data['address']=$data['supplier']->address;
    $data['pincode']=$data['supplier']->pincode;
    $data['state']=$data['supplier']->state;
    $data['city']=$data['supplier']->city;
    $data['gst_no']=$data['supplier']->gst_no;
    $this->db->where('name',$data['product_name']);
    $data['product']=$this->db->get('product')->row(0);
    $data['product_id']=$data['product']->product_id;
    $data['hsn_code']=$data['product']->product_code;
    $data['cgst']=$data['product']->cgst;
    $data['sgst']=$data['product']->sgst;
    $data['igst']=$data['product']->igst;
    $data['gst_type']=$data['product']->gst_type;
    $data1['supplier_id']=$data['supplier_id'];
    $data1['contact']=$data['contact'];
    $data1['address']=$data['address'];
    $data1['state']=$data['state'];
    $data1['city']=$data['city'];
    $data1['pincode']=$data['pincode'];
    $data1['gst_no']=$data['gst_no'];
    $data1['invoice_no']=$data['invoice_no'];
    $data['sub_total']=($data['rate']*$data['quantity']);
    $data['cgst_amount']=($data['sub_total']*$data['cgst']*0.01);
    $data['sgst_amount']=($data['sub_total']*$data['sgst']*0.01);
    $data['igst_amount']=($data['sub_total']*$data['igst']*0.01);
    $data['total_taxable_amount']=$data['cgst_amount']+$data['sgst_amount']+$data['igst_amount'];
    $data['total']=$data['total_taxable_amount']+$data['sub_total'];
    $data1['sub_total']=$data['sub_total'];
    $data1['total_taxable_amount']=$data['total_taxable_amount'];
    $data1['total']=$data['total'];
    $data1['status']=1;
    $data1['created']=$data['date'];
    $this->db->insert('purchase',$data1);
    $query ="select * from  purchase order by purchase_id DESC limit 1";
    $res = $this->db->query($query)->row()->purchase_id;
    $data2['rate']=$data['rate'];
    $data2['purchase_id']=$res;
    $data['purchase_id']=$data2['purchase_id'];
    $data2['product_id']=$data['product_id'];
    $data2['product_code']=$data['hsn_code'];
    $data2['weight']=$data['product']->weight;
    $data2['quantity']=$data['quantity'];
    $data2['cgst']=$data['product']->cgst;
    $data2['sgst']=$data['product']->sgst;
    $data2['igst']=$data['product']->igst;
    $data['weight']=$data2['weight'];
    $data2['cgst_amount']=$data['cgst_amount'];
    $data2['sgst_amount']=$data['sgst_amount'];
    $data2['igst_amount']=$data['igst_amount'];
    $data2['gst_type']=$data['gst_type'];
    $data2['basic_amount']=$data['sub_total'];
    $data2['taxable_amount']=$data['total_taxable_amount'];
    $data2['total']=$data['total'];
    $data2['date']=$data['date'];
    $this->db->insert('purchase_product',$data2);
    $query ="select * from  purchase_product order by purchase_product_id DESC limit 1";
    $res = $this->db->query($query)->row()->purchase_product_id;
    $data['purchase_product_id']=$res;
    $this->load->view('header');
    $this->load->view('new-purchase',$data);
    $this->load->view('footer');
}

public function submitpurchase($id)
{
    $data['paid_amount']=($this->input->post('paid_amount'))+($this->input->post('paid_amount1'));
    $data['pending_amount']=($this->input->post('total'))-$data['paid_amount'];
    $this->db->where('purchase_product_id',$id);
    $this->db->update('purchase_product',$data);
    redirect('welcome/purchaseproduct');
}

public function deletepurchase($id1,$id2)
{
    $this->db->where('purchase_id',$id1);
    $this->db->delete('purchase');
    $this->db->where('purchase_product_id',$id2);
    $this->db->delete('purchase_product');
    redirect('welcome/purchaseproduct');
}

public function productstatus($id1,$id2)
{
    if($id2==1)
        $data['status']=0;
    else
        $data['status']=1;
    $this->db->where('product_id',$id1);
    $this->db->update('product',$data);
    redirect('welcome/product');
}

public function supplierstatus($id1,$id2)
{
    if($id2==1)
        $data['status']=0;
    else
        $data['status']=1;
    $this->db->where('supplier_id',$id1);
    $this->db->update('supplier',$data);
    redirect('welcome/supplier');
}

    public function clientstatus($id1,$id2)
    {
        if($id2==1)
            $data['status']=0;
        else
            $data['status']=1;
        $this->db->where('client_id',$id1);
        $this->db->update('client',$data);
        redirect('welcome/client');
    }

    public function clientproductstatus($id1,$id2)
    {
        if($id2==1)
            $data['status']=0;
        else
            $data['status']=1;
        $this->db->where('client_product_rate_id',$id1);
        $this->db->update('client_product_rate',$data);
        redirect('welcome/clientproductrate');
    }

    public function clientorderstatus($id1,$id2)
    {
        if($id2==1)
            $data['status']=0;
        else
            $data['status']=1;
        $this->db->where('client_order_id',$id1);
        $this->db->update('client_order',$data);
        redirect('welcome/clientorder');
    }

    public function editpurchase($id1,$id2)
    {
        $this->db->where('purchase_id',$id1);
        $data['f']=$this->db->get('purchase')->row(0);
        $this->db->where('purchase_product_id',$id2);
        $data['g']=$this->db->get('purchase_product')->row(0);
        $data['h']=$this->db->get('supplier');
        $data['k']=$this->db->get('product');
        $this->load->view('header');
        $this->load->view('editpurchase',$data);
        $this->load->view('footer');
    }

    public function editpurchase1($id1,$id2)
    {
        $data['rate']=$this->input->post('rate');
        $data['supplier_name']=$this->input->post('supplier_name');
        $data['product_name']=$this->input->post('product_name');
        $data['quantity']=$this->input->post('quantity');
        $data['rate']=$this->input->post('rate');
        $data['invoice_no']=$this->input->post('invoice_no');
        $data['date']=date('Y-m-d H:i:s');
        $data['invoice_date']=date('Y-m-d H:i:s');
        $this->db->where('name',$data['supplier_name']);
        $data['supplier']=$this->db->get('supplier');
        $this->db->where('name',$data['supplier_name']);
        $data['supplier']=$this->db->get('supplier')->row(0);
        $data['supplier_id']=$data['supplier']->supplier_id;
        $data['contact']=$data['supplier']->contact;
        $data['paid_amount']=0;
        $data['email']=$data['supplier']->email;
        $data['address']=$data['supplier']->address;
        $data['pincode']=$data['supplier']->pincode;
        $data['state']=$data['supplier']->state;
        $data['city']=$data['supplier']->city;
        $data['gst_no']=$data['supplier']->gst_no;
        $this->db->where('name',$data['product_name']);
        $data['product']=$this->db->get('product')->row(0);
        $data['product_id']=$data['product']->product_id;
        $data['hsn_code']=$data['product']->product_code;
        $data['cgst']=$data['product']->cgst;
        $data['sgst']=$data['product']->sgst;
        $data['igst']=$data['product']->igst;
        $data['gst_type']=$data['product']->gst_type;
        $data1['supplier_id']=$data['supplier_id'];
        $data1['contact']=$data['contact'];
        $data1['address']=$data['address'];
        $data1['state']=$data['state'];
        $data1['city']=$data['city'];
        $data1['pincode']=$data['pincode'];
        $data1['gst_no']=$data['gst_no'];
        $data1['invoice_no']=$data['invoice_no'];
        $data['sub_total']=($data['rate']*$data['quantity']);
        $data['cgst_amount']=($data['sub_total']*$data['cgst']*0.01);
        $data['sgst_amount']=($data['sub_total']*$data['sgst']*0.01);
        $data['igst_amount']=($data['sub_total']*$data['igst']*0.01);
        $data['total_taxable_amount']=$data['cgst_amount']+$data['sgst_amount']+$data['igst_amount'];
        $data['total']=$data['total_taxable_amount']+$data['sub_total'];
        $data1['sub_total']=$data['sub_total'];
        $data1['total_taxable_amount']=$data['total_taxable_amount'];
        $data1['total']=$data['total'];
        $data1['status']=1;
        $data1['created']=$data['date'];
        $this->db->where('purchase_id',$id1);
        $this->db->update('purchase',$data1);
        $data2['rate']=$data['rate'];
        $data2['purchase_id']=$id1;
        $data['purchase_id']=$data2['purchase_id'];
        $data2['product_id']=$data['product_id'];
        $data2['product_code']=$data['hsn_code'];
        $data2['weight']=$data['product']->weight;
        $data2['quantity']=$data['quantity'];
        $data2['cgst']=$data['product']->cgst;
        $data2['sgst']=$data['product']->sgst;
        $data2['igst']=$data['product']->igst;
        $data['weight']=$data2['weight'];
        $data2['cgst_amount']=$data['cgst_amount'];
        $data2['sgst_amount']=$data['sgst_amount'];
        $data2['igst_amount']=$data['igst_amount'];
        $data2['gst_type']=$data['gst_type'];
        $data2['basic_amount']=$data['sub_total'];
        $data2['taxable_amount']=$data['total_taxable_amount'];
        $data2['total']=$data['total'];
        $data2['date']=$data['date'];
        $this->db->where('purchase_product_id',$id2);
        $this->db->update('purchase_product',$data2);
        $this->db->where('purchase_product_id',$id2);
        $data['purchase_product']=$this->db->get('purchase_product')->row(0);
        $data['paid_amount']=$data['purchase_product']->paid_amount;
        $data['purchase_product_id']=$id2;
        $this->load->view('header');
        $this->load->view('new-purchase',$data);
        $this->load->view('footer');
    }

    public function editbill($id1,$id2)
    {
        $this->db->where('bill_id',$id1);
        $data['f']=$this->db->get('bill')->row(0);
        $this->db->where('bill_detail_id',$id2);
        $data['g']=$this->db->get('bill_details')->row(0);
        $data['h']=$this->db->get('client');
        $data['k']=$this->db->get('product');
        $this->load->view('header');
        $this->load->view('editbill',$data);
        $this->load->view('footer');
    }

    public function editbill1($id1,$id2)
    {
        $data['client_name']=$this->input->post('client_name');
        $data['date']=$this->input->post('date');
        $data['invoice_date']=date('Y-m-d H:i:s');
        $data['gr_no']=$this->input->post('gr_no');
        $data['way_bill_ref']=$this->input->post('way_bill_ref');
        $data['place_of_order']=$this->input->post('place_of_order');
        $data['bill_date']=date('Y-m-d H:i:s');
        $data['product_name']=$this->input->post('product_name');
        $data['rate']=$this->input->post('rate');
        $data['quantity']=$this->input->post('quantity');
        $data['invoice_no']=$this->input->post('invoice_no');
        $data['tpt_co']=$this->input->post('tpt_co');
        //  echo $data['product_name'];
        $data['product']=$this->User_model->newprebill($data['product_name']);
        //print_r($data);
        //   echo $data['product']->product_id;
        $data['client']=$this->User_model->newprepbill1($data['client_name']);
        // echo $data['client']->client_id;
        $data['contact']=$data['client']->contact;
        $data['email']=$data['client']->email;
        $data['address']=$data['client']->address;
        $data['state']=$data['client']->state;
        $data['city']=$data['client']->city;
        $data['pincode']=$data['client']->pincode;
        $data['gst_no']=$data['client']->gst_no;
        $data['client_id']=$data['client']->client_id;
        $data['hsn_code']=$data['product']->product_code;
        $data['unit']=$data['product']->weight;
        $data['gst_type']=$data['product']->gst_type;
        $data['cgst']=$data['product']->cgst;
        $data['sgst']=$data['product']->sgst;
        $data['igst']=$data['product']->igst;
        $data['product_id']=$data['product']->product_id;
        $data['sub_total']=$data['rate']*$data['quantity'];
        $data['cgst_amount']=($data['sub_total']*$data['cgst']*0.01);
        $data['sgst_amount']=($data['sub_total']*$data['sgst']*0.01);
        $data['igst_amount']=($data['sub_total']*$data['igst']*0.01);
        $data['total_taxable_amount']=$data['cgst_amount']+$data['sgst_amount']+$data['igst_amount'];
        $data['paid_amount']=0;
        $data['total']=$data['total_taxable_amount']+$data['sub_total'];
        $data2['client_id']=$data['client_id'];
        $data2['contact']=$data['contact'];
        $data2['email']=$data['email'];
        $data2['address']=$data['address'];
        $data2['state']=$data['state'];
        $data2['city']=$data['city'];
        $data2['pincode']=$data['pincode'];
        $data2['gst_no']=$data['gst_no'];
        $data2['bill_date']=$data['bill_date'];
        $data2['total']=$data['total'];
        $data2['sub_total']=$data['sub_total'];
        $data2['total_taxable_amount']=$data['total_taxable_amount'];
        $data2['invoice_date']=$data['invoice_date'];
        $data2['tpt_co']=$data['tpt_co'];
        $data2['gr_no']=$data['gr_no'];
        $data2['invoice_no']=$data['invoice_no'];
        $data2['created']=date('Y-m-d H:i:s');
        $data2['way_bill_ref']=$data['way_bill_ref'];
        $data2['place_of_order']=$data['place_of_order'];
        $this->db->where('bill_id',$id1);
        $this->db->update('bill',$data2);
        $data3['bill_id']=$id1;
        $data['bill_id']=$data3['bill_id'];
        $data3['product_id']=$data['product']->product_id;
        $data3['product_code']=$data['hsn_code'];
        $data3['rate']=$data['rate'];
        $data['weight']=$data['unit'];
        $data3['quantity']=$data['quantity'];
        $data3['basic_amount']=$data['sub_total'];
        $data3['gst_type']=$data['gst_type'];
        $data3['cgst']=$data['cgst'];
        $data3['sgst']=$data['sgst'];
        $data3['igst']=$data['igst'];
        $data3['cgst_amount']=$data['cgst_amount'];
        $data3['sgst_amount']=$data['sgst_amount'];
        $data3['igst_amount']=$data['igst_amount'];
        $data3['taxable_amount']=$data['total_taxable_amount'];
        $data3['total']=$data['total'];
        $this->db->where('bill_detail_id',$id2);
        $this->db->update('bill_details',$data3);
        $data['bill_detail_id']=$id2;
        $this->db->where('bill_detail_id',$id2);
        $data['bill_detail']=$this->db->get('bill_details')->row(0);
        $data['paid_amount']=$data['bill_detail']->paid_amount;
        $this->load->view('header');
        $this->load->view('new-bill',$data);
        $this->load->view('footer');
    }
}