<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customers extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		echo "you made it";
	}

	public function cart()
	{
		$this->load->view('cart');
	}

	public function pay_info()
	{
		echo "/customers/billing_info";
	}

}

//end of main controller