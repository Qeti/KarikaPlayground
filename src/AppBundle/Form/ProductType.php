<?php

namespace Karika\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    public function getParent()
    {
        return 'Karika\CoreBundle\Form\Type\ProductType';
    }

   /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PlaygroundCoreBundle\Entity\Product'
        ));
    }
}
