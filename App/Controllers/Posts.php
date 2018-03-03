<?php 

namespace App\Controllers;

use \Core\View;
use App\Models\Post;

class Posts extends \Core\Controller
{
	public function indexAction()
	{
		$posts = POST::getAll();
		View::renderTemplate('Posts/index.html',[
			'posts' => $posts
		]);
	}

	public function addnewAction()
	{
		// echo 'hello from addnew of posts controller';
	}

	public function editAction()
	{
		// echo 'hello from edit of posts controller';
		// echo '<pre>'. htmlspecialchars(print_r($this->route_params,true)) . '</pre>';
	}
	
	
}

 ?>