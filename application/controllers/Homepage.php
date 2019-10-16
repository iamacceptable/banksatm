<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {
	public function index(){
		$dataSend['header'] = 'Home';
		$dataSend['navbar'] = 'Home';
		$this->load->view('Homepage/homepage',$dataSend);
	}
}
