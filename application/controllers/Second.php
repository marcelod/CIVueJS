<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Second extends MY_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->data['title'] = 'Teste Codeigniter + Vue (The Majesty of Vue)';
	}

	public function index()
	{
		$this->data['js'] = load_js('second/index');

		parent::index();
	}
}
