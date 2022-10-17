<?php

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';
class Paginator_f262b94 extends \Knp\Component\Pager\Paginator implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera1a84 = null;
    private $initializer6b24f = null;
    private static $publicProperties50817 = [
        
    ];
    public function setDefaultPaginatorOptions(array $options)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'setDefaultPaginatorOptions', array('options' => $options), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->setDefaultPaginatorOptions($options);
    }
    public function paginate($target, $page = 1, $limit = 10, array $options = [])
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->paginate($target, $page, $limit, $options);
    }
    public function subscribe(\Symfony\Component\EventDispatcher\EventSubscriberInterface $subscriber)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'subscribe', array('subscriber' => $subscriber), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->subscribe($subscriber);
    }
    public function connect($eventName, $listener, $priority = 0)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'connect', array('eventName' => $eventName, 'listener' => $listener, 'priority' => $priority), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->connect($eventName, $listener, $priority);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eventDispatcher, $instance->defaultOptions);
        $instance->initializer6b24f = $initializer;
        return $instance;
    }
    public function __construct(?\Symfony\Component\EventDispatcher\EventDispatcherInterface $eventDispatcher = null)
    {
        static $reflection;
        if (! $this->valueHoldera1a84) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
            $this->valueHoldera1a84 = $reflection->newInstanceWithoutConstructor();
        unset($this->eventDispatcher, $this->defaultOptions);
        }
        $this->valueHoldera1a84->__construct($eventDispatcher);
    }
    public function & __get($name)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, '__get', ['name' => $name], $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        if (isset(self::$publicProperties50817[$name])) {
            return $this->valueHoldera1a84->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
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
        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\Paginator');
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
        unset($this->eventDispatcher, $this->defaultOptions);
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
