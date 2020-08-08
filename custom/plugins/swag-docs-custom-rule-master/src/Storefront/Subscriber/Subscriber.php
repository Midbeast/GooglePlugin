<?php

namespace Swag\CustomRule\Storefront\Subscriber;

use Shopware\Storefront\Event\StorefrontRenderEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class Subscriber implements EventSubscriberInterface
{
    /**
     * @inheritDoc
     */
    public static function getSubscribedEvents()
    {
        return [
            StorefrontRenderEvent::class => 'onStorefrontRender',
        ];
    }
    /**
     * @param StorefrontRenderEvent $event
     */
    public function onStorefrontRender(StorefrontRenderEvent $event)
    {
        $value = $event->getRequest()->get('t');
        if($value != null){
            echo "<script>";
            echo "console.log('This will set a Cookie later.');";
            echo "</script>";
        }
    }
}
