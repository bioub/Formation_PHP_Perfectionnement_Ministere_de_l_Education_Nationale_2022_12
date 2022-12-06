<?php

namespace MinEduc\Banque;

use Exception;
use MinEduc\Address\Personne;

class CompteBancaire
{
    protected $type;
    protected $solde = 0;

    /** @var Personne */
    protected $proprietaire;

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        // if ($type !== CompteBancaireType::COURANT && $type !== CompteBancaireType::PEL && $type !== CompteBancaireType::LIVRET_A) {
        if (!in_array($type, [CompteBancaireType::COURANT, CompteBancaireType::PEL, CompteBancaireType::LIVRET_A])) {
            throw new Exception('type not allowed');
        }

        $this->type = $type;
    }

    /**
     * @return Personne
     */
    public function getProprietaire()
    {
        return $this->proprietaire;
    }

    /**
     * @param Personne $proprietaire
     */
    public function setProprietaire(Personne $proprietaire)
    {
        $this->proprietaire = $proprietaire;
    }



    public function getSolde()
    {
        return $this->solde;
    }

    public function crediter($montant)
    {
        if ($montant < 0) {
            throw new Exception('montant doit être positif');
        }
        $this->solde += $montant;
    }

    public function debiter($montant)
    {
        if ($montant < 0) {
            // le mot clé throw, un peu comme return provoque une sortie de la fonction
            // on utilise throw pour les cas d'erreur
            throw new Exception('montant doit être positif');
        }
        if ($this->solde - $montant < 0) {
            throw new Exception('le solde doit rester positif');
        }
        $this->solde -= $montant;
    }
}
