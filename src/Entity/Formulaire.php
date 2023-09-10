<?php

namespace App\Entity;

use App\Repository\FormulaireRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FormulaireRepository::class)]
class Formulaire
{
    
        #[ORM\Id]
        #[ORM\GeneratedValue]
        #[ORM\Column]
        private ?int $id = null;
    
        #[ORM\Column(length: 255)]
        private ?string $nom = null;
    
        #[ORM\Column]
        
        private ?int $gsm = null;
    
        #[ORM\Column]
        private ?int $cin = null;
    
        #[ORM\Column(length: 255)]
        private ?string $agence = null;
    
        #[ORM\Column]
        private ?int $compte = null;
    
        #[ORM\Column]
        private ?int $prem_chiffres = null;
    
        #[ORM\Column]
        private ?int $derniers_chiffres = null;
    
        #[ORM\Column(length: 255)]
        private ?string $mail = null;
    
        public function getId(): ?int
        {
            return $this->id;
        }
    
        public function getNom(): ?string
        {
            return $this->nom;
        }
    
        public function setNom(string $nom): static
        {
            $this->nom = $nom;
    
            return $this;
        }
    
        public function getGsm(): ?int
        {
            return $this->gsm;
        }
    
        public function setGsm(int $gsm): static
        {
            $this->gsm = $gsm;
    
            return $this;
        }
    
        public function getCin(): ?int
        {
            return $this->cin;
        }
    
        public function setCin(int $cin): static
        {
            $this->cin = $cin;
    
            return $this;
        }
    
        public function getAgence(): ?string
        {
            return $this->agence;
        }
    
        public function setAgence(string $agence): static
        {
            $this->agence = $agence;
    
            return $this;
        }
    
        public function getCompte(): ?int
        {
            return $this->compte;
        }
    
        public function setCompte(int $compte): static
        {
            $this->compte = $compte;
    
            return $this;
        }
    
        public function getPremChiffres(): ?int
        {
            return $this->prem_chiffres;
        }
    
        public function setPremChiffres(int $prem_chiffres): static
        {
            $this->prem_chiffres = $prem_chiffres;
    
            return $this;
        }
        public function getPrem_Chiffres(): ?int
        {
            return $this->prem_chiffres;
        }
    
        public function setPrem_Chiffres(int $prem_chiffres): static
        {
            $this->prem_chiffres = $prem_chiffres;
    
            return $this;
        }

    
        public function getDerniersChiffres(): ?int
        {
            return $this->derniers_chiffres;
        }
    
        public function setDerniersChiffres(int $derniers_chiffres): static
        {
            $this->derniers_chiffres = $derniers_chiffres;
    
            return $this;
        }
        public function getDerniers_Chiffres(): ?int
        {
            return $this->derniers_chiffres;
        }
    
        public function setDerniers_Chiffres(int $derniers_chiffres): static
        {
            $this->derniers_chiffres = $derniers_chiffres;
    
            return $this;
        }
    
        public function getMail(): ?string
        {
            return $this->mail;
        }
    
        public function setMail(string $mail): static
        {
            $this->mail = $mail;
    
            return $this;
        }
}
