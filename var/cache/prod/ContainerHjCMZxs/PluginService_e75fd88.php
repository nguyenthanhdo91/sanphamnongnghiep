<?php

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PluginService.php';
class PluginService_e75fd88 extends \Eccube\Service\PluginService implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera1a84 = null;
    private $initializer6b24f = null;
    private static $publicProperties50817 = [
        
    ];
    public function install($path, $source = 0)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'install', array('path' => $path, 'source' => $source), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->install($path, $source);
    }
    public function installWithCode($code)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'installWithCode', array('code' => $code), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->installWithCode($code);
    }
    public function preInstall()
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'preInstall', array(), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->preInstall();
    }
    public function postInstall($config, $source)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'postInstall', array('config' => $config, 'source' => $source), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->postInstall($config, $source);
    }
    public function generateProxyAndUpdateSchema(\Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $saveMode = true)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'generateProxyAndUpdateSchema', array('plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'saveMode' => $saveMode), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->generateProxyAndUpdateSchema($plugin, $config, $uninstall, $saveMode);
    }
    public function generateProxyAndCallback(callable $callback, \Eccube\Entity\Plugin $plugin, $config, $uninstall = false, $tmpProxyOutputDir = null)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'generateProxyAndCallback', array('callback' => $callback, 'plugin' => $plugin, 'config' => $config, 'uninstall' => $uninstall, 'tmpProxyOutputDir' => $tmpProxyOutputDir), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->generateProxyAndCallback($callback, $plugin, $config, $uninstall, $tmpProxyOutputDir);
    }
    public function createTempDir()
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'createTempDir', array(), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->createTempDir();
    }
    public function deleteDirs($arr)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'deleteDirs', array('arr' => $arr), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->deleteDirs($arr);
    }
    public function unpackPluginArchive($archive, $dir)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'unpackPluginArchive', array('archive' => $archive, 'dir' => $dir), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->unpackPluginArchive($archive, $dir);
    }
    public function checkPluginArchiveContent($dir, array $config_cache = [])
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'checkPluginArchiveContent', array('dir' => $dir, 'config_cache' => $config_cache), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->checkPluginArchiveContent($dir, $config_cache);
    }
    public function readConfig($pluginDir)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'readConfig', array('pluginDir' => $pluginDir), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->readConfig($pluginDir);
    }
    public function checkSymbolName($string)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'checkSymbolName', array('string' => $string), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->checkSymbolName($string);
    }
    public function deleteFile($path)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'deleteFile', array('path' => $path), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->deleteFile($path);
    }
    public function checkSamePlugin($code)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'checkSamePlugin', array('code' => $code), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->checkSamePlugin($code);
    }
    public function calcPluginDir($code)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'calcPluginDir', array('code' => $code), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->calcPluginDir($code);
    }
    public function createPluginDir($d)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'createPluginDir', array('d' => $d), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->createPluginDir($d);
    }
    public function registerPlugin($meta, $source = 0)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'registerPlugin', array('meta' => $meta, 'source' => $source), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->registerPlugin($meta, $source);
    }
    public function callPluginManagerMethod($meta, $method)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'callPluginManagerMethod', array('meta' => $meta, 'method' => $method), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->callPluginManagerMethod($meta, $method);
    }
    public function uninstall(\Eccube\Entity\Plugin $plugin, $force = true)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'uninstall', array('plugin' => $plugin, 'force' => $force), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->uninstall($plugin, $force);
    }
    public function unregisterPlugin(\Eccube\Entity\Plugin $p)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'unregisterPlugin', array('p' => $p), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->unregisterPlugin($p);
    }
    public function disable(\Eccube\Entity\Plugin $plugin)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'disable', array('plugin' => $plugin), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->disable($plugin);
    }
    public function enable(\Eccube\Entity\Plugin $plugin, $enable = true)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'enable', array('plugin' => $plugin, 'enable' => $enable), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->enable($plugin, $enable);
    }
    public function update(\Eccube\Entity\Plugin $plugin, $path)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'update', array('plugin' => $plugin, 'path' => $path), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->update($plugin, $path);
    }
    public function updatePlugin(\Eccube\Entity\Plugin $plugin, $meta)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'updatePlugin', array('plugin' => $plugin, 'meta' => $meta), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->updatePlugin($plugin, $meta);
    }
    public function getPluginRequired($plugin)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'getPluginRequired', array('plugin' => $plugin), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->getPluginRequired($plugin);
    }
    public function findDependentPluginNeedDisable($pluginCode)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'findDependentPluginNeedDisable', array('pluginCode' => $pluginCode), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->findDependentPluginNeedDisable($pluginCode);
    }
    public function findDependentPlugin($pluginCode, $enableOnly = false)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'findDependentPlugin', array('pluginCode' => $pluginCode, 'enableOnly' => $enableOnly), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->findDependentPlugin($pluginCode, $enableOnly);
    }
    public function getDependentByCode($pluginCode, $libraryType = null)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'getDependentByCode', array('pluginCode' => $pluginCode, 'libraryType' => $libraryType), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->getDependentByCode($pluginCode, $libraryType);
    }
    public function parseToComposerCommand(array $packages, $getVersion = true)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'parseToComposerCommand', array('packages' => $packages, 'getVersion' => $getVersion), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->parseToComposerCommand($packages, $getVersion);
    }
    public function copyAssets($pluginCode)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'copyAssets', array('pluginCode' => $pluginCode), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->copyAssets($pluginCode);
    }
    public function removeAssets($pluginCode)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'removeAssets', array('pluginCode' => $pluginCode), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->removeAssets($pluginCode);
    }
    public function checkPluginExist($plugins, $pluginCode)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, 'checkPluginExist', array('plugins' => $plugins, 'pluginCode' => $pluginCode), $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        return $this->valueHoldera1a84->checkPluginExist($plugins, $pluginCode);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        unset($instance->eccubeConfig, $instance->entityManager, $instance->pluginRepository, $instance->entityProxyService, $instance->schemaService, $instance->composerService, $instance->container, $instance->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $instance, 'Eccube\\Service\\PluginService')->__invoke($instance);
        $instance->initializer6b24f = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManagerInterface $entityManager, \Eccube\Repository\PluginRepository $pluginRepository, \Eccube\Service\EntityProxyService $entityProxyService, \Eccube\Service\SchemaService $schemaService, \Eccube\Common\EccubeConfig $eccubeConfig, \Symfony\Component\DependencyInjection\ContainerInterface $container, \Eccube\Util\CacheUtil $cacheUtil, \Eccube\Service\Composer\ComposerServiceInterface $composerService, \Eccube\Service\PluginApiService $pluginApiService, \Eccube\Service\SystemService $systemService, \Eccube\Service\PluginContext $pluginContext)
    {
        static $reflection;
        if (! $this->valueHoldera1a84) {
            $reflection = $reflection ?? new \ReflectionClass('Eccube\\Service\\PluginService');
            $this->valueHoldera1a84 = $reflection->newInstanceWithoutConstructor();
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);
        }
        $this->valueHoldera1a84->__construct($entityManager, $pluginRepository, $entityProxyService, $schemaService, $eccubeConfig, $container, $cacheUtil, $composerService, $pluginApiService, $systemService, $pluginContext);
    }
    public function & __get($name)
    {
        $this->initializer6b24f && ($this->initializer6b24f->__invoke($valueHoldera1a84, $this, '__get', ['name' => $name], $this->initializer6b24f) || 1) && $this->valueHoldera1a84 = $valueHoldera1a84;
        if (isset(self::$publicProperties50817[$name])) {
            return $this->valueHoldera1a84->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        $realInstanceReflection = new \ReflectionClass('Eccube\\Service\\PluginService');
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
        unset($this->eccubeConfig, $this->entityManager, $this->pluginRepository, $this->entityProxyService, $this->schemaService, $this->composerService, $this->container, $this->cacheUtil);
        \Closure::bind(function (\Eccube\Service\PluginService $instance) {
            unset($instance->projectRoot, $instance->environment, $instance->pluginApiService, $instance->systemService, $instance->pluginContext);
        }, $this, 'Eccube\\Service\\PluginService')->__invoke($this);
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
