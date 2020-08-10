<?php declare(strict_types=1);

namespace Ersatzteilshop\CustomRule\Core\Rule;

use Shopware\Core\Framework\Rule\Rule;
use Shopware\Core\Framework\Rule\RuleScope;


class CustomRule extends Rule
{
    public function getName(): string
    {
        return 'google_customer';
    }

    public function match(RuleScope $scope): bool
    {
        if( isset($_COOKIE['GoogleCookie']) || isset($_GET['t'])){
            return true;
        }
        else {
            return false;
        }
    }

    public function getConstraints(): array
    {
        return [];
    }
}
