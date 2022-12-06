<?php

class Personne {
    protected $prenom;
    protected $nom;
    protected $societe;

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }


    public function getSociete()
    {
        return $this->societe;
    }

    public function setSociete($societe)
    {
        $this->societe = $societe;
    }


}
