<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StudentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('id')
            ->add('name')
            ->add('classrooms',EntityType::class,[
                'class'=>Classeroom::class,
                'choice_label'=>'id'
            ])
            ->add('clubs',EntityType::class,[
                'class'=>Club::class,
                'choice_label'=>'id',
                'expanded' => true,
                'multiple' => true
            ]
            )
            ->add('save',SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
