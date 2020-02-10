<?php

namespace App\Controller;

//use App\Entity\Comentarios;

//use App\Entity\Pelicula;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\MaleteoFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;


    
  class MaleteoController extends AbstractController{

    /**
     * @Route("/maleteo", name="homepage2")
     */

  public function maleteo(EntityManagerInterface $em, Request $request) {
      $DemoForm = $this->createForm(MaleteoFormType::class);
      $DemoForm->handleRequest($request);

      if($DemoForm->isSubmitted() && $DemoForm->isValid())
      {
        $formulario = $DemoForm->getData();
        $em->persist($formulario);
        $em->flush();

        return $this->render('maleteo/index.html.twig',
        [
            'DemoForm' => $DemoForm->createView(),
            'mensaje' => 'Gracias nos pondremos en conracto con usted'

            //'opiniones' => $opiniones
        ]);
 
 
      }
 
 
      //$opiniones = $em->getRepository(Comentarios::class)->findByLikes(3);
      //$peliculas = $em->getRepository(Pelicula::class)->findAll();


      return $this->render('maleteo/index.html.twig',
      [
          'DemoForm' => $DemoForm->createView()
          //'opiniones' => $opiniones
      ]);
  }
}