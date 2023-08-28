<?php

class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Management & Technical Consulting', 'h1');
        $I->click('.carousel-control-prev');
        $I->wait('1');
        $I->see('Industrial Equipment & More!', 'h5');
    }
}