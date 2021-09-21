@managing_products
Feature: Creating simple product with color
    In order to boarden product options
    As an administrator
    I want to be able to create product with color

    Background:
        Given I am logged in as an administrator
        And the store operates on a single channel in "United States"

    @ui
    Scenario: Adding new simple product with color
        Given I am on create simple product page
        When I specify its code as "simple_product_red"
        And I name it "Simple Product" in "English (United States)"
        And I set its slug to "simple_product_red" in "English (United States)"
        And I set its price to "$10.00" for "United States" channel
        And I set color to "Red"
        And I add it
        Then I should be notified that it has been successfully created
        And the product "Simple Product" should appear in the store




