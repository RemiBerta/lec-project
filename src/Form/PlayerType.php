<?php

namespace App\Form;

use App\Entity\Player;
use App\Entity\Role;
use App\Entity\Team;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlayerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('player_name')
            ->add('firstname')
            ->add('lastname')
            ->add('photo')
            ->add('nationality')
            ->add('team', EntityType::class, [
                'class' => Team::class,
                'choice_label' => 'id',
            ])
            ->add('role', EntityType::class, [
                'class' => Role::class,
                'choice_label' => 'id',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Player::class,
        ]);
    }
}
