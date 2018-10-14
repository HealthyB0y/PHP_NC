<?php 
namespace App\Controllers;
use Jenssegers\Blade\Blade;

/**
* 
*/
class BaseController 
{
	public function render($fileName,$variables = []){
		$view = new Blade("app/views", 'storages');
		echo $view->make($fileName, $variables)->render();
	}
}