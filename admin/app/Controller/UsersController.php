<?php 
	class UsersController extends AppController
	{

		function login()
		{}

		function index()
		{
			$this->set('page_title', 'Usuarios');
			$this->set('page_sub_title', 'Control');
		}

	}
?>