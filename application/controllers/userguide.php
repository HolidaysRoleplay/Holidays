<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Userguide extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Holidays - User Guide';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/userguide', $data);
    }
}
