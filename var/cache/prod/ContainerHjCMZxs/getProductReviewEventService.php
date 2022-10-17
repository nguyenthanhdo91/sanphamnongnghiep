<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Plugin\ProductReview4\ProductReviewEvent' shared autowired service.

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'ProductReview4'.\DIRECTORY_SEPARATOR.'ProductReviewEvent.php';

return $this->privates['Plugin\\ProductReview4\\ProductReviewEvent'] = new \Plugin\ProductReview4\ProductReviewEvent(($this->privates['Plugin\\ProductReview4\\Repository\\ProductReviewConfigRepository'] ?? $this->load('getProductReviewConfigRepositoryService.php')), ($this->privates['Eccube\\Repository\\Master\\ProductStatusRepository'] ?? $this->load('getProductStatusRepositoryService.php')), ($this->privates['Plugin\\ProductReview4\\Repository\\ProductReviewRepository'] ?? $this->load('getProductReviewRepositoryService.php')));
