<?php
declare(strict_types=1);

namespace App\Tests\Behat\Pages;

use FriendsOfBehat\PageObjectExtension\Page\SymfonyPage;

class SimpleProductCreatePage extends SymfonyPage implements SimpleProductCreatePageInterface
{



    public function getRouteName(): string
    {
      return  'sylius_admin_product_create_simple';
    }


    public function setColor(string $color): void
    {
        $this->getDocument()->selectFieldOption('Color',$color);
    }

}
