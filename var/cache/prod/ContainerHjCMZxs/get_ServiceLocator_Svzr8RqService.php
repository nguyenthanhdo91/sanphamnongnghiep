<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.svzr8Rq' shared service.

return $this->privates['.service_locator.svzr8Rq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'Coupon' => ['privates', '.errored..service_locator.svzr8Rq.Plugin\\Coupon4\\Entity\\Coupon', NULL, 'Cannot autowire service ".service_locator.svzr8Rq": it references class "Plugin\\Coupon4\\Entity\\Coupon" but no such service exists.'],
], [
    'Coupon' => 'Plugin\\Coupon4\\Entity\\Coupon',
]);