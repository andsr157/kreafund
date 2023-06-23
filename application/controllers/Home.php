<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{
		$this->template->load('template/template','home');
	}

	public function fetchdata(){
		// $projectCount = $this->project_m->get()->num_rows();
		$projectCount = 1427;
        $donationAmount = 500000000;
        $successfulCount = 1002;

        // Susun data dalam bentuk array
        $data = array(
            'projectCount' => $projectCount,
            'donationAmount' => $donationAmount,
            'successfulCount' => $successfulCount
        );

        // Mengembalikan data dalam format JSON
        header('Content-Type: application/json');
        echo json_encode($data);
	}
}
