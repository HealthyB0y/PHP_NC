<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\PostModel;
/**
 * 
 */
class PostController extends BaseController
{
	
	public function index(){
		$postModel = new PostModel();
		$posts = $postModel->find()->getAll();
		return $this -> render('post.list',['posts' => $posts]);	
	}
}