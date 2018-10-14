<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\UserModel;
/**
 * 
 */
class AuthController extends BaseController
{
	public function getLogin(){
		return $this->render('login.login');
	}

	public function postLogin(){
		$userModel = new UserModel();
		$user=$userModel->find()
			->where(['username','=',$_POST['username']])
			->getOne();
		if(isset($user->password) && $user->password == $_POST['password']){
			$_SESSION['use_info'] =['user_id' =>$user->id,'pwd'=> $user->password];	

			header('location: admin');
		} else {
			return $this->render('login.login',['msg' =>'Khong thanh cong']);

		}
	}
}