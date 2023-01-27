<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tambahannounc extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Holidays - Admin Announcement';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/tambahannounc', $data);
    }
}
