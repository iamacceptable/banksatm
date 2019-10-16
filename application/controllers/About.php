<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function index(){
		$dataSend['header'] = 'About Us';
		$dataSend['navbar'] = 'About';
		$this->load->view('About/about',$dataSend);
	}
}
