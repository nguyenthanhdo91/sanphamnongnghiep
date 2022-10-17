<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Trikoder\Bundle\OAuth2Bundle\Command\ClearExpiredTokensCommand' shared service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'trikoder'.\DIRECTORY_SEPARATOR.'oauth2-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ClearExpiredTokensCommand.php';

$this->privates['Trikoder\\Bundle\\OAuth2Bundle\\Command\\ClearExpiredTokensCommand'] = $instance = new \Trikoder\Bundle\OAuth2Bundle\Command\ClearExpiredTokensCommand(($this->privates['Trikoder\\Bundle\\OAuth2Bundle\\Manager\\Doctrine\\AccessTokenManager'] ?? $this->load('getAccessTokenManagerService.php')), ($this->privates['Trikoder\\Bundle\\OAuth2Bundle\\Manager\\Doctrine\\RefreshTokenManager'] ?? $this->load('getRefreshTokenManagerService.php')));

$instance->setName('trikoder:oauth2:clear-expired-tokens');

return $instance;
