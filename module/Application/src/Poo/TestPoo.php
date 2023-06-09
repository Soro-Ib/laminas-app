<?php
namespace Application\Poo;
class TestPoo{
    protected $nom;
    protected $prenoms;

    public function __construct($nom, $prenoms){
        $this->nom = $nom;
        $this->prenoms = $prenoms;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getPrenoms(){
        return $this->prenoms;
    }

    public function setNomOrPrenoms($newNom = null, $newPrenoms = null){
        $nom = ($newNom === null) ? $this->nom : $newNom;
        $prenoms = ($newPrenoms === null) ? $this->prenoms : $newNom;
        return array('nom' => $nom, 'prenoms'=>$prenoms);
    }
}
