<?php

namespace App\Form;

use App\Entity\UserApp;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Security;

class RegistrationUserAppType extends AbstractType
{
    private $security;

    public function __construct(Security $security)
        {
            // Avoid calling getUser() in the constructor: auth may not
            // be complete yet. Instead, store the entire Security object.
            $this->security = $security;
        }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('firstname')
            ->add('lastname')
            ->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
                // Avant construction du formulaire, on va d'abord vérifier dans
                // quel contexte on se trouve :
                // - Création : on rendra obligatoire la saisie d'un mot de passe
                // - Edition : la saisie du mot de passe sera facultative
                $form = $event->getForm();
                $userRoles = $this->security->getUser();

                if (in_array("ROLE_SUPER_ADMIN", $userRoles->getRoles())) {
                    $form->add('roles', ChoiceType::class, [
                        'choices' => [
                            'Super Administrateur' => 'ROLE_SUPER_ADMIN',
                            'Administrateur' => 'ROLE_ADMIN',
                        ],
                        'multiple' => true,
                        'expanded' => true
                    ]);
                } else {
                    
                }
            })
            ->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
                // Avant construction du formulaire, on va d'abord vérifier dans
                // quel contexte on se trouve :
                // - Création : on rendra obligatoire la saisie d'un mot de passe
                // - Edition : la saisie du mot de passe sera facultative
                $form = $event->getForm();
                $userData = $event->getData();

                if ($userData->getId() === null) {
                    // Mode création
                    // Le mot de passe sera obligatoire
                    $required = true;
                    // $form->add('password', PasswordType::class, [
                    //     'mapped' => false,
                    //     'required' => $required
                    // ]);
                } else {
                    // Mode édition
                    // Le mot de passe ne pas sera obligatoire
                    $required = false;
                }

                // On ajoute dynamiquement le champ Password
                // Qui est obligatoire en création
                // et optionnel en édition
                $form->add('password', PasswordType::class, [
                    'mapped' => false,
                    'required' => $required
                ]);
            })
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => UserApp::class,
        ]);
    }
}
