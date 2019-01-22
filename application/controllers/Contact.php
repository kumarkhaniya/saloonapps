<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {


function __construct() 
{

    parent::__construct();

    //load the contact_model
    $this->load->model('contact_model');

}


public function index()
{

     //load view pages 
     $this->load->view('header2');
     $this->load->view('contact');
     $this->load->view('footer2');  

}


public function validate_form()
{

    $this->load->library('form_validation');

    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');

    //FORM VALIDATION

    //First Name
    $this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]|max_length[17]');

    //Last Name 
    //$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]|max_length[17]');

    //User Name
   // $this->form_validation->set_rules('user_name', 'User Name', 'trim|required|alpha|strtolower|min_length[3]');


    //Email
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

    //Manager's Full Name
    $this->form_validation->set_rules('subject', 'Subject', 'trim|required');

    //Comment 
    $this->form_validation->set_rules('message', 'Message', 'trim|required');


    if ($this->form_validation->run() == FALSE)

            {

                //echo validation_errors();
                $this->load->view('header2');
                $this->load->view('contact');
                $this->load->view('footer2');

                //$redirect = $this->input->post('url');
                //$this->session->set_flashdata('errors',validation_errors());     
            }

            else
            {

              //  $specialised_category =  $this->input->post('checkbox_cat');

                $data = array(

                'name' => $this->input->post('name'),
               // 'l_name' => $this->input->post('last_name'),
               // 'user_name' => $this->input->post('user_name'),
                'email' => $this->input->post('email'),
                'subject' => $this->input->post('subject'),
                'message' => $this->input->post('mesage'),
                //'city' => $this->input->post('city'),
                 //encoding to JSON and comma sepated values
               // 'services_list' => json_encode(implode(",", $specialised_category))

                );

                //inserting data  
                //$this->db->insert('sysops_tbl', $data);
                $this->contact_model->insert_into_db($data);

                //load the form success message once submitted correctly
                $this->load->view('formsuccess');

                $this->send($data);

                //redirect to the main page
                //redirect(base_url());

            }

    }


public function send($value='')

{
    //load the email library
    $this->load->library('email');

    //Sending email 
                $config_email = array(
                'mailtype' => 'html',
                'charset' =>'iso-8859-1',
                'wordwrap' => TRUE
                );
                //debug
                //print_r($value);

                //override the config from text to html
                $this->email->initialize($config_email);

                //printing manager email and name
                $this->email->from($this->input->post('email'),$this->input->post('name'));
                //receipant email

                $this->email->to('kumarkhaniyag@gmail.com');
                //header
                //$this->email->set_header(json_encode(implode(",", $this->input->post('checkbox_cat'))),'binded');
                //email subject
                $this->email->subject('We need user access for');
                //want to inject values here in the email message
                $this->email->message('Check above !!:');
                //print the message if email is sent 
                if($this->email->send())
                {
                    return TRUE;
                    //echo "Email is sent";
                }else
                {
                    return FALSE;
                    //echo $this->email->print_debugger();
                }

}

}
?>