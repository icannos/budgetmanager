<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
	
	class Skin
	{
		private $CI;
		
		public function __construct()
		{
			$this->CI = get_instance();	
		}
		
		public function generate_page($theme, $dir, $file, $data=array())
		{
			$this->CI->load->library('layout');
			
			$this->CI->layout->views($theme.'/include/header', $data);
			$this->CI->layout->views($theme.'/include/aside');
			$this->CI->layout->views($theme.'/include/nav_bar');
			$this->CI->layout->view($theme.'/'.$dir.'/' .$file);
		}
		public function budgetmanagerPage($theme, $data=array())
		{
		
			$this->CI->layout->views($theme.'/include/general_navbar', $data);
			
			$this->CI->layout->views($theme.'/BudgetManager/content_begin');
			
			
			$this->CI->layout->views($theme.'/BudgetManager/modal/dotation');
			$this->CI->layout->views($theme.'/BudgetManager/modal/paramfile');
			$this->CI->layout->views($theme.'/BudgetManager/modal/savefile');
			$this->CI->layout->views($theme.'/BudgetManager/modal/uploadsave');
			
			//------------------------\\
			//App
			
			$this->CI->layout->views($theme.'/BudgetManager/toolsbar');
			$this->CI->layout->view($theme.'/BudgetManager/cmdtable');
			
			$this->CI->layout->views($theme.'/BudgetManager/content_end');
			

		}
		public function budgetManagerContent($theme, $data=array())
		{
						//Modal
			$this->CI->load->view($theme.'/BudgetManager/modal/dotation', $data);
			$this->CI->load->view($theme.'/BudgetManager/modal/paramfile', $data);
			$this->CI->load->view($theme.'/BudgetManager/modal/savefile', $data);
			$this->CI->load->view($theme.'/BudgetManager/modal/uploadsave', $data);
			
			//------------------------\\
			//App
			
			$this->CI->load->view($theme.'/BudgetManager/toolsbar', $data);
			$this->CI->load->view($theme.'/BudgetManager/cmdtable', $data);
		}
		public function budgetmanagerPage_Ajax($theme, $file, $data=array())
		{
				$this->CI->load->view($theme.'/BudgetManager/'.$file, $data);

		}
		public function show_single_view($theme, $dir, $file, $data=array())
		{
			$this->CI->load->view($theme.'/'.$dir.'/'.$file, $data);
		}
		
		
		
		
	}