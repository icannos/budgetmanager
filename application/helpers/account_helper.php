<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('ReloadSession'))
{
	function ReloadSession($id_account = 0)
	{
		$this->load->model('accountMgr');
		
		if($id_account != null && $id_account != 0)
		{
			$account = $this->accountMgr->getAccountById($id_account);
			$this->session->set_userdata('account', $account);
			$this->session->set_userdata('id_account', $account->getId());
		}
		else
		{
			$this->session->set_userdata('id_account', 0);
			return 0;
		}
			
	}
}