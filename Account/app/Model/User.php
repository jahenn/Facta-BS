<?php 
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
	class User extends AppModel
	{
		var $validate = array(
				'username' => 'notEmpty',
				'nombre' => 'notEmpty',
				'correo_electronico' => 'notEmpty',
				'password' => 'notEmpty'
			);	
		public function beforeSave($options = array()) {
		    if (isset($this->data[$this->alias]['password'])) {
		        $passwordHasher = new SimplePasswordHasher();
		        $this->data[$this->alias]['password'] = $passwordHasher->hash(
		            $this->data[$this->alias]['password']
		        );
		    }
		    return true;
		}
	}
?>