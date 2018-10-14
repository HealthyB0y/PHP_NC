<?php
namespace App\Models;
use App\Models\BaseModel;
/**
 * 
 */
class UserModel extends BaseModel
{
	
	function __construct()
	{
		# code...
		parent::__construct();
	}

	public function tableName(){
		return 'users';
	}

	public function find(){
		$model = new UserModel();
		$model->query='SELECT * FROM ' .self::tableName();
		return $model;	
	}
}