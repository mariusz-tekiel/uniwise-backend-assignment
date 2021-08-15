<?php
namespace App\Repository;

use App\Entity\Car;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ContentManagement|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContentManagement|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContentManagement[]    findAll()
 * @method ContentManagement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CarRepository extends ServiceEntityRepository {

    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, Car::class);
    }

    /**
     * @return array|Car[]
     */
    public function getAll() {
        return $this->findAll();
    }
}











