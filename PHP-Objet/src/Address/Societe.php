<?php

namespace MinEduc\Address;

class Societe
{
    protected $nom;

    /** @var Personne[]  */
    protected $employes = [];

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return Personne[]
     */
    public function getEmployes()
    {
        return $this->employes;
    }

    public function addEmploye(Personne $personne)
    {
        $this->employes[] = $personne;
    }
}