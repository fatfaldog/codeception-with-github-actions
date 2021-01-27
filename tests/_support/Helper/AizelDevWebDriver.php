<?php
namespace Helper;

use Codeception\Module\WebDriver;
use Codeception\TestInterface;

class AizelDevWebDriver extends WebDriver
{
    public function _before(TestInterface $testInterface)
    {
        parent::_before($testInterface);
        $this->amOnPage('/');
        $this->setCookie('dev_branch', $this->config['branch'] ?? 'master');
        $this->setCookie('disableFlocktory', 'true');
    }
}
