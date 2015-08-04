<?php 

class Index{
	use Hydratation;

	/*
	Getters
	*/
	
	public function getUsername(){
		return $this->username;
	}

	/*
	Setters
	*/

	public function setUsername($username)
	{
		if(is_string($username))
		{
			$this->username = $username;
		}
	}

}