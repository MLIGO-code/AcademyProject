<?php

declare(strict_types=1);

namespace App\Entity;

interface ProductInterface
{
    public function getColor(): string;

    public function setColor(string $color): void;

    public function getDisplayColor(): bool;

    public function setDisplayColor(bool $displayColor): void;
}
