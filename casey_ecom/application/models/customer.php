<?php

class Customer extends CI_model {

	function create_cart()
	{
		$query = "INSERT INTO cart (created_at) VALUES (NOW())";
		return $this->db->query($query);
	}

	function add_to_cart($item)
	{
		$query = "INSERT INTO cart_products (cart_id, products_id, product_qty, created_at) VALUES (?, ?, ?, NOW())";
		$values = array()
		return $this->db->query($query);
	}

	// function cart_id()
	// {
	// 	return $this->db->query("SELECT * from cart ORDER by ")
	// }

}