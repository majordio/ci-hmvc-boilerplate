<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    protected function view($views=array(),$content_only = false){
        $this->load->view('templates/head');
        if(!$content_only){
          $this->load->view('templates/header');
          $this->load->view('templates/l-sidebar');
          $this->load->view('templates/content-header');
        }
        foreach ($views as $key => $value) {
          $this->load->view((is_object($value) || is_array($value)) ? $key : $value, (is_object($value) || is_array($value)) ? $value : null);
        }
        if(!$content_only){
          $this->load->view('templates/content-footer');
          $this->load->view('templates/r-sidebar');
          $this->load->view('templates/footer');
        }
        $this->load->view('templates/foot');
    }

    public function datatables_data($table, $column_order, $select = '*', $join = null, $where = null)
    {
      $limit = $this->input->post('length');
      $offset = $this->input->post('start');
      $search = $this->input->post('search');
      $order = $this->input->post('order');
      $draw = $this->input->post('draw');
      $list = $this->my_model->get_datatables($table,$column_order, $select, $where, $join, $limit, $offset ,$search, $order);
      $output = array(
          "draw" => $draw,
          "recordsTotal" => $list['count_all'],
          "recordsFiltered" => $list['count'],
          "data" => $list['data']
      );
      return $output;
    }


}
