<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class First extends MY_Controller {

	public function index()
	{
		$this->data['js'] = load_js('first_test_vue');

		$this->data['title'] = 'Teste Codeigniter + Vue';

		$this->render();
	}
}
