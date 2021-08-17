<?php 

namespace App\Controller;

use App\Entity\Car;
use App\Form\Type\CarType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CarController extends AbstractController
{
    public function indexAction(Request $request): Response
    {
        $car = $this->getDoctrine()->getRepository(Car::class)->findAll();

        return $this->json($cars);
    }

    public function createAction(Request $request): Response
    {
        
        return $this->json('data');
    }
}
