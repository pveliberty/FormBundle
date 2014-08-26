<?php

namespace Eliberty\FormBundle\Form\FormElementType;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Class MarkdownEditorType
 * responsability: overload the textarea fields and turning it into markdown editor
 * @package Eliberty\RedpillBundle\Form\FormElementType
 */
class MarkdownEditorType extends AbstractType
{
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'widget' => 'markdown_editor_widget'
        ));
    }

    /**
     * @return null|string|\Symfony\Component\Form\FormTypeInterface
     */
    public function getParent()
    {
        return 'textarea';
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'eliberty_markdown_editor';
    }
}