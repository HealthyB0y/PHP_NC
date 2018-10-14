<?php
namespace App\Models;
use App\Models\BaseModel;

/**
 * 
 */
class PostModel extends BaseModel{
	
	function __construct()
	{	
		# code...
		parent:: __construct();
	}

	public static function tableName(){
		return 'posts';
	}

	public function find($id = NULL){
		$model = new PostModel();
		$model->query = 'SELECT * FROM ' . self::tableName();
		return $model;
	}
}