<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class api extends MX_Controller {


    function login()
    {
        $this->load->helper('form');

        $username	= $this->input->post('username');
        $password	= sha1($this->input->post('password'));
        $this->db->where('user_login', $username);
        $this->db->where('user_pass', $password);

        $result = $this->db->get('doctor');
        if ($result->num_rows() == 1)
        {

            $id=$result->row(0)->id;
            $this->db->where('id',$id);
            $doctor=$this->db->get('doctor')->row(0);
            $this->db->where('doctor_id',$id);
            $doctor1=$this->db->get('doctor_college')->result();
            $this->db->where('doctor_id',$id);
            $doctor2=$this->db->get('doctor_experience')->result();
            $this->db->where('doctor_id',$id);
            $doctor3=$this->db->get('doctor_honor')->result();
            $this->db->where('doctor_id',$id);
            $doctor4=$this->db->get('doctor_image_gallery')->result();
            $this->db->where('doctor_id',$id);
            $doctor5=$this->db->get('doctor_language')->result();

            $final=array('username'=>$doctor->user_login,'user_nicname'=>$doctor->user_nickname,'user_email'=>$doctor->user_email,'user_url'=>$doctor->user_url,'user_registered'=>$doctor->user_registered,'user_activation_key'=>$doctor->user_activation_key,'user_status'=>$doctor->user_status,"display_name"=>$doctor->display_name,'dob'=>$doctor->dob,'contact'=>$doctor->contact,'gender'=>$doctor->gender,'address_line1'=>$doctor->doctor_address_line_1,'doctor_address_line_2'=>$doctor->doctor_address_line_2,'doctor_city'=>$doctor->doctor_city,'doctor_state'=>$doctor->doctor_state,'doctor_pincode'=>$doctor->doctor_pincode,'doctor_landmark'=>$doctor->doctor_landmark,'user_role'=>$doctor->user_role,'appointment_alert'=>$doctor->appointment_alert,'to_do_alert'=>$doctor->to_do_alert,'lab_alert'=>$doctor->lab_alert,'join_date'=>$doctor->join_date,'aadhar'=>$doctor->aadhar,'reffered_by'=>$doctor->reffered_by,'medical_history'=>$doctor->medical_history,'sms_limit'=>$doctor->sms_limit,'type'=>$doctor->type,'speciality'=>$doctor->speciality,'banner_image_url'=>$doctor->banner_imager_url,'tag_line'=>$doctor->tag_line,'doctor_profile_description'=>$doctor->doctor_profile_description,'doctor_website'=>$doctor->doctor_website,'doctor_fax'=>$doctor->doctor_fax,'linkedin_profile'=>$doctor->linkedin_profile,'altitude'=>$doctor->altitude,'longitude'=>$doctor->longitude,'doctor_video_link'=>$doctor->doctor_video_link,'doctor_college'=>$doctor1,'doctor_experience'=>$doctor2,'doctor_honor'=>$doctor3,'image_gallery'=>$doctor4,'doctor_language'=>$doctor5);
            $ashu=array('status'=>"success",'doctor'=>$final);
            echo json_encode($ashu);
        }
        else
        {

            echo json_encode(array('status'=>'fail'));
        }


    }


    public function __construct() {
        parent::__construct();
        $this->load->model("consultant_model");
        $this->load->model("calendar_model");
        $this->load->model("dashboard_model");
        $this->load->model("hospital_model");
        $this->load->model("patient_model");
        $this->load->model("medical_college_model");
        $this->load->model("manufacturing_company_model");
        $this->load->model("doctor_model");
        $this->load->model("patient_model");
        $this->load->model("prescription_model");
        $this->load->model("setting_model");
        $this->load->model("notification_model");
        $this->load->model("contact_model");
        $this->load->model("to_do_list_model");
        $this->load->model("appointment_model");
        $this->load->model("schedule_model");
        $this->load->model('join_us_model');
        $this->load->model("invoice_model");
        $this->load->model("custom_field_model");
    }


    function signup()
    {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $Data = json_decode(file_get_contents('php://input'));
            // print_r($Data);
            // echo $data->username;
            // die;
            $data['user_login']=$Data->username;

            $data['user_pass']=sha1($Data->password);
            $data['user_email']=$Data->email;
            $data['contact']=$Data->contact;
            $data['display_name']=$Data->full_name;
            $this->db->where('user_login',$data['user_login']);
            $result=$this->db->get('doctor');
            $this->db->where('user_email',$data['user_email']);
            $result1=$this->db->get('doctor');
            if($result->num_rows()==0 && $result1->num_rows()==0){
                $authKey = "144872ArhHeSNu58c7bb84";

                //Multiple mobiles numbers separated by comma
                $mobileNumber = $Data->contact;


                //Sender ID,While using route4 sender id should be 6 characters long.
                $senderId = "DOCTRI";

                //Your message to send, Add URL encoding here.
                $mesg =  " Your otp for verification is " . $Data->otp . " . " ;
                $message = urlencode($mesg);

                //Define route
                $route = 4;
                //Prepare you post parameters
                $postData = array(
                    'authkey' => $authKey,
                    'mobiles' => $mobileNumber,
                    'message' => $message,
                    'sender' => $senderId,
                    'route' => $route
                );

                //API URL
                $url = "http://sms.globehost.com/api/sendhttp.php?";

                // init the resource
                $ch = curl_init();
                curl_setopt_array($ch, array(
                    CURLOPT_URL => $url,
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_POST => true,
                    CURLOPT_POSTFIELDS => $postData
                    //,CURLOPT_FOLLOWLOCATION => true
                ));


                //Ignore SSL certificate verification
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


                //get response
                $output = curl_exec($ch);

                //Print error if any
                if (curl_errno($ch)) {
                    echo 'error:' . curl_error($ch);
                }

                curl_close($ch);

                $this->db->insert('doctor',$data);
                // echo json_encode(,200);
            }
            else
            {
                echo json_encode(array('status'=>'fail'));
            }
        }
        else{
            echo json_encode(array('status'=>'fail'));}
    }

    function invoice_pdf() {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $id = $_POST['invoice_id'];
            $data['details'] = $this->invoice_model->get_detail_new($id);
            $data['setting'] = $this->setting_model->get_setting_api();
            $data['page_title'] = lang('invoice');
            $pdfFilePath = 'Invoice_' . $id . ".pdf";
            $data['page_title'] = lang('invoice');
            $data['id'] = $id;
            $this->load->library('m_pdf');
            $pdf = $this->m_pdf->load();
            $pdf->autoLangToFont = true;

            $html = $this->load->view('invoice/pdf', $data, true);
            $html = mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8');
            $pdf->WriteHTML($html);
            $pdf->Output("./uploads/" . $pdfFilePath, "F");
            echo json_encode(array('status' => 0, 'pdf' => $pdfFilePath, 'data' => $data['details']));
        } else {
            echo json_encode(array('status' => 1));
        }
    }

    function invoice_pdf_all() {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $id = $this->input->post('patient_id');

            $data['fees_all'] = $this->patient_model->get_patients_by_invoice($id);
            $data['setting'] = $this->setting_model->get_setting_api();
            $data['page_title'] = lang('invoice');
            $data['id'] = $id;
            $pdfFilePath = 'Invoice_' . $id . ".pdf";
            $this->load->library('m_pdf');
            $pdf = $this->m_pdf->load();
            $pdf->autoLangToFont = true;

            $html = $this->load->view('invoice/pdf', $data, true);
            $html = mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8');

            $pdf->WriteHTML($html);
            $pdf->Output("./uploads/" . $pdfFilePath, "F");
            echo json_encode(array('status' => 0, 'pdf' => $pdfFilePath));
        } else {
            echo json_encode(array('status' => 1));
        }
    }

    function pdf() {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $id = $this->input->post('prescription_id');
            $data['template'] = $this->notification_model->get_template_api($_POST);

            $data['prescription'] = $this->prescription_model->get_prescription_by_id($id);
            $data['setting'] = $this->setting_model->get_setting();
            $data['fields'] = $this->custom_field_model->get_custom_fields(5);
            if (empty($data['prescription']->prescription_id) || $data['prescription']->prescription_id == NULL || $data['prescription']->prescription_id == 'undefined') {
                echo json_encode(array('status' => 1));
                die();
            } else {
                $pdfFilePath = 'prescription_' . $data['prescription']->prescription_id . '.pdf';
                $this->load->library('m_pdf');
                $pdf = $this->m_pdf->load();
                $pdf->autoLangToFont = true;
                $html = $this->load->view('prescription/pdf', $data, true);
                $html = mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8');
                $pdf->WriteHTML($html);
                $pdf->Output("./uploads/" . $pdfFilePath, "F");
                echo json_encode(array('status' => 0, 'pdf' => $pdfFilePath));
            }
        } else {
            echo json_encode(array('status' => 1));
        }
    }

    function add_patient() {
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $doctor_id = $_POST['doctor_id'];
            $username = $this->patient_model->get_username_by_doctor_id($doctor_id);
            if (empty($username)) {
                $save['username'] = $doctor_id . "Patient1";
            } else {
                $val = strlen($doctor_id) + 7;
                $sub_str = substr($username->username, $val);
                $save['username'] = $doctor_id . "Patient" . ($sub_str + 1);
            }
            $save['name'] = $_POST['name'];
            $save['address'] = $_POST['address'];
            $save['gender'] = $_POST['gender'];
            $save['contact'] = $_POST['mobile'];
            $save['doctor_id'] = $_POST['doctor_id'];
            $save['add_date'] = date('Y-m-d H:i:s');
            $save['user_role'] = 2;
            $save['dob'] = date('Y') - $_POST['age'];
            $this->patient_model->save($save);
            echo 1;
        } else {
            echo 0;
        }
    }

    function add_appointment() {
        $slot = 1;
        if ($_POST['slot'] == "15 minutes")
            $slot = 15;
        else if ($_POST['slot'] == "30 minutes")
            $slot = 30;
        else if ($_POST['slot'] == "1 hour")
            $slot = 60;
        else if ($_POST['slot'] == "1 hour 30 minutes")
            $slot = 90;
        else
            $slot = 120;
        $time1 = $_POST["stparttime"];
        $end_time = explode(":", $time1);
        $end_minute = $end_time[1] + ($slot % 60);
        $end_hour = $end_time[0] + floor(($slot / 60));
        $end_minute-=60;
        $end_hour+=1;

        $end_time = $end_hour . ":" . $end_minute;
        $date = explode("/", $_POST["stpartdate"]);
        $d = $date[0];
        $m = $date[1] + 1;
        $y = $date[2];
        $date = $d . "/" . $m . "/" . $y;
        $st = $date . " " . $_POST["stparttime"];
        $et = $_POST['stpartdate'] . " " . $end_time;
        $st = str_replace('/', '-', $st);
        $et = str_replace('/', '-', $et);
        $checked = $this->calendar_model->check_tables($st, $et);
        if (!empty($checked)) {
            $next = 0;
            echo 0;
            // break;
        } else {
            $next = 1;
        }
        $save['patient_id'] = $this->input->post('patient_id');
        $save['consultant'] = $this->input->post('consultant_id');
        $consultant = $this->consultant_model->get_consultant_by_id($save['consultant']);
        $color = $consultant->Color;
        $save['doctor_id'] = $consultant->doctor_id;
        $save['motive'] = $this->input->post('motive');
        $save['date'] = date("Y-m-d H:i:s", strtotime($st));
        $save['end_date'] = date("Y-m-d H:i:s", strtotime($et));
        $save['is_paid'] = 1;
        $save['status'] = 1;
        $save['whom'] = 1;
        $save['contact_id'] = 0;
        $save['other'] = 0;
        $save['Color'] = $color;
        $ptnt = $this->input->post('patient_id');
        $data_patient = $this->patient_model->get_cont($ptnt);
        $gender = '';
        $patient_name = '';
        foreach ($data_patient as $newx) {
            $patient_name = $newx->name;
        }
        $ad = $save['doctor_id'];
        $admin = '';
        $admin_names = $this->patient_model->get_cont($ad);
        foreach ($admin_names as $newadmin) {
            $admin = $newadmin->name;
        }
        $cntc = $this->patient_model->get_cont($ptnt);
        $contact = '';
        foreach ($cntc as $newzz) {
            $contact = $newzz->contact;
        }
        $save['title'] = $patient_name;

        $dtate = date('d/m/Y h:i:s', strtotime($st));
        $authKey = "144872ArhHeSNu58c7bb84";
        $mobileNumber = $contact;
        $senderId = "DOCTRI";
        $mesg = "Dear " . $patient_name . " ,Your appointment is confirmed for " . $dtate . " at " . $admin . " Thanks";
        $message = urlencode($mesg);
        $route = 4;
        $postData = array(
            'authkey' => $authKey,
            'mobiles' => $mobileNumber,
            'message' => $message,
            'sender' => $senderId,
            'route' => $route
        );
        $url = "http://sms.globehost.com/api/sendhttp.php?";
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
            //,CURLOPT_FOLLOWLOCATION => true
        ));
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $output = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'error:' . curl_error($ch);
        }
        curl_close($ch);
        $this->appointment_model->save($save);
        echo 1;
    }

    function set_pimages() {



        if (isset($_POST['base64'])) {
            $admin = $_POST;

            define('UPLOAD_DIR', 'uploads/wysiwyg/images/');
            $image_parts = explode(";base64,", $_POST['base64']);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            if ($image_type == 'jpeg') {
                $ext = '.jpg';
            } elseif ($image_type == 'png') {
                $ext = '.png';
            }

            $image_base64 = base64_decode($image_parts[1]);
            $file = UPLOAD_DIR . uniqid() . $ext;
            $file_name = explode('/', $file)[3];
            file_put_contents($file, $image_base64);


            $this->load->library('image_lib');


            //cropped thumbnail
            $config['image_library'] = 'gd2';
            $config['source_image'] = $file;
            $config['new_image'] = 'uploads/wysiwyg/thumbnails/' . $file_name;
            $config['maintain_ratio'] = FALSE;
            $config['width'] = 268;
            $config['height'] = 249;
            $this->image_lib->initialize($config);
            $this->image_lib->resize();
            $this->image_lib->clear();

            $data['file_name'] = $file_name;
            if ($admin['user_role'] == 1) {
                $doc = $admin['id'];
            } else {
                $doc = $admin['doctor_id'];
            }
            $save['file_name'] = $data['file_name'];
            $save['title'] = $this->input->post('title');
            $save['user_id'] = $this->input->post('patient_id');
            $save['doctor_id'] = $doc;


            $this->patient_model->save_image($save);
            echo json_encode(array('status' => 0, 'result' => $file_name));
        } else {
            echo json_encode(array('status' => 1));
        }
    }

    function appointmentbyid(){
        if ($this->input->server('REQUEST_METHOD') === 'POST') {
            $id  = $_POST['id'];

            if(!$id){

                echo json_encode(array('status'=>'fail'));

                exit;
            }

            //  $result = $this->appointment_model->get_appointment_by_doctor($id);

            $this->db->where('A.doctor_id',$id);
            $this->db->order_by('A.date','DESC');
            $this->db->select('A.id,A.title,A.date,A.end_date,A.motive,A.Color,U.name patient');
            $this->db->join('users  U', 'U.id = A.patient_id', 'LEFT');
            $this->db->join('users  U1', 'U1.id = A.doctor_id', 'LEFT');
            //$this->db->join('contacts C', 'C.id = A.contact_id', 'LEFT');
            $result=$this->db->get('appointments A')->result();
            if($result){
                echo json_encode(array('status' => 'success','appointments'=>$result));
                exit;
            }
            else{

                echo json_encode(array('status' =>"fail"));
                exit;
            }}
        else
        {
            echo json_encode(array('status'=>1));
        }
    }

    function delete_appointment()
    {  if ($this->input->server('REQUEST_METHOD') === 'POST') {
        $appointment_id=$_POST['appointment_id'];
        if(!$appointment_id)
        {
            echo json_encode(array('status'=>400));
        }
        else
        {
            $this->appointment_model->delete($appointment_id);
            echo "success";
        }
    }
    else
    {
        echo json_encode(array('status'=>1));
    }
    }

}

?>