import { Application } from 'src/core/shopware';
import '../core/component/swag-lunar-eclipse';

Application.addServiceProviderDecorator('ruleConditionDataProviderService', (ruleConditionService) => {
    ruleConditionService.addCondition('googlePlugins', {
        component: 'swag-lunar-eclipse',
        label: 'Is this a Google Customer',
        scopes: ['global']
    });

    return ruleConditionService;
});
