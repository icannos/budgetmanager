<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class Accueil extends CI_Controller {
		
		public function __construct()
		{
			parent::__construct();
		}		
		public function index()
		{
			$this->news();
		}
		public function news()
		{	
			$data = array();
			$this->skin->budgetmanagerPage('default', $data);
		}
		
	}	