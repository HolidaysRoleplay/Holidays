<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admincs extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Holidays - Admin Charackter Story';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['user_cs'] = $this->db->get_where('user_cs')->row_array();
        $this->load->view('admin/admincs', $data);
    }
}
