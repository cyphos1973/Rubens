<?php

namespace Rubens\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UtilisateurType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('email')
            ->add('password','repeated', array(
                    'first_name' => 'confirm',
                    'second_name' => 'confirmed',
                    'type' => 'password',
                 ))
            ->add('prenom')
            ->add('nom')
            ->add('enabled', 'checkbox', array(
                'required'=>'false'
            ))
            ->add('roles', 'choice', array('choices' => 
                array(
                    'ROLE_USER' => 'ROLE_USER',
                    'ROLE_ADMIN' => 'ROLE_ADMIN',
                    'ROLE_SUPER_ADMIN' => 'ROLE_SUPER_ADMIN',
                ),
                'required'  => true,
                'multiple' => true
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Rubens\CoreBundle\Entity\Utilisateur'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'rubens_corebundle_utilisateur';
    }
}
