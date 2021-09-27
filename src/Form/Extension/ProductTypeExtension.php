<?php

declare(strict_types=1);

namespace App\Form\Extension;

use App\Entity\Product;
use Sylius\Bundle\ProductBundle\Form\Type\ProductType;
use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class ProductTypeExtension extends AbstractTypeExtension
{
    /**
     * @param array<string, mixed> $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) {
            $event->getForm()->add(
                'color',
                ChoiceType::class,
                [
                'choices' => [
                    'Set color' => null,
                    'Red' => Product::RED,
                    'Green' => Product::GREEN,
                    'Blue' => Product::BLUE,
                ],
                'label' => 'app.ui.color',
            ]
            )
                ->add('displayColor', CheckboxType::class, [
                    'label' => 'app.ui.color_enable',
                ]);
        });
    }

    public static function getExtendedTypes(): iterable
    {
        return [ProductType::class];
    }
}
