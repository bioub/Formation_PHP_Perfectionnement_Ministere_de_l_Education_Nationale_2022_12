<?php

namespace MinEduc\Banque;

use Exception;
use MinEduc\Address\Personne;
use MinEduc\Banque\Exception\DecouvertException;
use MinEduc\Banque\Exception\MontantException;

class CompteBancaire
{
    protected ?CompteBancaireType $type;
    protected float $solde = 0;
    protected ?Personne $proprietaire;

    public function getType(): ?CompteBancaireType
    {
        return $this->type;
    }

    public function setType(CompteBancaireType $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getSolde(): float
    {
        return $this->solde;
    }

    public function getProprietaire(): ?Personne
    {
        return $this->proprietaire;
    }

    public function setProprietaire(?Personne $proprietaire): self
    {
        $this->proprietaire = $proprietaire;
        return $this;
    }

    public function crediter(float $montant): self
    {
        if ($montant < 0) {
            throw new MontantException('montant doit être positif');
        }
        $this->solde += $montant;
        return $this;
    }

    public function debiter(float $montant): self
    {
        if ($montant < 0) {
            // le mot clé throw, un peu comme return provoque une sortie de la fonction
            // on utilise throw pour les cas d'erreur
            throw new MontantException('montant doit être positif');
        }
        if ($this->solde - $montant < 0) {
            throw new DecouvertException('le solde doit rester positif');
        }
        $this->solde -= $montant;
        return $this;
    }
}
