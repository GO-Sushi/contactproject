<?php 
namespace App\Controllers;
use App\Controllers\BaseController;

class Exercice extends BaseController{


    public function __construct(){

    
    }

    public function index($id=0 , $nom='Nelwick' , $age=20 , $sexe=''){

        $data=[
            'id'  =>  $id,
            'nom' =>  $nom,
            'age'  => $age,
            'sexe' => $sexe
        ];

        echo $id ;
        
        if($age > "18"){
            echo "   tu est majeur";
        }else{
            echo "   tu n'est pas majeur";
        }

        switch ($sexe) {
            case "homme":
                echo " je suis un homme";
                    break;
            case "femme":
                echo " je suis une femme";
                break;
            default: 
                echo " vous n'avez pas précisé de sexe";
        }
        echo view('Exercice' , $data);
    }

    

}

?>