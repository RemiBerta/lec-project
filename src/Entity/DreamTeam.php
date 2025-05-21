<?php

namespace App\Entity;

use App\Repository\DreamTeamRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DreamTeamRepository::class)]
class DreamTeam
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\ManyToOne]
    private ?Player $top = null;

    #[ORM\ManyToOne]
    private ?Player $jungle = null;

    #[ORM\ManyToOne]
    private ?Player $mid = null;

    #[ORM\ManyToOne]
    private ?Player $adc = null;

    #[ORM\ManyToOne]
    private ?Player $support = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getTop(): ?Player
    {
        return $this->top;
    }

    public function setTop(?Player $top): static
    {
        $this->top = $top;

        return $this;
    }

    public function getJungle(): ?Player
    {
        return $this->jungle;
    }

    public function setJungle(?Player $jungle): static
    {
        $this->jungle = $jungle;

        return $this;
    }

    public function getMid(): ?Player
    {
        return $this->mid;
    }

    public function setMid(?Player $mid): static
    {
        $this->mid = $mid;

        return $this;
    }

    public function getAdc(): ?Player
    {
        return $this->adc;
    }

    public function setAdc(?Player $adc): static
    {
        $this->adc = $adc;

        return $this;
    }

    public function getSupport(): ?Player
    {
        return $this->support;
    }

    public function setSupport(?Player $support): static
    {
        $this->support = $support;

        return $this;
    }
}
