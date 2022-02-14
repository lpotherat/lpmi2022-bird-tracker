<?php

namespace App\Entity;

use App\Repository\ObservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ObservationRepository::class)
 */
class Observation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $observerLocation;

    /**
     * @ORM\Column(type="integer")
     */
    private $distanceFromTheObserver;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $orientationOfTheObserver;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $landType;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $birdActivity;

    /**
     * @ORM\ManyToOne(targetEntity=Breed::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $breed;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObserverLocation(): ?string
    {
        return $this->observerLocation;
    }

    public function setObserverLocation(string $observerLocation): self
    {
        $this->observerLocation = $observerLocation;

        return $this;
    }

    public function getDistanceFromTheObserver(): ?int
    {
        return $this->distanceFromTheObserver;
    }

    public function setDistanceFromTheObserver(int $distanceFromTheObserver): self
    {
        $this->distanceFromTheObserver = $distanceFromTheObserver;

        return $this;
    }

    public function getOrientationOfTheObserver(): ?string
    {
        return $this->orientationOfTheObserver;
    }

    public function setOrientationOfTheObserver(?string $orientationOfTheObserver): self
    {
        $this->orientationOfTheObserver = $orientationOfTheObserver;

        return $this;
    }

    public function getLandType(): ?string
    {
        return $this->landType;
    }

    public function setLandType(?string $landType): self
    {
        $this->landType = $landType;

        return $this;
    }

    public function getBirdActivity(): ?string
    {
        return $this->birdActivity;
    }

    public function setBirdActivity(string $birdActivity): self
    {
        $this->birdActivity = $birdActivity;

        return $this;
    }

    public function getBreed(): ?Breed
    {
        return $this->breed;
    }

    public function setBreed(?Breed $breed): self
    {
        $this->breed = $breed;

        return $this;
    }
}
