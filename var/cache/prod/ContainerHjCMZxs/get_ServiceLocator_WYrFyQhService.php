<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.wYrFyQh' shared service.

return $this->privates['.service_locator.wYrFyQh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'mailMagazineSendHistory' => ['privates', '.errored..service_locator.wYrFyQh.Plugin\\MailMagazine4\\Entity\\MailMagazineSendHistory', NULL, 'Cannot autowire service ".service_locator.wYrFyQh": it references class "Plugin\\MailMagazine4\\Entity\\MailMagazineSendHistory" but no such service exists.'],
    'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService.php', true],
], [
    'mailMagazineSendHistory' => 'Plugin\\MailMagazine4\\Entity\\MailMagazineSendHistory',
    'paginator' => '?',
]);