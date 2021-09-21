<?php
declare(strict_types=1);

namespace App\Tests\Behat\Context;

use App\Tests\Behat\Pages\SimpleProductCreatePageInterface;
use Behat\Behat\Context\Context;

class ProductContext implements Context
{

    /** @var SimpleProductCreatePageInterface */
    private $simpleProductCreatePage;


    public function __construct(SimpleProductCreatePageInterface $simpleProductCreatePage)
    {
        $this->simpleProductCreatePage = $simpleProductCreatePage;
    }

    /**
     * @Given I am on create simple product page
     */
    public function iAmOnCreateSimpleProductPage()
    {
        throw new PendingException();
    }

    /**
     * @When I set color to :arg1
     */
    public function iSetColorTo($arg1)
    {
        throw new PendingException();
    }





}
