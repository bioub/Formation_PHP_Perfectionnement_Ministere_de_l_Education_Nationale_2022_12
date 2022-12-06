<?php

class Personne {
    protected $prenom;
    protected $nom;

    /** @var Societe */
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

    /**
     * @return Societe
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * @param Societe $societe
     */
    public function setSociete(Societe $societe)
    {
        $this->societe = $societe;
    }



}
