# ProjetContact API

## By Ponceau Nelwick

## 12/03/2021

## v.0.1.0

### Qu'est ce que c'est ?

1ère idée{
    -.C'est une API qui permet notemment de  creer des contactes et les ajouter a la liste de contacte, 
de plus il permet de modifier les information d'un contacte mais aussi d'en supprimer.
une fonction de mise en favoris y est incorporé
}2ème idée{
    -.C'est une API qui permet notemment de lister, creer, modifier et supprimer des contact,
elle est aussi doté d'une fonction de mise en favoris 
}

### De quoi a t-il besoin pour fontionner

-. elle a été codé en utilisant PHP 7.3 et codeigniter 4 ainsi que wampserver 3.2.3 pour gerer la base de donnée(phpmyhadmin,Maria DB)

### sont fonctionnement 

-.elle envoie les information par method post en type json.

-.Lors d'une demande d'ajout ou de modification s'il y a une erreur dans les informations saisies une erreur est alors envoyer pour informer a l'utilisateur que qu'elle type d'erreur a été commis et a quel niveau du formulaire cela permet de se retrouver et de pouvoir réparer cette erreur.

-.L'API se sert des information dans le ContactModel pour effectuer les requêtes et se charge ensuite de les envoyer dans la base de donnée 

-.grace au tableau rules dans les fonctions create et edit les utilisateurs doivent impérativement noter les information nécessaire a la fonction associé. 


This API is a data managing tool for a contact list created by Ponceau Nelwick








