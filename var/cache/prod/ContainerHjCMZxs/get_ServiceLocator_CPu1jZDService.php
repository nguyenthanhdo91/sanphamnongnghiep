<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.CPu1jZD' shared service.

return $this->privates['.service_locator.CPu1jZD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'mailMagazineSendHistory' => ['privates', '.errored..service_locator.CPu1jZD.Plugin\\MailMagazine4\\Entity\\MailMagazineSendHistory', NULL, 'Cannot autowire service ".service_locator.CPu1jZD": it references class "Plugin\\MailMagazine4\\Entity\\MailMagazineSendHistory" but no such service exists.'],
], [
    'mailMagazineSendHistory' => 'Plugin\\MailMagazine4\\Entity\\MailMagazineSendHistory',
]);
