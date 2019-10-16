<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privacy_Policy extends CI_Controller {
	public function index(){
		$dataSend['header'] = 'Privacy Policy';
		$dataSend['navbar'] = 'Privacy';
		$this->load->view('Pp/pp',$dataSend);
	}
}
