<?php 
	class UsersController extends AppController
	{
		function add()
		{
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

			$this->set('users', $this->User->find('all'));


		}

		function logout()
		{
			$this->redirect($this->Auth->logout());
		}

	}
?>