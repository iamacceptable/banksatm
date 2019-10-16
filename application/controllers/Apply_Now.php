<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apply_Now extends CI_Controller {
	public function index(){
		$dataSend['header'] = 'Apply Now';
		$dataSend['navbar'] = 'Apply Now';
		$this->load->view('Apply/apply',$dataSend);
	}
	public function apply(){
		$name = $this->input->post('name');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$address = $this->input->post('address');
	     //Load email library 
	    $this->load->library('email',$config); 
	    $message = $name.' requested a Bank ATM at '.$address.' and Contact No. +91'.$phone;
	    $this->email->from($email, $name); 
	    $this->email->to('iamacceptable@yahoo.com');
	    $this->email->subject('New ATM Request | '.$name); 
	    $this->email->message($message); 

	     //Send mail 
	    if($this->email->send()){
	    	$r['error'] = '0000';
	    }
	    else{
	    	$r['error'] = '0001';
	    }
	    echo json_encode($r);
	}
}
