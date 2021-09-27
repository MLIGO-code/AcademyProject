<?php
declare(strict_types=1);

namespace App\Form\Extension;

use Symfony\Component\Form\FormBuilderInterface;

interface ProductTypeExtensionInterface
{
    public function buildForm(FormBuilderInterface $builder, array $options): void;
}
