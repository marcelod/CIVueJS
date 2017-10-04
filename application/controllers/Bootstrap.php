<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bootstrap extends MY_Controller {

	public function index()
	{
		$this->data['css'] = load_css('bootstrap.min');
		$this->data['js'] = load_js([
			'test_bootstrap_vue',
			'jquery.min',
			'bootstrap.min'
		]);

		$this->render();
	}

	public function ajax_resource()
	{
		$this->data['css'] = load_css('bootstrap.min');
		$this->data['js'] = load_js([
			'vue-resource.min',
			'test_bootstrap_ajax_resource_vue',
			'jquery.min',
			'bootstrap.min'
		]);

		$this->render('bootstrap_ajax_resource');
	}

}
