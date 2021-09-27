<?php

declare(strict_types=1);

namespace App\Entity;

use Sylius\Component\Core\Model\Product as BaseProduct;

class Product extends BaseProduct implements ProductInterface
{
    public const RED = 'Red';

    public const GREEN = 'Green';

    public const BLUE = 'Blue';

    /** @var string */
    private $color;

    /** @var bool */
    private $displayColor;

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getDisplayColor(): bool
    {
        return $this->displayColor;
    }

    public function setDisplayColor(bool $displayColor): void
    {
        $this->displayColor = $displayColor;
    }
}
