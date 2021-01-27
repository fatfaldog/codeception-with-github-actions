<?php

declare(strict_types=1);

class RegionCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    /**
     * Проверка смены города с помощью ссылок на основные города.
     */
    public function changeCityUsingLinkCest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->see('Москва', '.js-cityName');
        $I->dontSee('Санкт-Петербург', '.js-popoverPlace .c-nav__item:nth-child(2) .js-citySelect');
        $I->click('.js-openCityModal');
        $I->waitForElementVisible('.js-citySearchField');
        $I->see('Санкт-Петербург', '.js-popoverPlace .c-nav__item:nth-child(2) .js-citySelect');
        $I->waitForElementClickable('.js-popoverPlace .c-nav__item:nth-child(2) .js-citySelect');
        $I->click('.js-popoverPlace .c-nav__item:nth-child(2) .js-citySelect');
        $I->waitForText('Санкт-Петербург', 10, '.js-cityName');
        /**
         * Проверяем, что город не сбрасывается после обновления страницы.
         */
        $I->amOnPage('/');
        $I->see('Санкт-Петербург', '.js-cityName');
    }
}
