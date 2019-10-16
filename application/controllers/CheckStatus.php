<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CheckStatus extends CI_Controller {
	public function index(){
		$dataSend['header'] = 'Check Status';
		$dataSend['navbar'] = 'Privacy';
		$this->load->view('CheckStatus/checkstatus',$dataSend);
	}
}
