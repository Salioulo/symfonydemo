<?php

namespace Projet\GeneralBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DemandesForm extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('domaine')
            ->add('typeMateriel')
            ->add('probleme')
            ->add('description')
            ->add('numero')
            ->add('localisation')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Projet\GeneralBundle\Entity\Demandes'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'projet_generalbundle_demandes';
    }
}
