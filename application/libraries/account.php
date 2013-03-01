<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


// Classe représentant un compte
class account
{
		private $id;
		private $username;
		private $sha_pass_hash;
		private $last_ip;
		private $email;
		private $last_login;
		
		private $accountAccess = array(); // Level MJ du compte

	
		private $expansion;
		private $joindate; // Date inscription
		
		private $nb_characters = array();
		
		private $characters = array();
		private $bann = array();		
		
		public function update($data = array()) // Permet de remplir les variables du compte
		{
			if($data != null)
			{
			// Mise à jour des données
				if(isset($data['id']))					{ $this->id = $data['id']; }
				if(isset($data['username']))			{ $this->username = $data['username'];}
				if(isset($data['sha_pass_hash']))		{ $this->sha_pass_hash = $data['sha_pass_hash'];}
				if(isset($data['last_ip']))				{ $this->last_ip = $data['last_ip']; }
				if(isset($data['email']))				{ $this->email = $data['email']; }
				if(isset($data['accountAccess']))		{ $this->accountAccess = $data['accountAccess'];}
				if(isset($data['expansion']))			{ $this->expansion = $data['expansion']; }
				if(isset($data['joindate']))			{ $this->joindate = $data['joindate']; }
				if(isset($data['characters']))			{ $this->characters = $data['characters']; }
				if($data['bann'] != null)				{ $this->bann = $data['bann']; }
				if($data['nb_characters'] != null)		{ $this->nb_characters = $data['nb_characters']; }
				if($data['last_login'] != null)			{ $this->last_login = $data['last_login']; }
			}
		}
		
		// Getters
		public function getBann()
		{
			return $this->bann;
		}
		public function getLast_login()
		{
			return $this->last_login;
		}
		public function getId()
		{
			return $this->id;
		}
		public function getUsername()
		{
			return $this->username;
		}
		public function getPass()
		{
			return $this->sha_pass_hash;
		}
		public function getLastIp()
		{
			return $this->last_ip;
		}
		public function getEmail()
		{
			return $this->email;
		}
		public function getGmLevel()
		{
			foreach($this->accountAccess as $account_access)
			{
				if($account_access['RealmID'] == '-1')
				{
					return $account_access['gmlevel'];
				}
				else
				{
					return 0;
				}
			}
		}
		// public function getGmLocation()
		// {
			// return $this->gmlevel_location;
		// }
		public function getExpansion()
		{
			return $this->expansion;
		}
		public function getJoindate()
		{
			return $this->joindate;
		}
}