<?php

namespace App\Entity;

use App\Repository\AirportFrequencyRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AirportFrequencyRepository::class)]
class AirportFrequency
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?int $airport_frequency_id = null;

    #[ORM\Column(type: Types::BIGINT, nullable: true)]
    private ?string $airport_ref = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $airport_ident = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $type = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $frequency_mhz = null;

    #[ORM\ManyToOne(inversedBy: 'airportFrequencies')]
    #[ORM\JoinColumn(name: 'airport_ref', referencedColumnName: 'airport_id')]
    private ?Airport $airport = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAirportFrequencyId(): ?int
    {
        return $this->airport_frequency_id;
    }

    public function setAirportFrequencyId(?int $airport_frequency_id): static
    {
        $this->airport_frequency_id = $airport_frequency_id;

        return $this;
    }

    public function getAirportRef(): ?string
    {
        return $this->airport_ref;
    }

    public function setAirportRef(?string $airport_ref): static
    {
        $this->airport_ref = $airport_ref;

        return $this;
    }

    public function getAirportIdent(): ?string
    {
        return $this->airport_ident;
    }

    public function setAirportIdent(?string $airport_ident): static
    {
        $this->airport_ident = $airport_ident;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getFrequencyMhz(): ?string
    {
        return $this->frequency_mhz;
    }

    public function setFrequencyMhz(?string $frequency_mhz): static
    {
        $this->frequency_mhz = $frequency_mhz;

        return $this;
    }

    public function getAirport(): ?Airport
    {
        return $this->airport;
    }

    public function setAirport(?Airport $airport): static
    {
        $this->airport = $airport;

        return $this;
    }
}
