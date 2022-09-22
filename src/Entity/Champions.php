<?php

namespace App\Entity;

use App\Repository\ChampionsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ChampionsRepository::class)]
class Champions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Nom = null;

    #[ORM\Column(length: 255)]
    private ?string $Race = null;

    #[ORM\Column(length: 255)]
    private ?string $Origine = null;

    #[ORM\Column(length: 255)]
    private ?string $Taille = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Date = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Modification = null;

    #[ORM\Column(length: 100000000)]
    private ?string $Histoire = null;

    #[ORM\Column(length: 255)]
    private ?string $Classe = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getRace(): ?string
    {
        return $this->Race;
    }

    public function setRace(string $Race): self
    {
        $this->Race = $Race;

        return $this;
    }

    public function getOrigine(): ?string
    {
        return $this->Origine;
    }

    public function setOrigine(string $Origine): self
    {
        $this->Origine = $Origine;

        return $this;
    }

    public function getTaille(): ?string
    {
        return $this->Taille;
    }

    public function setTaille(string $Taille): self
    {
        $this->Taille = $Taille;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->Date;
    }

    public function setDate(\DateTimeInterface $Date): self
    {
        $this->Date = $Date;

        return $this;
    }

    public function getModification(): ?\DateTimeInterface
    {
        return $this->Modification;
    }

    public function setModification(\DateTimeInterface $Modification): self
    {
        $this->Modification = $Modification;

        return $this;
    }

    public function getHistoire(): ?string
    {
        return $this->Histoire;
    }

    public function setHistoire(string $Histoire): self
    {
        $this->Histoire = $Histoire;

        return $this;
    }

    public function getClasse(): ?string
    {
        return $this->Classe;
    }

    public function setClasse(string $Classe): self
    {
        $this->Classe = $Classe;

        return $this;
    }
}
