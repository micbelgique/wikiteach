<?php 

class Home extends Hydratation
{
	private $id;

	/*
	Setters
	*/

	public function setId($id)
	{
		$id = (int) $id;

		if(is_int($id))
		{
			$this->id = $id;
		}
	}

	/*
	Getters
	*/

	public function getId()
	{
		return $this->id;
	}

}

?>