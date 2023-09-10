<?php

namespace App\Form;

use App\Entity\Formulaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class FormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom')
            ->add('gsm')
            ->add('cin', null, [
                'constraints' => [
                    new NotBlank(['message' => 'Le numéro de CIN ne peut pas être vide.']),
                    new Regex([
                        'pattern' => '/^\d+$/',
                        'message' => 'Le numéro de CIN doit contenir uniquement des chiffres.',
                    ]),
                    new Length([
                        'max' => 8,
                        'maxMessage' => 'Le numéro de CIN ne doit pas dépasser {{ limit }} caractères.',
                    ]),
                ],
            ])
            ->add('agence', ChoiceType::class, [
                'choices' => [
                    // Ici, vous pouvez ajouter vos agences existantes comme choix
                    'Alain Savary' => 'agence_1',
                    'Ariana' => 'agence_2',
                    'Ain zaghouan nord' => 'agence_2',
                    'Avenue Habib Borguiba' => 'agence_2',
                    'Bab Bnat' => 'agence_2',
                    'Bardo' => 'agence_2',
                    'Beja' => 'agence_2',
                    'Ben arous' => 'agence_2',
                    'Ben Guerden' => 'agence_2',
                    'Beni khaled' => 'agence_2',
                    'Beni khiar' => 'agence_2',
                    'Bizerte' => 'agence_2',
                    'Borj Louzir' => 'agence_2',
                    'Sousse' => 'agence_2',
                    'Sfax' => 'agence_2',
                    'Nabeul' => 'agence_2',
                    'Mahdia' => 'agence_2',
                    'Monastir' => 'agence_2',
                    'Djerba' => 'agence_2',

                    // ...
                ],
                'placeholder' => 'Sélectionnez une agence',
                'attr' => ['class' => 'form-control'],
            ])
            // ...
        
            ->add('compte', null, [
                'constraints' => [
                    new Length([
                        'max' => 6,
                        'maxMessage' => 'il faut saisir que {{ limit }} chiffres.',
                    ]),
                ],
            ])
            // ...
        
            ->add('prem_chiffres', null, [
                'constraints' => [
                    new Regex([
                        'pattern' => '/^\d{4}$/',
                        'message' => 'Le champ doit contenir exactement 4 chiffres.',
                    ]),
                ],
                'attr' => ['class' => 'form-control'],
            ])
            ->add('derniers_chiffres')
            ->add('mail', null, [
                'constraints' => [
                    new Email([
                        'message' => 'Veuillez entrer une adresse e-mail valide.',
                    ]),
                ],
                'attr' => ['class' => 'form-control'],
            ])

        ;
        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Formulaire::class,
        ]);
    }
}
