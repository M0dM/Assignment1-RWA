<?php

namespace ITB\Bundle\UltimateFrisbeeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ShoppingCartType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numberOfItems')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ITB\Bundle\UltimateFrisbeeBundle\Entity\ShoppingCart'
        ));
    }

    public function getName()
    {
        return 'itb_bundle_ultimatefrisbeebundle_shoppingcarttype';
    }
}
