<?php

namespace App\Entity;

use App\Repository\RunwayRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RunwayRepository::class)]
class Runway
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::BIGINT, nullable: true)]
    private ?string $airport_ref = null;

    #[ORM\Column(nullable: true)]
    private ?int $runway_id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $airport_ident = null;

    #[ORM\Column(nullable: true)]
    private ?int $length_ft = null;

    #[ORM\Column(nullable: true)]
    private ?int $width_ft = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $surface = null;

    #[ORM\Column(nullable: true)]
    private ?bool $lighted = null;

    #[ORM\Column(nullable: true)]
    private ?bool $closed = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $le_ident = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $le_latitude_deg = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $le_longitude_deg = null;

    #[ORM\Column(nullable: true)]
    private ?int $le_elevation_ft = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $le_heading_degT = null;

    #[ORM\Column(nullable: true)]
    private ?int $le_displaced_threshold_ft = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $he_ident = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $he_latitude_deg = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $he_longitude_deg = null;

    #[ORM\Column(nullable: true)]
    private ?int $he_elevation_ft = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $he_heading_degT = null;

    #[ORM\Column(nullable: true)]
    private ?int $he_displaced_threshold_ft = null;

    #[ORM\ManyToOne(inversedBy: 'runways')]
    #[ORM\JoinColumn(name: 'airport_ref', referencedColumnName: 'airport_id')]
    private ?Airport $airport = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRunwayId(): ?int
    {
        return $this->runway_id;
    }

    public function setRunwayId(?int $runway_id): static
    {
        $this->runway_id = $runway_id;

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

    public function getLengthFt(): ?int
    {
        return $this->length_ft;
    }

    public function getLengthFtInMeters(): ?float
    {
        return $this->length_ft * .3048;
    }

    public function setLengthFt(?int $length_ft): static
    {
        $this->length_ft = $length_ft;

        return $this;
    }

    public function getWidthFt(): ?int
    {
        return $this->width_ft;
    }

    public function setWidthFt(?int $width_ft): static
    {
        $this->width_ft = $width_ft;

        return $this;
    }

    public function getSurface(): ?string
    {
        return $this->surface;
    }

    public function setSurface(?string $surface): static
    {
        $this->surface = $surface;

        return $this;
    }

    public function isLighted(): ?bool
    {
        return $this->lighted;
    }

    public function setLighted(?bool $lighted): static
    {
        $this->lighted = $lighted;

        return $this;
    }

    public function isClosed(): ?bool
    {
        return $this->closed;
    }

    public function setClosed(?bool $closed): static
    {
        $this->closed = $closed;

        return $this;
    }

    public function getLeIdent(): ?string
    {
        return $this->le_ident;
    }

    public function setLeIdent(?string $le_ident): static
    {
        $this->le_ident = $le_ident;

        return $this;
    }

    public function getLeLatitudeDeg(): ?string
    {
        return $this->le_latitude_deg;
    }

    public function setLeLatitudeDeg(?string $le_latitude_deg): static
    {
        $this->le_latitude_deg = $le_latitude_deg;

        return $this;
    }

    public function getLeLongitudeDeg(): ?string
    {
        return $this->le_longitude_deg;
    }

    public function setLeLongitudeDeg(?string $le_longitude_deg): static
    {
        $this->le_longitude_deg = $le_longitude_deg;

        return $this;
    }

    public function getLeElevationFt(): ?int
    {
        return $this->le_elevation_ft;
    }

    public function setLeElevationFt(?int $le_elevation_ft): static
    {
        $this->le_elevation_ft = $le_elevation_ft;

        return $this;
    }

    public function getLeHeadingDegT(): ?string
    {
        return $this->le_heading_degT;
    }

    public function setLeHeadingDegT(?string $le_heading_degT): static
    {
        $this->le_heading_degT = $le_heading_degT;

        return $this;
    }

    public function getLeDisplacedThresholdFt(): ?int
    {
        return $this->le_displaced_threshold_ft;
    }

    public function setLeDisplacedThresholdFt(?int $le_displaced_threshold_ft): static
    {
        $this->le_displaced_threshold_ft = $le_displaced_threshold_ft;

        return $this;
    }

    public function getHeIdent(): ?string
    {
        return $this->he_ident;
    }

    public function setHeIdent(?string $he_ident): static
    {
        $this->he_ident = $he_ident;

        return $this;
    }

    public function getHeLatitudeDeg(): ?string
    {
        return $this->he_latitude_deg;
    }

    public function setHeLatitudeDeg(?string $he_latitude_deg): static
    {
        $this->he_latitude_deg = $he_latitude_deg;

        return $this;
    }

    public function getHeLongitudeDeg(): ?string
    {
        return $this->he_longitude_deg;
    }

    public function setHeLongitudeDeg(?string $he_longitude_deg): static
    {
        $this->he_longitude_deg = $he_longitude_deg;

        return $this;
    }

    public function getHeElevationFt(): ?int
    {
        return $this->he_elevation_ft;
    }

    public function setHeElevationFt(?int $he_elevation_ft): static
    {
        $this->he_elevation_ft = $he_elevation_ft;

        return $this;
    }

    public function getHeHeadingDegT(): ?string
    {
        return $this->he_heading_degT;
    }

    public function setHeHeadingDegT(?string $he_heading_degT): static
    {
        $this->he_heading_degT = $he_heading_degT;

        return $this;
    }

    public function getHeDisplacedThresholdFt(): ?int
    {
        return $this->he_displaced_threshold_ft;
    }

    public function setHeDisplacedThresholdFt(?int $he_displaced_threshold_ft): static
    {
        $this->he_displaced_threshold_ft = $he_displaced_threshold_ft;

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
