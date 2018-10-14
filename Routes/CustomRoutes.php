<?php
namespace Routes;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;
/**
 * 
 */
class CustomRoutes
{
	public static function initRoute(){
		$url = isset($_GET['redirect'])?$_GET['redirect']:'/';

		$collector = new RouteCollector();
		$collector->get("/",["App\Controllers\HomeController","index"]);
		$collector->get("admin",["App\Controllers\AdminController","index"]);
		$collector->get("login",["App\Controllers\AuthController","getLogin"]);
		$collector->post("login",["App\Controllers\AuthController","postLogin"]);
		$collector->get('error', function() {
			return "Not found!";
		});
		$collector->get('posts',["App\Controllers\PostController","index"]);
		$dispatcher = new Dispatcher($collector->getData());
		echo $dispatcher->dispatch($_SERVER['REQUEST_METHOD'],$url);
	}
}