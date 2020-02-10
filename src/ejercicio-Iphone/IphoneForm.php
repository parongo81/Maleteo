<?php
namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

 class IphoneForm extends AbstractType
 {
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder-> add('nombre');
    $builder-> add('descripcion');
    
  }


 }