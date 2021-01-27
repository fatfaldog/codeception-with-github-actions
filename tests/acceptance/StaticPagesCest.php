<?php

declare(strict_types=1);

class StaticPagesCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function certificatesPageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/certificates/');
        $I->see('ЭЛЕКТРОННЫЙ ПОДАРОЧНЫЙ СЕРТИФИКАТ');
    }

    public function frontPageWorks(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('agentprovocateur');
    }
}
