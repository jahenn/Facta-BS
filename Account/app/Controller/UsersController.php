<?php 
	class UsersController extends AppController
	{
		function add()
		{
			if($this->request->is('post'))
			{
				if($this->User->save($this->request->data))
				{
					$this->Session->setFlash("Usuario Creado Exitosamente", 'default', array(
							'class' => 'alert alert-success'
						));
					$this->redirect(array(
							'controller' => 'Users',
							'action' => 'index'
						)
					);
				}else{
					$this->Session->setFlash('Error al Guardar Usuario', 'default', array(
							'class' => 'alert alert-danger'
						)
					);
				}
			}

			$this->set('page_title', 'Usuarios');
			$this->set('page_sub_title', 'Agregar Usuario');
		}

		function login()
		{
			if ($this->request->is('post')) {
			    if ($this->Auth->login()) {
			        $this->redirect($this->Auth->redirect());
			    }
			    //pr($_POST);
			    $this->Session->setFlash(__('Invalid username or password, try again'));
			}
		}

		function index()
		{
			$this->set('page_title', 'Usuarios');
			$this->set('page_sub_title', 'Control');

			$this->set('users', $this->User->find('all', array(
				'order' => array('username')
				)
			));


		}

		function logout()
		{
			$this->redirect($this->Auth->logout());
		}

	}
?>