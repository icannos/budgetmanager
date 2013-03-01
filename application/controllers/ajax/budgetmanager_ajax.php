<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class budgetmanager_ajax extends CI_Controller {
		
		public function __construct()
		{
			parent::__construct();
			$this->load->library('form_validation');
		}
		
		public function newdoc()
		{
			$datadoc['param']['date_crea'] = time();
			
			$this->session->set_userdata('datadoc', $datadoc);
			$d['alert'] = "<div class='alert alert-info'><button type='button' class='close' data-dismiss='alert'>&times;</button> Un nouveau fichier a été créé.</div>";
			
			$data = array();
			$this->skin->budgetmanagerPage_ajax('default', 'toolsbar', $d);
			$this->skin->budgetmanagerPage_ajax('default', 'cmdtable');	
		}
		public function majtitle()
		{
			$this->form_validation->set_rules('docname', '', 'trim|encode_php_tags|xss_clean');
			
			if($this->form_validation->run())
			{
				$datadoc = $this->session->userdata('datadoc');
				
				$datadoc['param']['title'] = $this->input->post('docname');			
				
				$this->session->unset_userdata('datadoc');
				$this->session->set_userdata('datadoc', $datadoc);
				
				$this->skin->budgetmanagerPage_ajax('default', 'cmdtable', $datadoc);
			}
		}
			public function generate_save()
			{
				
				$this->form_validation->set_rules('namesave', '', 'trim|max_length[52]|encode_php_tags|xss_clean');
				
				if($this->form_validation->run())
				{
					$datadoc = $this->session->userdata('datadoc');
					
					$datadoc['param']['titlefile'] = $this->input->post('namesave');
					echo '<a href="' . site_url('ajax/budgetmanager_ajax/downloadsave') . '" class="btn btn-primary">Télécharger</a>';
					
					$this->session->unset_userdata('datadoc');
					$this->session->set_userdata('datadoc', $datadoc);
				}
			}
			
			public function downloadsave()
			{
				$this->load->helper('download');
				$datadoc = $this->session->userdata('datadoc');
				force_download($datadoc['param']['titlefile'] . '.bmgr', serialize($datadoc));
			}
			public function majparam()
			{
				$this->load->library('form_validation');
				
				$this->form_validation->set_rules('anneemanagement', '', 'trim|max_length[52]|alpha_dash|encode_php_tags|xss_clean');	
				$this->form_validation->set_rules('courapp', '', 'trim|max_length[52]|alpha_dash|encode_php_tags|xss_clean');
				$this->form_validation->set_rules('juridiction', '', 'trim|max_length[52]|alpha_dash|encode_php_tags|xss_clean');
				$this->form_validation->set_rules('adresse', '', 'trim|max_length[52]|alpha_dash|encode_php_tags|xss_clean');
				$this->form_validation->set_rules('codeposte', '', 'trim|max_length[52]|alpha_dash|encode_php_tags|xss_clean');
				$this->form_validation->set_rules('ville', '', 'trim|max_length[52]|alpha_dash|encode_php_tags|xss_clean');
				
				if($this->form_validation->run())
				{
					$datadoc = $this->session->userdata('datadoc');
					
					$datadoc['param']['anneemanagement'] = $this->input->post('anneemanagement');
					$datadoc['param']['courapp'] = $this->input->post('courapp');
					$datadoc['param']['juridiction'] = $this->input->post('juridiction');
					$datadoc['param']['adresse'] = $this->input->post('adresse');
					$datadoc['param']['codeposte'] = $this->input->post('codeposte');
					$datadoc['param']['ville'] = $this->input->post('ville');
					
					$this->session->set_userdata('datadoc', $datadoc);
					
					$datadoc["alert_modal_param"] = "<div class='alert alert-info' id='alert_paramfile_1'><button type='button' class='close' data-dismiss='alert'>&times;</button> Les paramètres ont été mis à jour.</div>";
					
					$this->skin->budgetmanagerPage_ajax('default', 'modal/paramfile', $datadoc);
					
					
				}
				
			}
			
			public function uploadsave()
			{
				
				$this->form_validation->set_rules('datadoc', '', 'trim|encode_php_tags|xss_clean');
				
				if($this->form_validation->run())
				{
					$datadoc = array();
					
					
					$datadoc = unserialize($this->input->post('datadoc'));
					if(isset($datadoc['param']['titlefile']))
					{
						$this->session->unset_userdata('datadoc');
						$this->session->set_userdata('datadoc', $datadoc);					
						
							$dataa = $datadoc;
							$this->skin->budgetManagerContent('default', $dataa);
					}
					else
					{
						echo 'no';
					}
					

				}
				else
				{
					echo 'no';
				}
			
			
			}
			
	}			