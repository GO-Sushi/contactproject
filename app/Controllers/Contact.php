<?php

namespace App\Controllers;
use CodeIgniter\Model;
use app\ContactModels;

class Contact extends BaseController
{
	public function __construct(){

		parent::__construct();
		$this->client = \Config\Services::curlrequest();
	
	}
	
	public function index()
	{

		$listecontacts = $this->client->request('POST', 'http://projectContact/Api', [
			'form_params' => [
					'paginate' => 10,
					'type' => '',
					'elements' => '',
			]
		]);




		$Contacts=json_decode($listecontacts->getBody());

		$data=[
			'Contacts'=> $Contacts
		];

		echo view('Common/Header');
		echo view('Contact', $data);
		echo View('Common/Footer');
	}
}
