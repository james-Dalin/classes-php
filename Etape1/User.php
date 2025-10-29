<?php


// class Etudiant // Une classe c'est comme un plan de maison. C'est sur ce plan que je vais construire toute la maison, donc toutes les fonctions.
// {
//     // Les PROPRIETES (terme qui veut tout simplement dire variable en POO)
//     public $nom;
//     public $age;

//     // Les METHODES (terme qui veut tout simplement dire fonction en POO) ici, sans le constructeur (__construct)
//     public function sePresenter() {
//         return "Je m'appelle " . $this->nom . " et j'ai " . $this->age . "ans.";
//     }
// }

// // Le "$this" fait référence à l'objet actuel (à la variable en somme...)
// //  la flèche "->" est fait pour accéder aux propriétés/méthodes d'un objet 

// // Les OBJETS (les instances créées)
// $etudiant1 = new Etudiant();
// $etudiant1->nom = "Jean";
// $etudiant1->age = 22;

// $etudiant2 = new Etudiant();
// $etudiant2->nom = "Alice";
// $etudiant2->age = 24;

// echo $etudiant1->sePresenter() . "<br>";
// echo $etudiant2->sePresenter();

class Etudiant {

    public $nom;
    public $age;
    public $sexe;

    public function __construct($nom, $age, $sexe) {
        $this->nom = $nom;
        $this->age = $age;
        $this->sexe = $sexe;
    }

    public function sePresenter() {
        echo "Salut, je m'appelle {$this->nom} et j'ai {$this->age} ans, et je suis une {$this->sexe}."; 
    }
}

$etudiant1 = new Etudiant("Alice", 26, "femme");
echo $etudiant1->sePresenter();