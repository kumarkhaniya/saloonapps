<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	{
		$this->load->view('header');
		$this->load->view('main');
		//$this->load->view('welcome_message');
		$this->load->view('footer');
		//$this->load->view('welcome_message');
	}
	
	public function appointment()
	{
		//$this->load->view('header');
		$this->load->view('appointment_page');
		//$this->load->view('footer');
		//$this->load->view('welcome_message');
	}
	
	public function aboutus()
	{
		$this->load->view('header2');
		$this->load->view('aboutus');
		$this->load->view('footer2');
	}
	
	public function pricing()
	{
		$this->load->view('header2');
		$this->load->view('pricing');
		$this->load->view('footer2');
	}
}
