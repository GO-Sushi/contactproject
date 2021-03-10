<?php

namespace App\Controllers;
use CodeIgniter\Model;
use app\ContactModels;

class Contact extends BaseController
{
	public function index()
	{
		return view('Contacts');
	}
}
