<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Packages extends CI_Controller {
	public function index(){
		$dataSend['header'] = 'Packages';
		$dataSend['navbar'] = 'Packages';
		$this->load->view('Packages/packages',$dataSend);
	}
}
