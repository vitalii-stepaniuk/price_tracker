<?php

namespace App\Form;

use App\Entity\Interest;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InterestType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('product_name')
            ->add('product_url')
            ->add('selector_type')
            ->add('selector')
            ->add('notify_email')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Interest::class,
        ]);
    }
}
