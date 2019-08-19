<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
 
 public function __constructor(){
 	parent::__construct();
 	//$this->load->model('UsersModel');
 	 $this->load->model('TestModel');


 }
public function create(){
	$testTypeModel = new TestModel;
	$data['testData']=$testTypeModel->getTestTypeData();
	$this->load->view('includes/header');
	$this->load->view('users/create',$data);
	$this->load->view('includes/footer');
}

public function index(){
		$this->template->load('index','contents','layouts/index');

	// $this->load->view('includes/header');
	// $this->load->view('users/index');
	// $this->load->view('includes/footer');
}

	
}
