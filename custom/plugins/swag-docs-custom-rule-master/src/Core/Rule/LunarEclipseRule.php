<?php declare(strict_types=1);

namespace Swag\CustomRule\Core\Rule;

use Shopware\Core\Framework\Rule\Rule;
use Shopware\Core\Framework\Rule\RuleScope;
use Swag\CustomRule\Storefront\Subscriber\Subscriber;


class LunarEclipseRule extends Rule
{


    public function getName(): string
    {
        return 'googlePlugins';
    }

    public function match(RuleScope $scope): bool
    {
        return false;

    }

    public function getConstraints(): array
    {
        return [];
    }
}
