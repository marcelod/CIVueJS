<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bulma extends MY_Controller {

	public function index()
	{
		$this->data['css'] = load_css('bulma.min');
		$this->data['js'] = load_js('test_bulma_vue');

		// $this->data['title'] = 'Teste Codeigniter + Vue + Bulma';

		$this->render();
	}
}
