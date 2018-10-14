<?php
include 'BaseModel.php';

/**
 * 
 */
class CategoryModel extends BaseModel
{
	
	function __construct()
	{
		# code...
		parent:: __construct();

	}

	public static function tableName(){
		return 'categories';
	}

	public function find($id = NULL){
		$model = new CategoryModel();
		$model->query = 'SELECT * FROM ' . self::tableName();
		return $model;
	}
}