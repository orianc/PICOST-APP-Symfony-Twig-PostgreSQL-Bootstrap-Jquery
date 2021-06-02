<?php

namespace App\Form;

use App\Entity\Album;
use App\Entity\Photo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PhotoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('intoAlbum', EntityType::class, [
                'label' => 'Picbook',
                'class' => Album::class,
                'choice_label' => 'Name'
            ])
            ->add('pictureFile', VichImageType::class, [
                'label' => 'Upload',
                'required' => false,
                'download_uri' => true,
                'image_uri' => true

            ])
            ->add(
                'name',
                TextType::class,
                [
                    'label' => 'Name',
                    'empty_data' => '',

                ]
            );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Photo::class,
        ]);
    }
}
