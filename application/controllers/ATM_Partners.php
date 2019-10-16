<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ATM_Partners extends CI_Controller {
	public function index(){
		$dataSend['header'] = 'ATM Partners';
		$dataSend['navbar'] = 'ARP';
		$this->load->view('Arp/arp',$dataSend);
	}
}
