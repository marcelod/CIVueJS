<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diretivas extends MY_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->data['title'] = 'Teste Codeigniter + Vue (The Majesty of Vue)';

		$this->data['css'] = load_css([
			'bootstrap.min',
			// 'bootstrap-vue.min',
			// 'starter-template',
		]);

		// $this->data['js'] = load_js([
		// 	'polyfill.min',
		// 	'bootstrap-vue'
		// ]);
	}

	public function index()
	{
		redirect('diretivas/vshow','refresh');
	}

	public function vshow()
	{
		$this->data['js'] = load_js('diretivas/vshow');

		$this->render('diretivas/vshow');
	}

	public function vif()
	{
		$this->data['js'] = load_js('diretivas/vif');

		$this->render('diretivas/vif');
	}

	public function velse()
	{
		$this->data['js'] = load_js('diretivas/velse');

		$this->render('diretivas/velse');
	}

	public function tarefa1()
	{
		$this->data['js'] = load_js('diretivas/tarefa1');

		$this->render('diretivas/tarefa1');
	}
}
