<?php

namespace App\Form;

use App\Entity\DreamTeam;
use App\Entity\Player;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DreamTeamType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Nom de la team'
            ])
            ->add('top', EntityType::class, [
                'class' => Player::class,
                'label' => 'Toplaner',
                'choice_label' => 'playerName',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('p')
                        ->join('p.role', 'r')
                        ->where('r.name = :role')
                        ->setParameter('role', 'Toplaner');
                }
            ])
            ->add('jungle', EntityType::class, [
                'class' => Player::class,
                'label' => 'Jungler',
                'choice_label' => 'playerName',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('p')
                        ->join('p.role', 'r')
                        ->where('r.name = :role')
                        ->setParameter('role', 'Jungler');
                }
            ])
            ->add('mid', EntityType::class, [
                'class' => Player::class,
                'label' => 'Midlaner',
                'choice_label' => 'playerName',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('p')
                        ->join('p.role', 'r')
                        ->where('r.name = :role')
                        ->setParameter('role', 'Midlaner');
                }
            ])
            ->add('adc', EntityType::class, [
                'class' => Player::class,
                'label' => 'ADC',
                'choice_label' => 'playerName',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('p')
                        ->join('p.role', 'r')
                        ->where('r.name = :role')
                        ->setParameter('role', 'Botlaner');
                }
            ])
            ->add('support', EntityType::class, [
                'class' => Player::class,
                'label' => 'Support',
                'choice_label' => 'playerName',
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('p')
                        ->join('p.role', 'r')
                        ->where('r.name = :role')
                        ->setParameter('role', 'Support');
                }
            ])
        ;   
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DreamTeam::class,
        ]);
    }
}
