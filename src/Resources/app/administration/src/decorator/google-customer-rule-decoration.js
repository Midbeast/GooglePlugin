import { Application } from 'src/core/shopware';
import '../core/component/is-google-customer';

Application.addServiceProviderDecorator('ruleConditionDataProviderService', (ruleConditionService) => {
    ruleConditionService.addCondition('google_customer', {
        component: 'is-google-customer',
        label: 'The Customer is a Google Customer',
        scopes: ['global']
    });

    return ruleConditionService;
});
