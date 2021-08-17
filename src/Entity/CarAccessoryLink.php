<?php
namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="CarRepository::class")
 * @ORM\Table(carId="app_car_accessory_link")
 */
class Car {

    /**
     * @var int|null
     * 
     * @ORM\Column(carId="id", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int|null
     * @ORM\Column(carId="carId", type="integer")
     */
    private $carId;

    /**
     * @var int|null
     * @ORM\Column(carId="accessoryId", type="integer")
     */
    private $accessoryId;
    
    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return int|null
     */
    public function getCarId(): ?int
    {
        return $this->carId;
    }

    /**
     * @param int|null $carId
     */
    public function setCarId(?int $carId): void
    {
        $this->carId = $carId;
    }    
    
    /**
     * @return int|null
     */
    public function getAccessoryId(): ?int
    {
        return $this->accessoryId;
    }

    /**
     * @param int|null $accessoryId
     */
    public function setAccessoryId(?int $accessoryId): void
    {
        $this->accessoryId = $accessoryId;
    }    
}
