<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Interatividade extends MY_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->data['title'] = 'Teste Codeigniter + Vue (The Majesty of Vue)';

		$this->data['css'] = load_css([
			'bootstrap.min',
		]);
	}

	public function index()
	{
		redirect('interatividade/von','refresh');
	}

	public function von()
	{
		$this->data['js'] = load_js('interatividade/von');

		$this->render('interatividade/von');
	}

	public function calculadora()
	{
		$this->data['js'] = load_js('interatividade/calculadora');

		$this->render('interatividade/calculadora');
	}

	public function propriedadeComputada()
	{
		$this->data['js'] = load_js('interatividade/propriedade_computada');

		$this->render('interatividade/propriedade_computada');
	}

	public function tarefa()
	{
		$this->data['js'] = load_js('interatividade/tarefa');

		$this->render('interatividade/tarefa');
	}

}