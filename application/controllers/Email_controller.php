<?php 
   class Email_controller extends CI_Controller { 
 
      function __construct() { 
         parent::__construct(); 
         $this->load->library('session'); 
         $this->load->helper('form'); 
      } 
		
      public function index() { 
         
        $this->load->helper('form');
        $this->load->view('header2');
		$this->load->view('email_form'); 
		$this->load->view('footer2');
         
      } 
  
      public function send_mail() { 
         $from_email = "kumarkhaniyag@gmail.com";
         
         $name = $this->input->post('name');
         $to_email = $this->input->post('email'); 
         $subject = $this->input->post('subject'); 
         $message = $this->input->post('message'); 
   
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, $name); 
         $this->email->to($to_email);
         $this->email->subject($subject); 
         $this->email->message($message); 
   
         //Send mail 
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
         $this->load->view('email_form'); 
      } 
   } 
?>