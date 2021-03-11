<?php 
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\ContactModel;

class Api extends BaseController{

    public $contactModel = null;

    public function __construct(){

		$this->contactModel = new ContactModel();
    
    }

    //fonction de listage + pagination et recherche
    public function index(){

        $listecontacts=$this->contactModel->paginate(10);
         
        //
        if(!empty($this->request->getVar("type")) && !empty($this->request->getVar("elementRecherche"))){
            $type=$this->request->getVar("type");
            $elementRecherche=$this->request->getVar("elementRecherche");
            
            switch ($type){

                case "recherche":
                    //dd($listecontacts);
                $listecontacts=$this->contactModel->like( "first_Name",$elementRecherche ,'both',null,true)
                                                  ->orlike("last_Name",$elementRecherche ,'both',null,true)
                                                  ->orderBy('id', 'ASC')->paginate(10);

                break;
            }
        }
        //conversion du type originel de listcontacts -> le type JSON
        return $this->response->setJSON($listecontacts);
    }
    
    //fonction de modification et d'ajout
    public function edit(){




    }

    //fonction de suppression simple et multiple     
    public function delete(){

            //.1 je recupere l'id du contacte a supprimer
            $id=$this->request->getVar('id');
            $etatAction=['response'=>false];
            //.2 si il existe je passe au 3
            if(!empty($id)){

                //.3 je fait ma requete pour supprimer le contacte
                $this->contactModel->where('id',$id)->delete();

                //.4 je vérifie que la suppression a bien été faite

                
                $etatAction=['response'=>true];
                
            }
           
         return $this->response->setJSON($etatAction);
        
    }

    //fonction de mise en favoris des contacts
    // utilise l'id à ajouter en paramètre
    public function fav(){

            //1.je recupere l'id du contacte a ajouter ou a supprimer des favoris
        $id=$this->request->getVar('id');

            //2.je vérifie l'existence de ce contacte et si il existe je passe au 3
            if(!empty($id)){

            //3.j'interroge la base de donnée pour savoir si il est deja favoris ou non grace a une requête
            $contact=$this->contactModel->where('id',$id)->first();
            
            
            //4.si il est favoris je le retire sinon je l'ajoute
            if(!empty($contact)){
                
                //DEBUT test favoris (YES)
                if($contact['favory'] == 'Yes'){
                    $this->contactModel->where('id',$id)->set('favory','No')->update();
                    $etatFav=['response'=>false];
                  
                //END test favoris (NO) 
                }else{
                    $this->contactModel->where('id',$id)->set('favory','Yes')->update();
                    $etatFav=['response'=>true]; 
                }   
                 
            }

            //5.je vérifie que ma requete a bien été faite
               
        }
             return $this->response->setJSON($etatFav);

    }
}