<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$this->load->view('admin/header');
		$this->load->view('admin/main');
		//$this->load->view('welcome_message');
		$this->load->view('admin/footer');
		//$this->load->view('welcome_message');
	}
	
	public function dashboard()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
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
	
	public function services()
	{
		$this->load->view('header2');
		$this->load->view('services');
		$this->load->view('footer2');
	}
	
	public function gallery()
	{
		$this->load->view('header2');
		$this->load->view('gallery');
		$this->load->view('footer2');
	}
	
	public function careers()
	{
		$this->load->view('header2');
		$this->load->view('careers');
		$this->load->view('footer2');
	}
	
	public function blog()
	{
		$this->load->view('header2');
		$this->load->view('blog');
		$this->load->view('footer2');
	}
	
	public function team()
	{
		$this->load->view('header2');
		$this->load->view('team');
		$this->load->view('footer2');
	}
	
	public function contact()
	{
		$this->load->view('header2');
		$this->load->view('contact');
		$this->load->view('footer2');
	}
	
	public function register()
	{
		$this->load->view('header2');
		$this->load->view('register');
		$this->load->view('footer2');
	}
	
	
}
