<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Eccube\Util\CacheUtil' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'CacheUtil.php';

return $this->privates['Eccube\\Util\\CacheUtil'] = new \Eccube\Util\CacheUtil(($this->services['kernel'] ?? $this->get('kernel', 1)), $this);