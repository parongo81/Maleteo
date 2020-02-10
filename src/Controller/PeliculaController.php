<?php

namespace App\Controller;

use App\Entity\Pelicula;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PeliculaController extends AbstractController
{
    /**
     * @Route("/pelicula", name="homepage")
     */
    public function index()
    {
        return $this->render('pelicula/index.html.twig', [
            'controller_name' => 'PeliculaController',
        ]);
    }

    /**
     * @Route("/pelicula/new", name="nueva-pelicula")
     */
    public function nuevaPelicula(EntityManagerInterface $em)
    {

        $pelicula = new Pelicula();
        $pelicula->setTitulo('Terminator');
        $pelicula->setDescripcion('Lorem ipsum dolor sit amet, consectetur adipisicing do eiusmotempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam');
        $em->persist($pelicula);
        $em->flush();
        
        return $this->render('pelicula/index.html.twig', [
            'controller_name' => 'PeliculaController',
        ]);
    }
}
