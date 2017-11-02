<?php
namespace app\models;

use yii\base\Model;
use app\models\Userchat;

class RegisterForm extends Model{

	public $Nombre;
	public $Apellido;
	public $email;
	public $password;
	public $password_repeat;
	public $sector_id;
	

	public function rules() {
		return [
			[
				['Nombre', 'email', 'password','password_repeat','sector_id','Apellido'], 
				'required', 'message' => 'Campo requerido'
			],
			['email', 'email_existe'],
			['Nombre', 'match', 'pattern' => "/^.{3,50}$/",'message' => 'Mínimo 3 y máximo 50 caracteres'],
			['Nombre', 'match', 'pattern' => "/^[a-z]+$/i", 'message' => 'Sólo se aceptan letras'],
			['Apellido', 'match', 'pattern' => "/^[a-z]+$/i", 'message' => 'Sólo se aceptan letras'],
			//['username', 'username_existe'],
			['email', 'match', 'pattern' => "/^.{5,80}$/",'message' => 'Mínimo 5 y máximo 80 caracteres'],
			['email', 'email', 'message' => 'Formato no válido'],
			['password', 'match', 'pattern' => "/^.{8,16}$/",'message' => 'Mínimo 6 y máximo 16 caracteres'],
			['password_repeat', 'compare', 'compareAttribute'=> 'password', 'message' => 'Los passwords no coinciden'],
			];
	}

	public function email_existe($attribute, $params){
		$ref = Usuario::find()->where("mailuser=:mailuser",[":mailuser" =>$this->email]);
		if($ref->count() != 0){
			if ($ref->one()->activuser == 0)return;//se reenvia email
			else $this->addError($attribute, "El email ingresado ya esta registrado...");}
	}
}
