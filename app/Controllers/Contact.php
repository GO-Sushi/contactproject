<?php

namespace App\Controllers;
use CodeIgniter\Model;
use app\ContactModels;

class Contact extends BaseController
{
	

	public function index()
	{

		//$data = [''=>$


		echo view('Common/Header');
		echo view('Contact');
		echo View('Common/Footer');
	}
}
