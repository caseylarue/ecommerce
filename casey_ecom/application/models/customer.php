<?php

class Customer extends CI_model {

	function create_cart()
	{
		$query = "INSERT INTO cart (created_at) VALUES (NOW())";
		return $this->db->query($query);
	}

	function add_to_cart($item)
	{
		$query = "INSERT INTO cart_products (cart_id, product_id, product_qty, created_at) VALUES (?, ?, ?, NOW())";
		$values = array($item['cart_id'], $item['product_id'], $item['qty']);
		return $this->db->query($query, $values);
	}

	function display_cart($cart_id)
	{
		return $this->db->query("SELECT cart_products.cart_id,cart_products.product_id, products.description, products.price, SUM(cart_products.product_qty) as qty, SUM(cart_products.product_qty * products.price) as total
		FROM cart_products
		JOIN products ON cart_products.product_id = products.id
		WHERE cart_products.cart_id=$cart_id
		GROUP BY products.id")->result_array();
	}

	function cart_total($cart_id)
	{
		return $this->db->query("SELECT SUM(cart_products.product_qty * products.price) as item_total
		FROM cart_products
		JOIN products ON cart_products.product_id = products.id
		WHERE cart_products.cart_id=$cart_id")->row_array();
	}

	function qty_in_cart($cart_id)
	{
		return $this->db->query("SELECT SUM(product_qty) as total_qty
		FROM cart_products
		WHERE cart_id=$cart_id")->result_array();
	}

}