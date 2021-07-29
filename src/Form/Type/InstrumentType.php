<?php

namespace App\Form\Type;

use App\Entity\Instrument;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
class InstrumentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->addEventListener(FormEvents::PRE_SET_DATA, [$this, 'onPreSetData']);
        $builder->addEventListener(FormEvents::PRE_SUBMIT, [$this, 'onPreSubmit']);
        $builder
            ->add('name', null, [
                'label' => 'Nom de l\'instrument de musique',
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez saisir un nom pour l\'instrument de musique'
                    ]
                    )
                ]
            ])
           
            // Validation button
            ->add('save', SubmitType::class, [
                'label' => 'Valider',
            ]);
    }
    public function onPreSetData(FormEvent $event){
        $instrument = $event->getData();
        $form = $event->getForm();
        if ($instrument->getId() === null) {
            $form->add('icon', FileType::class, [
                'label' => 'Téléverser une icone',
                'mapped' => false,
                'required' => true,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Veuillez téléverser une icone'
                    ]),
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/png',
                            'image/jpeg'
                        ],
                        'mimeTypesMessage' => 'Veuillez ajouter une image valide',
                        'maxSizeMessage' => "trop grand/ trop gros",
                    ])
                    ]]);
        
        } else {
            $form->add('icon', FileType::class, [
                'label' => 'Téléverser une icone',
                'mapped' => false,
                'required' => false,
            ]);
        }
    }
    public function onPreSubmit(FormEvent $event){
        $instrument = $event->getData();
        $form = $event->getForm();
        if ($instrument['icon'] === null) {
            $form->remove('icon');
            unset($instrument['icon']);
           
        }
        $event->setData($instrument);
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Instrument::class,
        ]);
    }
}
