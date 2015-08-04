<?php 

class Hydratation
{
	public function viewPage($params_view)
	{
		if($params_view)
		{
			$path = 'views/'.$params_view.'.php';

			if(file_exists($path))
			{
				require_once('__DIR__/../views/'.$params_view.'.php');
			}

			else
			{
				die("Error");
			}

		}

		else
		{
			die("Error");
		}
	}
	
	public function hydrate(array $datas)
	{
		foreach($datas as $data => $value)
		{
			$method = 'set'.ucfirst($data);
			if(method_exists($this, $method))
			{
				$this->$method($value);
			}
		}
	}

	public function redirect($redirect)
	{
		if(file_exists('controlers/'.$redirect.'.php'))
		{
			$this->redirect = $redirect;
			header('Location: __DIR__/../'.$this->redirect);
		}
		else{
			die('Error');
		}
	}
}

?>