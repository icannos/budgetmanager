<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
	
	class character
	{
		private $guid;
		private $account;
		
		private $name;
		private $race;
		private $classe;
		private $gender;
		private $level;
		private $money;
		private $health;
		
		private $online;
		private $totaltime;
		private $leveltime;
		
		public function update($data = array()) //Update de l'objet
		{
			if($data != null OR $data != 0)
			{
				if(isset($data['guid']))					{ $this->id = $data['guid']; }
				if(isset($data['account']))					{ $this->id = $data['account']; }
				if(isset($data['name']))					{ $this->id = $data['name']; }
				if(isset($data['race']))					{ $this->id = $data['race']; }
				if(isset($data['classe']))					{ $this->id = $data['classe']; }
				if(isset($data['gender']))					{ $this->id = $data['gender']; }
				if(isset($data['level']))					{ $this->id = $data['level']; }
				if(isset($data['money']))					{ $this->id = $data['money']; }
				if(isset($data['health']))					{ $this->id = $data['health']; }
				if(isset($data['online']))					{ $this->id = $data['online']; }
				if(isset($data['totaltime']))				{ $this->id = $data['totaltime']; }
				if(isset($data['leveltime']))				{ $this->id = $data['leveltime']; }
				
			}
			
		}
		
		//getters
		public function getGuid()
		{
			return $this->guid;
		}
		public function getAccount()
		{
			return $this->account;
		}
		public function getName()
		{
			return $this->name;
		}
//--------------------------------------------------

		public function getRace() // Retourne un tableau contenant le nom français de la race ainsi que l'id de la race
		{
			$races = array('1' => 'Humain', '2' => 'Orc', '3' => 'Nain', '4' => 'Elfe de la nuit', '5' => 'Mort-Vivant', '6' => 'Tauren', '7' => 'Gnome', '8' => 'Troll', '10' => 'Elfe de sang', '11' => 'Draenei');
			
			return array('name'  => $races[$this->race], 'id' => $this->race);
			
		}
		
//--------------------------------------------------
		public function getClasse() //  Retourne un tableau contenant le nom français ainsi que l'id de la classe
		{
			$classes = array('1' => 'Guerrier', '2' => 'Paladin', '3' => 'Chasseur', '4' => 'Voleur', '5' => 'Prêtre', '6' => 'Chevalier de la mort', '7' => 'Shaman', '8' => 'Mage', '10' => 'Démoniste', '11' => 'Druid');
			
			return array('name'  => $classes[$this->classe], 'id' => $this->classe);
		}
//--------------------------------------------------
		public function getGender()
		{
			return $this->gender;
		}
		public function getLevel()
		{
			return $this->level;
		}
//----------------------------------------------------

		public function getMoney() // Retourne l'argent du personnage sous forme d'un tableau comprenant l'or, l'argent et le cuivre
		{
			$gold = floor($this->money / 10000);
			$money = $this->money - ($gold * 10000);
			
			$silver = floor($this->money / 100);
			$money = $this->money - ($silver * 100);
			
			$copper = $this->money;
			
			$money['gold'] = $gold;
			$money['silver'] = $silver;
			$money['copper'] = $copper;
			
			return $money;
		}*
		
//-------------------------------------------------------


		public function getHealth()
		{
			return $this->health;
		}
		public function isOnline()
		{
			return $this->online;
		}
		public function getTotaltime()
		{
			return $this->totaltime;
		}
		public function getLeveltime()
		{
			return $this->leveltime;
		}
		
		
	}	