<?php

namespace Rubens\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('subtitle')
            ->add('chapo')
            ->add('body', 'ckeditor', array(
                'config' => array(
                    'filebrowser_image_browse_url' => array(
                        'route'            => 'elfinder',
                        'route_parameters' => array('instance' => 'ckeditor'),
                    ),
                ),
            ))
            ->add('published', 'checkbox', array(
                'label' => 'Publication : ',
                'required' => false
            ))
//            ->add('publishedAt','datetime')
            ->add('publishedAt','datetime', array(
                'label' => 'Date de publication',
                'format' => 'dd-MM-yyyy',
                'attr' => array(
                    'class' => 'datepicker'
            )))
            ->add('enabledVideo', 'checkbox', array(
                'required' => false
            ))
            ->add('images', 'entity', array(
                    'class' => 'Rubens\CoreBundle\Entity\Image',
                    'multiple' => true,
                    'property' => 'alt'
            ))
            ->add('categories', 'entity', array(
                    'class' => 'Rubens\CoreBundle\Entity\Categorie',
                    'multiple' => true,
                    'property' => 'title'
            ))
            ->add('videos', 'entity', array(
                    'class' => 'Rubens\CoreBundle\Entity\Video',
                    'multiple' => true,
                    'property' => 'title',
                    'required' => false,
                ))
//            ->add('saveAndadd','submit', array('label' => 'Enregistrer et créer'))    
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Rubens\CoreBundle\Entity\Post',
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'rubens_corebundle_post';
    }
}
