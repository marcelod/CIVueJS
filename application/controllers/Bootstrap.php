<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bootstrap extends MY_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->data['css'] = load_css('bootstrap.min');
		$this->data['js'] = load_js([
			'jquery.min',
			'bootstrap.min'
		]);
	}

	public function index()
	{
		$this->data['js'].= load_js(['test_bootstrap_vue']);

		$this->render();
	}

	public function ajax_resource()
	{
		$this->data['js'].= load_js([
			'vue-resource.min',
			'test_bootstrap_ajax_resource_vue',
		]);

		$this->render('bootstrap_ajax_resource');
	}

	public function ajax_axios()
	{
		$this->data['js'] = load_js([
			'axios.min',
			'test_bootstrap_ajax_axios_vue',
		]);

		$this->render('bootstrap_ajax_axios');
	}

}
