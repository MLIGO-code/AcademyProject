<?php
declare(strict_types=1);

namespace App\Tests\Behat\Pages;

use FriendsOfBehat\PageObjectExtension\Page\SymfonyPageInterface;

interface SimpleProductCreatePageInterface extends SymfonyPageInterface
{


    public function getRouteName(): string;

    public function setColor(string $color): void;


}
