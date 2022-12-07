<?php

namespace MinEduc\Address;

class Personne {
    protected string $prenom;
    protected string $nom;
    protected Societe $societe;

    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): Personne
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): Personne
    {
        $this->nom = $nom;
        return $this;
    }

    public function getSociete(): Societe
    {
        return $this->societe;
    }

    public function setSociete(Societe $societe): Personne
    {
        $this->societe = $societe;
        return $this;
    }

}


