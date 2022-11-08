<?php

namespace App\Form;

use App\Entity\Enseignants;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EnseignantsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('identifiant')
            ->add('password')
            ->add('nom')
            ->add('prenom')
            ->add('email')
            ->add('date_naissance')
            ->add('telephone')
            ->add('id_compte')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Enseignants::class,
        ]);
    }
}
