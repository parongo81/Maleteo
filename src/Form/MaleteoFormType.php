<?php
namespace App\Form;

use App\Entity\Formulario;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;

class MaleteoFormType extends AbstractType{
    public function buildForm(FormBuilderInterface $builder, array $options){
        //definimos los campos del formulario
        $builder->add('nombre', TextType::class, [
            'attr'=>[
                'class'=>'input'
            ]
        ]);
        $builder->add('email', EmailType::class,  [
            'attr'=>[
                'class'=>'input'
            ]
        ]);
        $builder->add('horario', TextType::class, [
            'attr'=>[
                'class'=>'input'
            ]
        ]);
        $builder->add('ciudad', ChoiceType::class,
    [
            'choices' => [
                'Madrid' => 'Madrid',
                'Barcelona' => 'Barcelona',
                'Sevilla' => 'Sevilla',
                'Cadiz' => 'Cadiz', 
                'Oviedo' => 'Oviedo', 
                'Cordoba' => 'Cordoba'
            ], 
                'attr'=>[
                    'class'=>'input'
                ]
            
    ]);
        $builder->add('politicaPrivacidad', CheckboxType::class,
        [
            'mapped' => false,
            'constraints' => [
                new IsTrue([
                    'message' => 'Debes aceptar la política de privacidad'
                ])
                ], 
                    'attr'=>[
                        'class'=>'acepto'
                    ],
                
                'label'=> 'He leido y acepto la politica de privacidad'
        ]);

        $builder->add('enviar', SubmitType::class, [
            'attr'=>[
                'class'=>'submit_boton'
            ]
        ]);

    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Formulario::class
        ]);
        
    }

}