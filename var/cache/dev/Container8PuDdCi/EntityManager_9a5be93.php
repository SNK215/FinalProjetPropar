<?php

namespace Container8PuDdCi;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3dc32 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer775fe = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfff0b = [
        
    ];

    public function getConnection()
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'getConnection', array(), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'getMetadataFactory', array(), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'getExpressionBuilder', array(), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'beginTransaction', array(), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'getCache', array(), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->getCache();
    }

    public function transactional($func)
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'transactional', array('func' => $func), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'wrapInTransaction', array('func' => $func), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'commit', array(), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->commit();
    }

    public function rollback()
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'rollback', array(), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'getClassMetadata', array('className' => $className), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'createQuery', array('dql' => $dql), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'createNamedQuery', array('name' => $name), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'createQueryBuilder', array(), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'flush', array('entity' => $entity), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'clear', array('entityName' => $entityName), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->clear($entityName);
    }

    public function close()
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'close', array(), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->close();
    }

    public function persist($entity)
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'persist', array('entity' => $entity), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'remove', array('entity' => $entity), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'refresh', array('entity' => $entity), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'detach', array('entity' => $entity), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'merge', array('entity' => $entity), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'getRepository', array('entityName' => $entityName), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'contains', array('entity' => $entity), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'getEventManager', array(), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'getConfiguration', array(), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'isOpen', array(), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'getUnitOfWork', array(), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'getProxyFactory', array(), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'initializeObject', array('obj' => $obj), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'getFilters', array(), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'isFiltersStateClean', array(), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'hasFilters', array(), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return $this->valueHolder3dc32->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer775fe = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3dc32) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3dc32 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3dc32->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, '__get', ['name' => $name], $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        if (isset(self::$publicPropertiesfff0b[$name])) {
            return $this->valueHolder3dc32->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3dc32;

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

        $targetObject = $this->valueHolder3dc32;
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
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3dc32;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3dc32;
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
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, '__isset', array('name' => $name), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3dc32;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3dc32;
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
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, '__unset', array('name' => $name), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3dc32;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3dc32;
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
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, '__clone', array(), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        $this->valueHolder3dc32 = clone $this->valueHolder3dc32;
    }

    public function __sleep()
    {
        $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, '__sleep', array(), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;

        return array('valueHolder3dc32');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer775fe = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer775fe;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer775fe && ($this->initializer775fe->__invoke($valueHolder3dc32, $this, 'initializeProxy', array(), $this->initializer775fe) || 1) && $this->valueHolder3dc32 = $valueHolder3dc32;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3dc32;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3dc32;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
