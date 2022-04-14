<?php
namespace App\Form;
use App\Entity\Operation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class OperationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', ChoiceType::class, [
                'required' => true,
                'multiple' => false,
                'expanded' => false,
                "choices" => [
                    "Grosse" => "Grosse",
                    "Moyenne" => "Moyenne",
                    "Petite" => "Petite"
                ],
                ])
            ->add('description', TextAreaType::class)
            ->add('nom')
            ->add('prenom')
            ->add('adresse')
        ;
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Operation::class,
        ]);
    }
}