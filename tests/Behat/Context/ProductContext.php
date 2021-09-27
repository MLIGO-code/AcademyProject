<?php
declare(strict_types=1);

namespace App\Tests\Behat\Context;

use App\Tests\Behat\Pages\SimpleProductCreatePageInterface;
use Behat\Behat\Context\Context;

final class ProductContext implements Context
{

    /** @var SimpleProductCreatePageInterface */
    private $simpleProductCreatePage;


    function __construct(SimpleProductCreatePageInterface $simpleProductCreatePage)
    {
        $this->simpleProductCreatePage = $simpleProductCreatePage;
    }

    /**
     * @Given I am on create simple product page
     */
    function iAmOnCreateSimpleProductPage()
    {
        $this->simpleProductCreatePage->open();
    }

    /**
     * @When I set color to :color
     */
    function iSetColorTo(string $color):void
    {
        $this->simpleProductCreatePage->setColor($color);
    }

    /**
     * @When I click :name
     */
    function iClick($name)
    {
        $this->simpleProductCreatePage->pressButton($name);
    }

    /**
     * @When I enable display color
     */
    function iEnableDisplayColor()
    {
        $this->simpleProductCreatePage->enableDisplayColor();
    }







}
