<?php

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'TaxRuleService.php';
class TaxRuleService_289f969 extends \Eccube\Service\TaxRuleService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera1a84 = null;
    private $initializer6b24f = null;
    private static $publicProperties50817 = [
        
    ];
    public function getTax($price, $product = null, $productClass = null, $pref = null, $country = null)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'getTax', array('price' => $price, 'product' => $product, 'productClass' => $productClass, 'pref' => $pref, 'country' => $country), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->getTax($price, $product, $productClass, $pref, $country);
    }
    public function getPriceIncTax($price, $product = null, $productClass = null, $pref = null, $country = null)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'getPriceIncTax', array('price' => $price, 'product' => $product, 'productClass' => $productClass, 'pref' => $pref, 'country' => $country), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->getPriceIncTax($price, $product, $productClass, $pref, $country);
    }
    public function calcTax($price, $taxRate, $RoundingType, $taxAdjust = 0)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'calcTax', array('price' => $price, 'taxRate' => $taxRate, 'RoundingType' => $RoundingType, 'taxAdjust' => $taxAdjust), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->calcTax($price, $taxRate, $RoundingType, $taxAdjust);
    }
    public function calcTaxIncluded($price, $taxRate, $RoundingType, $taxAdjust = 0)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'calcTaxIncluded', array('price' => $price, 'taxRate' => $taxRate, 'RoundingType' => $RoundingType, 'taxAdjust' => $taxAdjust), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->calcTaxIncluded($price, $taxRate, $RoundingType, $taxAdjust);
    }
    public function roundByRoundingType($value, $RoundingType)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'roundByRoundingType', array('value' => $value, 'RoundingType' => $RoundingType), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->roundByRoundingType($value, $RoundingType);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->BaseInfo, $instance->taxRuleRepository);
        $instance->initializer6b24f = $initializer;
        return $instance;
    }
    public function __construct(\Eccube\Repository\TaxRuleRepository $taxRuleRepository, \Eccube\Repository\BaseInfoRepository $baseInfoRepository)
    {
        static $reflection;
        if (! $this->valueHoldera1a84) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\TaxRuleService');
            $this->valueHoldera1a84 = $reflection->newInstanceWithoutConstructor();
        unset($this->BaseInfo, $this->taxRuleRepository);
        }
        $this->valueHoldera1a84->__construct($taxRuleRepository, $baseInfoRepository);
    }
    public function & __get($name)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, '__get', ['name' => $name], $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        if (isset(self::$publicProperties50817[$name])) {
            return $this->valueHoldera1a84->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\TaxRuleService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1a84;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera1a84;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\TaxRuleService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1a84;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera1a84;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, '__isset', array('name' => $name), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\TaxRuleService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1a84;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldera1a84;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, '__unset', array('name' => $name), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\TaxRuleService');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera1a84;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera1a84;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, '__clone', array(), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        $this->valueHoldera1a84 = clone $this->valueHoldera1a84;
    }
    public function __sleep()
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, '__sleep', array(), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return array('valueHoldera1a84');
    }
    public function __wakeup()
    {
        unset($this->BaseInfo, $this->taxRuleRepository);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6b24f = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6b24f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'initializeProxy', array(), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera1a84;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera1a84;
    }
}
