<?php 
namespace App\Controllers;
use App\Controllers\BaseController;

class Formulaire extends BaseController{


    public function index(){

        $rules=[
            "nom"=> 'required|min_length[6]|max_length[50]',
            "prenom"=> 'required|min_length[6]|max_length[50]'
        ];

        

        //validate c'est une fonction!!!!
        
        if($this->validate($rules)){
            
        }

        $data=[
            'validation'=> $this->validator,
            'request'=>$this->request
        ];

        echo view('Formulaire' , $data);

    }






}




?>