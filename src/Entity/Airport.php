<?php

namespace App\Entity;

use App\Repository\AirportRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AirportRepository::class)]
class Airport
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::BIGINT, nullable: true, unique: true)]
    private ?string $airport_id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ident = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $type = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $latitude_deg = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $longitude_deg = null;

    #[ORM\Column(nullable: true)]
    private ?int $elevation_ft = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $continent = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $iso_country = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $iso_region = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $municipality = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $scheduled_service = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $gps_code = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $iata_code = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $local_code = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $home_link = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $wikipedia_link = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $keywords = null;

    #[ORM\OneToMany(mappedBy: 'airport', targetEntity: Runway::class)]
    private Collection $runways;

    #[ORM\OneToMany(mappedBy: 'airport', targetEntity: AirportFrequency::class)]
    private Collection $airportFrequencies;

    public function __construct()
    {
        $this->runways = new ArrayCollection();
        $this->airportFrequencies = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdent(): ?string
    {
        return $this->ident;
    }

    public function setIdent(?string $ident): static
    {
        $this->ident = $ident;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getLatitudeDeg(): ?string
    {
        return $this->latitude_deg;
    }

    public function setLatitudeDeg(?string $latitude_deg): static
    {
        $this->latitude_deg = $latitude_deg;

        return $this;
    }

    public function getLongitudeDeg(): ?string
    {
        return $this->longitude_deg;
    }

    public function setLongitudeDeg(?string $longitude_deg): static
    {
        $this->longitude_deg = $longitude_deg;

        return $this;
    }

    public function getElevationFt(): ?int
    {
        return $this->elevation_ft;
    }

    public function setElevationFt(?int $elevation_ft): static
    {
        $this->elevation_ft = $elevation_ft;

        return $this;
    }

    public function getContinent(): ?string
    {
        return $this->continent;
    }

    public function setContinent(?string $continent): static
    {
        $this->continent = $continent;

        return $this;
    }

    public function getIsoCountry(): ?string
    {
        return $this->iso_country;
    }

    public function setIsoCountry(?string $iso_country): static
    {
        $this->iso_country = $iso_country;

        return $this;
    }

    public function getIsoRegion(): ?string
    {
        return $this->iso_region;
    }

    public function setIsoRegion(?string $iso_region): static
    {
        $this->iso_region = $iso_region;

        return $this;
    }

    public function getMunicipality(): ?string
    {
        return $this->municipality;
    }

    public function setMunicipality(?string $municipality): static
    {
        $this->municipality = $municipality;

        return $this;
    }

    public function getScheduledService(): ?string
    {
        return $this->scheduled_service;
    }

    public function setScheduledService(?string $scheduled_service): static
    {
        $this->scheduled_service = $scheduled_service;

        return $this;
    }

    public function getGpsCode(): ?string
    {
        return $this->gps_code;
    }

    public function setGpsCode(?string $gps_code): static
    {
        $this->gps_code = $gps_code;

        return $this;
    }

    public function getIataCode(): ?string
    {
        return $this->iata_code;
    }

    public function setIataCode(?string $iata_code): static
    {
        $this->iata_code = $iata_code;

        return $this;
    }

    public function getLocalCode(): ?string
    {
        return $this->local_code;
    }

    public function setLocalCode(?string $local_code): static
    {
        $this->local_code = $local_code;

        return $this;
    }

    public function getHomeLink(): ?string
    {
        return $this->home_link;
    }

    public function setHomeLink(?string $home_link): static
    {
        $this->home_link = $home_link;

        return $this;
    }

    public function getWikipediaLink(): ?string
    {
        return $this->wikipedia_link;
    }

    public function setWikipediaLink(?string $wikipedia_link): static
    {
        $this->wikipedia_link = $wikipedia_link;

        return $this;
    }

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(?string $keywords): static
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * @return Collection<int, Runway>
     */
    public function getRunways(): Collection
    {
        return $this->runways;
    }

    public function addRunway(Runway $runway): static
    {
        if (!$this->runways->contains($runway)) {
            $this->runways->add($runway);
            $runway->setAirport($this);
        }

        return $this;
    }

    public function removeRunway(Runway $runway): static
    {
        if ($this->runways->removeElement($runway)) {
            // set the owning side to null (unless already changed)
            if ($runway->getAirport() === $this) {
                $runway->setAirport(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, AirportFrequency>
     */
    public function getAirportFrequencies(): Collection
    {
        return $this->airportFrequencies;
    }

    public function addAirportFrequency(AirportFrequency $airportFrequency): static
    {
        if (!$this->airportFrequencies->contains($airportFrequency)) {
            $this->airportFrequencies->add($airportFrequency);
            $airportFrequency->setAirport($this);
        }

        return $this;
    }

    public function removeAirportFrequency(AirportFrequency $airportFrequency): static
    {
        if ($this->airportFrequencies->removeElement($airportFrequency)) {
            // set the owning side to null (unless already changed)
            if ($airportFrequency->getAirport() === $this) {
                $airportFrequency->setAirport(null);
            }
        }

        return $this;
    }

    public function getAirportId(): ?string
    {
        return $this->airport_id;
    }

    public function setAirportId(?string $airport_id): static
    {
        $this->airport_id = $airport_id;

        return $this;
    }
}
