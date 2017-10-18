<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{
		$this->data['css'] = load_css([
			'bootstrap4.min',
			'bootstrap-vue.min',
			'starter-template',
		]);

		$this->data['js'] = load_js([
			'polyfill.min',
			'bootstrap-vue'
		]);

		$this->data['title'] = 'Teste Codeigniter + Vue + Bootstrap';

		$this->render();
	}
}
