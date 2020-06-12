<?php
class Customers_model extends CI_Model {
    public function get_customer($id) {
        $data['id'] = 3;
        $data['first_name'] = 'John';
        $data['last_name'] = 'Doe';
        $data['address'] = 'Kingstone';

        return $data;
    }
}