<?php
namespace App\Controller;


use App\Emoji\EmojiTranslator;
use App\Form\ArticuloFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

  class MainController extends AbstractController
  {
    /**
     * @Route("/", name="homepage")
     */
    public function homepage(EmojiTranslator $emojiTranslator)
    {

      $texto = "Esto es un texto de mierda con caca";
      $textoConvertido = $emojiTranslator->convert($texto);
      return new Response($textoConvertido);
    }


    /**
     * @Route("/articulo/new", name="nuevo-articulo")
     */
    public function nuevoArticulo(Request $request)
    {
      $articuloForm = $this->createForm(ArticuloFormType::class);
      $articuloForm ->handleRequest($request);

      if($articuloForm-> isSubmitted() && $articuloForm->isValid())
      {
        //gestiono los datos del formulario
        //dd($articuloForm->getData());
        return $this->redirectToRoute("homepage");
      }
      return $this->render(
        'articulo/nuevo-articulo.html.twig',
        [
          'formulario'=> $articuloForm->createView()
          
        ]
      );
    }

    /**
     * @Route("/Articulos, name"listado-articulos")
     */
    //  public function(listado-articulos){
       
    //  }



  }