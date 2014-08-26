<?php

namespace Eliberty\FormBundle\Form\FormElementType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormBuilderInterface;

class ExpandedType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'widget' => 'expanded_widget'
        ));
    }
    public function getParent()
    {
        return 'choice';
    }

    public function getName()
    {
        return 'rp_expanded';
    }
}