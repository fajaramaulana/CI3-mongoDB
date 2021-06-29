<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class ApiController extends CI_Controller {

    function __construct() {
		parent::__construct();
		$this->load->model('usermodel');
	}

    function index () {
        $siswa = $this->usermodel->get_user_list();

        $response = array();

        foreach($siswa as $hasil) {

            $response[] = array(
                'nama' => $hasil->name,
                'email'     => $hasil->email         
            );

        }
        
        header('Content-Type: application/json');
        echo json_encode(
            array(
                'success' => true,
                'message' => 'Get All Data Siswa',
                'data'    => $response  
            )
        );
    }

}
