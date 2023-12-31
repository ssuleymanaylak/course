<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $number = null;

    #[ORM\Column(length: 255)]
    private ?string $surname_pattern = null;

    #[ORM\Column(length: 255)]
    private ?string $mother_surname = null;

    #[ORM\Column(nullable: true)]
    private ?int $age = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(string $number): static
    {
        $this->number = $number;

        return $this;
    }

    public function getSurnamePattern(): ?string
    {
        return $this->surname_pattern;
    }

    public function setSurnamePattern(string $surname_pattern): static
    {
        $this->surname_pattern = $surname_pattern;

        return $this;
    }

    public function getMotherSurname(): ?string
    {
        return $this->mother_surname;
    }

    public function setMotherSurname(string $mother_surname): static
    {
        $this->mother_surname = $mother_surname;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): static
    {
        $this->age = $age;

        return $this;
    }
}
