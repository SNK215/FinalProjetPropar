<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username', null, [
                "help" => "L'email doit être valide"
            ])
            ->add('roles', ChoiceType::class, [
                'required' => true,
                'multiple' => false,
                'expanded' => false,
                "choices" => [
                    "Expert" => "ROLE_SUPER_ADMIN",
                    "Senior" => "ROLE_ADMIN",
                    "Apprenti" => "ROLE_USER",
                ],
                ])
            ->add('password', PasswordType::class)
            ->add("confirm_password", PasswordType::class)
            ->add("nom",null, [
                'help' => 'Votre nom ne peut pas contenir de chiffres'
            ])
            ->add("prenom",null, [
                'help' => 'Votre prénom ne peut pas contenir de chiffres'
            ])
        ;
    

    // Data transformer
    $builder->get('roles')
            ->addModelTransformer(new CallbackTransformer(
                function ($rolesArray) {
                    // transform the array to a string
                    return count($rolesArray)? $rolesArray[0]: null;
                },
                function ($rolesString) {
                    // transform the string back to an array
                    return [$rolesString];
                }
        ));


}
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
