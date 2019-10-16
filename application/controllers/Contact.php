<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	public function index(){
		$dataSend['header'] = 'Contact Us';
		$dataSend['navbar'] = 'Contact';
		$this->load->view('Contact/contact',$dataSend);
	}
}
