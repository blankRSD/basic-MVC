<?php 

namespace App\Controllers;

class Posts extends \Core\Controller
{
	public function indexAction()
	{
		echo 'Hello from index of posts controller';
	}

	public function addnewAction()
	{
		echo 'hello from addnew of posts controller';
	}

	public function editAction()
	{
		echo 'hello from edit of posts controller';
		echo '<pre>'. htmlspecialchars(print_r($this->route_params,true)) . '</pre>';
	}
	
	
}

 ?>