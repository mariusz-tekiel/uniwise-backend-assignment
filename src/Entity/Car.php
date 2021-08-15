<?php
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="CarRepository::class")
 * @ORM\Table(name="app_car")
 */
class Car {

    /**
     * @var int|null
     * 
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string|null
     * @ORM\Column(type="string", length=40)
     */
    private $brand;
    
    /**
     * @var string|null
     * @ORM\Column(type="string", length=40)     * 
     */
    private $model;

    /**
     * @var string|null
     * @ORM\Column(type="string", length=40)     * 
     */
    private $color;
    
    /**
     * @var string|null
     * @ORM\Column(type="string", length=40)     * 
     */
    private $gasEconomy;


    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * @param string|null $brand
     */
    public function setBrand(?string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @return string|null
     */
    public function getModel(): ?string
    {
        return $this->model;
    }

    /**
     * @param string|null $model
     */
    public function setModel(?string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return string|null
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * @param string|null $color
     */
    public function setColor(?string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return string|null
     */
    public function getGasEconomy(): ?string
    {
        return $this->gasEconomy;
    }

    /**
     * @param string|null $gasEconomy
     */
    public function setGasEconomy(?string $gasEconomy): void
    {
        $this->gasEconomy = $gasEconomy;
    }
    
}
