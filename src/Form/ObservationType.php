<?php

namespace App\Form;

use App\Entity\Breed;
use App\Entity\Observation;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ObservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('observerLocation')
            ->add('distanceFromTheObserver')
            ->add('orientationOfTheObserver')
            ->add('landType')
            ->add('birdActivity')
            ->add('breed',EntityType::class,['class'=>Breed::class,'choice_label'=>'name'])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Observation::class,
        ]);
    }
}
