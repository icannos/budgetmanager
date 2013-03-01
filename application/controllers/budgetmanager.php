<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class budgetmanager extends CI_Controller {
		
		public function __construct()
		{
			parent::__construct();
		}


		public function index()
		{			
			$datadoc = $this->session->userdata('datadoc');
			$data = $datadoc;		
			
			
			$this->skin->budgetmanagerPage('default', $data);
			
			$this->output->enable_profiler(true);
			
			
		}
		
	}	