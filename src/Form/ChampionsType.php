<?php

namespace App\Form;

use App\Entity\Champions;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChampionsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom')
            ->add('Race')
            ->add('Origine')
            ->add('Classe')
            ->add('Taille')
            ->add('Date')
            ->add('Modification')
            ->add('Histoire')

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Champions::class,
        ]);
    }
}
