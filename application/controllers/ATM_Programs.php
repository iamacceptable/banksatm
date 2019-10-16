<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ATM_Programs extends CI_Controller {
	public function index(){
		$dataSend['header'] = 'ATM Programs';
		$dataSend['navbar'] = 'AP';
		$this->load->view('Ap/ap',$dataSend);
	}
}
