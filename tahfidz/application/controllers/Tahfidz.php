<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahfidz extends CI_Controller {
	public function index()
	{
		$this->beranda();
	}

	public function beranda(){
		return view('beranda');
	}
}
