# Google Customerplugin 

> This plugin implements a new rule, which can switch the shoppingprices dynamically.

> Its mainparts are a customrule, a subscriber who listens to events, a cookieimplementation

> Tags: googlerule, googlecustomer

- build status: working (some tests missing)
- issues (cookie has yet to be implemented to the cookie consent manager)
- slack: ersatzteilshop.slack.com informatikdrive@gmail.com
- downloads: 0
- Standart MIT licence


## Installation

- download zip
- place it into your shopware project
- install it with: bin/console plugin:zip CustomRule.zip
- activate it with: bin/console plugin:activate CustomRule



## FAQ

- **How do I do change the Rulelogic?**
    - No problem! Just go into the src/Core/CustomRule.php and change the match() method to your needs
    
- **How do I do change what the Subscriber "listens" to?**
    - No problem! Just go into the src/Storefront/Subscriber/Subscriber.php and change the onStorefrontRender() method to your needs 
    - This Method gets rendered everytime the Storefront is loaded, so be carefull to not implement something multiple times   

## Support

Reach out to me at one of the following places!

- Website at <a href="https://www.ersatzteilshop.de/kontakt.html" target="_blank">`Ersatzteilshop.com`</a>
- Youtube at <a href="https://www.youtube.com/channel/UCswaJJq4UYbs3hkIOK1akJw" target="_blank">`Ersatzteilshop TV`</a>


## License

- **[MIT license](http://opensource.org/licenses/mit-license.php)**
- Copyright 2020 © <a href="http://fvcproductions.com" target="_blank">Ersatzteilshop</a>.

