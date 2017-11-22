<?php

namespace App\Form;

use App\Fight;
use App\Entity\Personne;
use Doctrine\DBAL\Types\IntegerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FightType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'person',
                EntityType::class,
                [
                    'class'=>Person::class,
                    'choice_label'=>'name',
                    'multiple'=>false,
                    'expanded'=>false,
                ]
            )
            ->add(
                'distance',
                IntegerType::class
            )
            ->add(
                'cible',
                EntityType::class
            );
    }
}