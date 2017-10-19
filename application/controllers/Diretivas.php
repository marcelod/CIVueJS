<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diretivas extends MY_Controller {

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


	public function forRange()
	{
		$this->data['js'] = load_js('diretivas/for_range');

		$this->render('diretivas/for_range');
	}

	public function forArray()
	{
		$this->data['js'] = load_js('diretivas/for_array');

		$this->render('diretivas/for_array');
	}

	public function forArrayObject()
	{
		$this->data['js'] = load_js('diretivas/for_array_object');

		$this->render('diretivas/for_array_object');
	}

	public function tarefa2()
	{
		$this->data['js'] = load_js('diretivas/tarefa2');

		$this->render('diretivas/tarefa2');
	}

}