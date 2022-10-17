<?php

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Composer'.\DIRECTORY_SEPARATOR.'ComposerServiceInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Composer'.\DIRECTORY_SEPARATOR.'ComposerApiService.php';
class ComposerApiService_c77e330 extends \Eccube\Service\Composer\ComposerApiService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera1a84 = null;
    private $initializer6b24f = null;
    private static $publicProperties50817 = [
        
    ];
    public function execInfo($pluginName, $version)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'execInfo', array('pluginName' => $pluginName, 'version' => $version), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->execInfo($pluginName, $version);
    }
    public function execRequire($packageName, $output = null)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'execRequire', array('packageName' => $packageName, 'output' => $output), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->execRequire($packageName, $output);
    }
    public function execRemove($packageName, $output = null)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'execRemove', array('packageName' => $packageName, 'output' => $output), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->execRemove($packageName, $output);
    }
    public function execUpdate($dryRun, $output = null)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'execUpdate', array('dryRun' => $dryRun, 'output' => $output), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->execUpdate($dryRun, $output);
    }
    public function execInstall($dryRun, $output = null)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'execInstall', array('dryRun' => $dryRun, 'output' => $output), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->execInstall($dryRun, $output);
    }
    public function foreachRequires($packageName, $version, $callback, $typeFilter = null, $level = 0)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'foreachRequires', array('packageName' => $packageName, 'version' => $version, 'callback' => $callback, 'typeFilter' => $typeFilter, 'level' => $level), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->foreachRequires($packageName, $version, $callback, $typeFilter, $level);
    }
    public function execConfig($key, $value = null)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'execConfig', array('key' => $key, 'value' => $value), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->execConfig($key, $value);
    }
    public function getConfig()
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'getConfig', array(), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->getConfig();
    }
    public function setWorkingDir($workingDir)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'setWorkingDir', array('workingDir' => $workingDir), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->setWorkingDir($workingDir);
    }
    public function runCommand($commands, $output = null, $init = true)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'runCommand', array('commands' => $commands, 'output' => $output, 'init' => $init), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->runCommand($commands, $output, $init);
    }
    public function configureRepository(\Eccube\Entity\BaseInfo $BaseInfo)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'configureRepository', array('BaseInfo' => $BaseInfo), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->configureRepository($BaseInfo);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig);
        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $instance, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($instance);
        $instance->initializer6b24f = $initializer;
        return $instance;
    }
    public function __construct(\Eccube\Common\EccubeConfig $eccubeConfig, \Eccube\Repository\BaseInfoRepository $baseInfoRepository, \Eccube\Service\SchemaService $schemaService, \Eccube\Service\PluginContext $pluginContext)
    {
        static $reflection;
        if (! $this->valueHoldera1a84) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
            $this->valueHoldera1a84 = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig);
        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($this);
        }
        $this->valueHoldera1a84->__construct($eccubeConfig, $baseInfoRepository, $schemaService, $pluginContext);
    }
    public function & __get($name)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, '__get', ['name' => $name], $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        if (isset(self::$publicProperties50817[$name])) {
            return $this->valueHoldera1a84->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\Composer\\ComposerApiService');
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
        unset($this->eccubeConfig);
        \Closure::bind(function (\Eccube\Service\Composer\ComposerApiService $instance) {
            unset($instance->consoleApplication, $instance->workingDir, $instance->baseInfoRepository, $instance->schemaService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\Composer\\ComposerApiService')->__invoke($this);
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
