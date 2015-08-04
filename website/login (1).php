<?php 

class Login extends Hydratation
{
	private $username;
	private $pass;
	var $errorLog;

	/*
	Getters
	*/
	
	public function getUsername(){
		return ucfirst(strtolower($this->username));
	}

	public function getPass(){
		return sha1($this->pass);
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

	public function setPass($pass)
	{
		if(is_string($pass))
		{
			$this->pass = $pass;
		}
	}

}