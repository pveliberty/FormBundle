<?php

namespace Eliberty\FormBundle\Form\FormElementType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Eliberty\RedpillBundle\Form\DataTransformer\NormalizeTransformer;

/**
 * Class NormalizedType
 * @package Eliberty\RedpillBundle\Form\FormElementType
 */
class NormalizedType extends AbstractType
{

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $toupper = !empty($options['toupper']);
        $builder
            ->addViewTransformer(new NormalizeTransformer($toupper))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'compound' => false,
            'toupper'     => false
        ));
    }

    /**
     * @return null|string|\Symfony\Component\Form\FormTypeInterface
     */
    public function getParent()
    {
        return 'form';
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'normalize';
    }
}
