<?php

namespace ContainerUoIKqY2;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera008e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb9c2b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9ab08 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'getConnection', array(), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'getMetadataFactory', array(), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'getExpressionBuilder', array(), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'beginTransaction', array(), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'getCache', array(), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'transactional', array('func' => $func), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'commit', array(), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->commit();
    }

    public function rollback()
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'rollback', array(), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'getClassMetadata', array('className' => $className), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'createQuery', array('dql' => $dql), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'createNamedQuery', array('name' => $name), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'createQueryBuilder', array(), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'flush', array('entity' => $entity), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'clear', array('entityName' => $entityName), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->clear($entityName);
    }

    public function close()
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'close', array(), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->close();
    }

    public function persist($entity)
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'persist', array('entity' => $entity), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'remove', array('entity' => $entity), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'refresh', array('entity' => $entity), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'detach', array('entity' => $entity), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'merge', array('entity' => $entity), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'contains', array('entity' => $entity), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'getEventManager', array(), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'getConfiguration', array(), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'isOpen', array(), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'getUnitOfWork', array(), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'getProxyFactory', array(), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'initializeObject', array('obj' => $obj), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'getFilters', array(), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'isFiltersStateClean', array(), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'hasFilters', array(), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return $this->valueHoldera008e->hasFilters();
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

        $instance->initializerb9c2b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera008e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera008e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera008e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, '__get', ['name' => $name], $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        if (isset(self::$publicProperties9ab08[$name])) {
            return $this->valueHoldera008e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera008e;

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

        $targetObject = $this->valueHoldera008e;
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
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera008e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera008e;
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
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, '__isset', array('name' => $name), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera008e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera008e;
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
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, '__unset', array('name' => $name), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera008e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera008e;
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
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, '__clone', array(), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        $this->valueHoldera008e = clone $this->valueHoldera008e;
    }

    public function __sleep()
    {
        $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, '__sleep', array(), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;

        return array('valueHoldera008e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb9c2b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb9c2b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb9c2b && ($this->initializerb9c2b->__invoke($valueHoldera008e, $this, 'initializeProxy', array(), $this->initializerb9c2b) || 1) && $this->valueHoldera008e = $valueHoldera008e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera008e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera008e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
