<?php

namespace Boissiere\E4Bundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SongsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('namesong', 'text', array('label' => 'Nom de la musique'))
                ->add('style')
                ->add('idgroup', 'text', array('label' => 'Groupe'))
                ->add('songpath', FileType::class, array('label' => 'Votre musique (.MP3)',
                                                         'data_class' => null));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Boissiere\E4Bundle\Entity\Songs'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'boissiere_e4bundle_songs';
    }


}
