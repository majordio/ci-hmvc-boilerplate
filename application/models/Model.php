<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {

	public function __construct() {
		$this->load->database();
	}

	public function getall($table,$where=[],$join=[]){
			$this->db->from($table);
			if (!empty($where)) {
				$this->db->where($where);
			}
			if (!empty($join)) {
				foreach ($join as $key) {
					$this->db->join($key['table'], $key['on'], $key['option'] ? $key['option'] : 'inner');
				}
			}
			return $this->db->get()->result();
	}


	public function get($table,$where=[],$join=[]){
			$this->db->from($table);
			if (!empty($where)) {
				$this->db->where($where);
			}
			if (!empty($join)) {
				foreach ($join as $key) {
					$this->db->join($key['table'], $key['on'], isset($key['option']) ? $key['option'] : 'inner');
				}
			}
			return $this->db->get()->first_row();
	}


	public function get_datatables($table, $column_order, $select, $where, $join, $limit, $offset, $search, $order)
  {
  	$this->db->from($table);
  	$columns = $this->db->list_fields($table);
  	if($select){
  		$this->db->select($select);
  	}
  	if($where){
  		$this->db->where($where);
  	}
  	if($join){
  		foreach ($join as $key) {
  			$this->db->join($key['table'], $key['on'], isset($key['option']) ? $key['option'] : 'inner');
  		}
  	}
  	if($search){
  		$this->db->group_start();
  		foreach ($column_order as $item)
  		{
  			$this->db->or_like($item, $search['value']);
  		}
  		$this->db->group_end();
  	}
  	if($order)
  		$this->db->order_by($column_order[$order['0']['column']], $order['0']['dir']);

    $temp = clone $this->db;
		if($where){
  		$temp->where($where);
  	}
    $data['count'] = $temp->count_all_results();

  	if($limit != -1)
  		$this->db->limit($limit, $offset);

  	$query = $this->db->get();
  	$data['data'] = $query->result();

  	$this->db->from($table);
		if($where){
			$this->db->where($where);
		}
  	$data['count_all'] = $this->db->count_all_results();
  	return $data;
  }


	public function insert($table, $data) {
		if($this->db->insert($table, $data))
			return $this->db->insert_id();
		else
			return 0;
	}


	public function update($table, $data, $where) {
		$this->db->where($where);
		return $this->db->update($table, $data);
	}


	public function delete($table, $where) {
		$this->db->where($where);
		return $this->db->delete($table);
	}


	public function resolve_user_login($password, $hash) {
		return $this->verify_password_hash($password, $hash);
	}

}
