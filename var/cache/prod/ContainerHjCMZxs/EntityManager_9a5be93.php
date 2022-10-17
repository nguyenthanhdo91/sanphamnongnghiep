<?php

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';
class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera1a84 = null;
    private $initializer6b24f = null;
    private static $publicProperties50817 = [
        
    ];
    public function getConnection()
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'getConnection', array(), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'getMetadataFactory', array(), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'getExpressionBuilder', array(), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'beginTransaction', array(), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'getCache', array(), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->getCache();
    }
    public function transactional($func)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'transactional', array('func' => $func), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->transactional($func);
    }
    public function commit()
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'commit', array(), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->commit();
    }
    public function rollback()
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'rollback', array(), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'getClassMetadata', array('className' => $className), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'createQuery', array('dql' => $dql), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'createNamedQuery', array('name' => $name), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'createQueryBuilder', array(), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'flush', array('entity' => $entity), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'clear', array('entityName' => $entityName), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->clear($entityName);
    }
    public function close()
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'close', array(), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->close();
    }
    public function persist($entity)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'persist', array('entity' => $entity), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'remove', array('entity' => $entity), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'refresh', array('entity' => $entity), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'detach', array('entity' => $entity), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'merge', array('entity' => $entity), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'contains', array('entity' => $entity), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'getEventManager', array(), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'getConfiguration', array(), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'isOpen', array(), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'getUnitOfWork', array(), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'getProxyFactory', array(), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'initializeObject', array('obj' => $obj), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'getFilters', array(), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'isFiltersStateClean', array(), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'hasFilters', array(), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer6b24f = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldera1a84) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera1a84 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldera1a84->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, '__get', ['name' => $name], $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        if (isset(self::$publicProperties50817[$name])) {
            return $this->valueHoldera1a84->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
