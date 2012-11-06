<?php

namespace ITB\Bundle\UltimateFrisbeeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ItemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('image')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ITB\Bundle\UltimateFrisbeeBundle\Entity\Item'
        ));
    }

    public function getName()
    {
        return 'itb_bundle_ultimatefrisbeebundle_itemtype';
    }
}
