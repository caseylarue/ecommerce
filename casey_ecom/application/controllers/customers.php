<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customers extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function product()
	{
		$this->load->view('product');
	}

	public function cart()
	{
		$this->load->view('cart');
	}

	public function build_cart()
	{

		if(!empty($this->session->userdata('cart_id')))
		{
			echo "cart id is set";
		}
		{
			$this->load->model('Customer');
			$this->Customer->create_cart();
			$cart_id = $this->db->insert_id();
			$this->session->set_userdata('cart_id', $cart_id);

			$item = $this->input->post();
			$item['cart_id']= $cart_id
			$this->Customer->add_to_cart($item);
		}


		// $item = $this->input->post();
		// var_dump($item);
	}

	public function pay_info()
	{
		$result = $this->input->post();
 	 	$shipping['first_name'] = $result["shipping_first_name"];
 	 	$shipping['last_name'] = $result["shipping_last_name"];
  		$shipping['address'] = $result["shipping_address"];
  		$shipping['address_2'] = $result["shipping_address_2"];
  		$shipping['city'] = $result["shipping_city"];
  		$shipping['state'] = $result["shipping_state"];
  		$shipping['zip'] = $result["shipping_zip"];

	  	$billing['first_name'] = $result["billing_first_name"];
	  	$billing['last_name'] = $result["billing_last_name"];
	  	$billing['address'] = $result["billing_address"];
	  	$billing['address_2'] = $result["billing_address_2"];
	 	$billing['city'] = $result["billing_city"];
	 	$billing['state'] = $result["billing_state"];
	 	$billing['zip'] = $result["billing_zip"];
	 	$billing['card_type'] = $result["billing_card_type"];
	 	$billing['card_number'] = $result["billing_card_number"];
	 	$billing['security_code'] = $result["billing_security_code"];
	  	$billing['billing_expiration'] = $result["billing_expiration"];

	}


}   //end of main controller