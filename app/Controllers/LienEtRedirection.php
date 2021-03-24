<?php 
namespace App\Controllers;
use App\Controllers\BaseController;

class LienEtRedirection extends BaseController{


    public function __construct(){

    
    }

    public function index($page){

        switch($page){

            case"acceuil":

              return redirect()->to('/LienEtRedirection/acceuil');
              break;
            
              case"boutique":

                return redirect()->to('/LienEtRedirection/boutique');
                break;

            default:
                echo "pas bon";

        }

    }

    public function acceuil(){

        echo "<a href='".base_url('LienEtRedirection/boutique')."'>lien vers boutique</a>";
    
    }

    public function boutique(){

        echo "<a href='".base_url('LienEtRedirection/acceuil')."'>lien vers acceuil</a>";
    }

}

?>