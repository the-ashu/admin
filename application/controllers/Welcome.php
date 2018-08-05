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
    public function dashboard()
    {
        $this->load->view('header');
        $this->load->view('dashboard');
        $this->load->view('footer');
    }
    public function product()
{
    $this->load->view('header');
    $this->load->view('product');
    $this->load->view('footer');
}
public function supplier()
{
    $this->load->view('header');
    $this->load->view('supplier');
    $this->load->view('footer');
}
public function purchaseproduct()
{
   $this->load->view('header');
   $this->load->view('purchase-product');
   $this->load->view('footer');
}
public function newpurchase()
{
    $this->load->view('header');
    $this->load->view('new-purchase');
    $this->load->view('footer');
}
public function client()
{
    $this->load->view('header');
    $this->load->view('client');
    $this->load->view('footer');
}
public function bill()
{
    $this->load->view('header');
    $this->load->view('bill');
    $this->load->view('footer');
}
public function newbill()
{
    $this->load->view('header');
    $this->load->view('new-bill');
    $this->load->view('footer');
}
public function clientproductrate()
{
    $this->load->view('header');
    $this->load->view('client-product-rate');
    $this->load->view('footer');
}
public function newclientproductrate()
{
    $this->load->view('header');
    $this->load->view('new-client-product-rate');
    $this->load->view('footer');
}
}
