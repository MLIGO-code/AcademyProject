<?php

declare(strict_types=1);

namespace App\Form\Extension;

use Symfony\Component\Form\FormBuilderInterface;

interface ProductTypeExtensionInterface extends FormBuilderInterface
{
    /**
     * @param array<string, mixed> $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options): void;
    public static function getExtendedTypes(): iterable;
}
