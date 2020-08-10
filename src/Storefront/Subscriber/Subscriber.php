<?php

namespace Ersatzteilshop\CustomRule\Storefront\Subscriber;

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
            if(!isset($_COOKIE['GoogleCookie'])){
                setcookie("GoogleCookie", 'true', time()+3600, '/');  /* expire in 1 hour */
                echo '<script>';
                echo 'console.log("Cookie Is set")';
                echo '</script>';
            }
        }
    }


}

