<?php 
	class CompaniesController extends AppController
	{
		function index()
		{
			$this->set('page_title', 'Compañias');
			$this->set('page_sub_title', '');

			$this->set('companies', $this->Company->find('all', array(
					'conditions' => array(
							'user_id' => $this->Auth->user()['id']
						),
					'order' => array(
							'nombre'
						)
				)
			));
		}

		function add()
		{
			if($this->request->is('post'))
			{
				$this->Company->save($this->request->data);

				$this->redirect(array('action' => 'index'));
			}
		}
	}
 ?>