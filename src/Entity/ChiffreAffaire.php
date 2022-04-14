<?php

namespace App\Entity;

use App\Repository\ChiffreAffaireRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChiffreAffaireRepository::class)
 */
class ChiffreAffaire
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $valeur;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dernierAjouts;

    /**
     * @ORM\Column(type="decimal", nullable=true)
     */
    private $pourcentPetite;

    /**
     * @ORM\Column(type="decimal", nullable=true)
     */
    private $pourcentMoyenne;

    /**
     * @ORM\Column(type="decimal", nullable=true)
     */
    private $pourcentGrosse;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $grosse;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $moyenne;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $petite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValeur(): ?int
    {
        return $this->valeur;
    }

    public function setValeur(?int $valeur): self
    {
        $this->valeur = $valeur;

        return $this;
    }

    public function getDernierAjouts(): ?\DateTimeInterface
    {
        return $this->dernierAjouts;
    }

    public function setDernierAjouts(?\DateTimeInterface $dernierAjouts): self
    {
        $this->dernierAjouts = $dernierAjouts;

        return $this;
    }

    public function getPourcentPetite(): ?float
    {
        return $this->pourcentPetite;
    }

    public function setPourcentPetite(?float $pourcentPetite): self
    {
        $this->pourcentPetite = $pourcentPetite;

        return $this;
    }

    public function getPourcentMoyenne(): ?float
    {
        return $this->pourcentMoyenne;
    }

    public function setPourcentMoyenne(?float $pourcentMoyenne): self
    {
        $this->pourcentMoyenne = $pourcentMoyenne;

        return $this;
    }

    public function getPourcentGrosse(): ?float
    {
        return $this->pourcentGrosse;
    }

    public function setPourcentGrosse(?float $pourcentGrosse): self
    {
        $this->pourcentGrosse = $pourcentGrosse;

        return $this;
    }

    public function getGrosse(): ?int
    {
        return $this->grosse;
    }

    public function setGrosse(?int $grosse): self
    {
        $this->grosse = $grosse;

        return $this;
    }

    public function getMoyenne(): ?int
    {
        return $this->moyenne;
    }

    public function setMoyenne(?int $moyenne): self
    {
        $this->moyenne = $moyenne;

        return $this;
    }

    public function getPetite(): ?int
    {
        return $this->petite;
    }

    public function setPetite(?int $petite): self
    {
        $this->petite = $petite;

        return $this;
    }
}
