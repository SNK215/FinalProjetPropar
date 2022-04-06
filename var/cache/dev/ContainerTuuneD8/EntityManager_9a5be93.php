<?php

namespace ContainerTuuneD8;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder76226 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer42a5a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese7781 = [
        
    ];

    public function getConnection()
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'getConnection', array(), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'getMetadataFactory', array(), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'getExpressionBuilder', array(), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'beginTransaction', array(), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'getCache', array(), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->getCache();
    }

    public function transactional($func)
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'transactional', array('func' => $func), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'wrapInTransaction', array('func' => $func), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'commit', array(), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->commit();
    }

    public function rollback()
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'rollback', array(), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'getClassMetadata', array('className' => $className), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'createQuery', array('dql' => $dql), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'createNamedQuery', array('name' => $name), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'createQueryBuilder', array(), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'flush', array('entity' => $entity), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'clear', array('entityName' => $entityName), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->clear($entityName);
    }

    public function close()
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'close', array(), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->close();
    }

    public function persist($entity)
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'persist', array('entity' => $entity), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'remove', array('entity' => $entity), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'refresh', array('entity' => $entity), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'detach', array('entity' => $entity), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'merge', array('entity' => $entity), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'getRepository', array('entityName' => $entityName), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'contains', array('entity' => $entity), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'getEventManager', array(), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'getConfiguration', array(), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'isOpen', array(), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'getUnitOfWork', array(), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'getProxyFactory', array(), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'initializeObject', array('obj' => $obj), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'getFilters', array(), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'isFiltersStateClean', array(), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'hasFilters', array(), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return $this->valueHolder76226->hasFilters();
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

        $instance->initializer42a5a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder76226) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder76226 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder76226->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, '__get', ['name' => $name], $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        if (isset(self::$publicPropertiese7781[$name])) {
            return $this->valueHolder76226->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder76226;

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

        $targetObject = $this->valueHolder76226;
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
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder76226;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder76226;
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
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, '__isset', array('name' => $name), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder76226;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder76226;
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
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, '__unset', array('name' => $name), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder76226;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder76226;
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
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, '__clone', array(), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        $this->valueHolder76226 = clone $this->valueHolder76226;
    }

    public function __sleep()
    {
        $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, '__sleep', array(), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;

        return array('valueHolder76226');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer42a5a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer42a5a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer42a5a && ($this->initializer42a5a->__invoke($valueHolder76226, $this, 'initializeProxy', array(), $this->initializer42a5a) || 1) && $this->valueHolder76226 = $valueHolder76226;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder76226;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder76226;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
