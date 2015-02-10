<?php

class Admin extends CI_model {

	function get_orders()
	{
		return $this->db->query("SELECT orders.id, customers.first_name, customers.last_name, orders.created_at, customers.address1, customers.address2, customers.city, customers.state, customers.zipcode, orders.id
			FROM orders
			JOIN customers ON orders.customer_id = customers.id
			ORDER BY orders.created_at DESC")->result_array();
	}

}