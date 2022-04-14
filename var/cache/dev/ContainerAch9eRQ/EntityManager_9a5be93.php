<?php

namespace ContainerAch9eRQ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3af5c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7a95e = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd0581 = [
        
    ];

    public function getConnection()
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'getConnection', array(), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'getMetadataFactory', array(), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'getExpressionBuilder', array(), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'beginTransaction', array(), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'getCache', array(), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'transactional', array('func' => $func), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'wrapInTransaction', array('func' => $func), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'commit', array(), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->commit();
    }

    public function rollback()
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'rollback', array(), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'getClassMetadata', array('className' => $className), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'createQuery', array('dql' => $dql), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'createNamedQuery', array('name' => $name), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'createQueryBuilder', array(), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'flush', array('entity' => $entity), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'clear', array('entityName' => $entityName), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->clear($entityName);
    }

    public function close()
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'close', array(), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->close();
    }

    public function persist($entity)
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'persist', array('entity' => $entity), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'remove', array('entity' => $entity), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'refresh', array('entity' => $entity), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'detach', array('entity' => $entity), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'merge', array('entity' => $entity), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'contains', array('entity' => $entity), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'getEventManager', array(), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'getConfiguration', array(), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'isOpen', array(), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'getUnitOfWork', array(), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'getProxyFactory', array(), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'initializeObject', array('obj' => $obj), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'getFilters', array(), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'isFiltersStateClean', array(), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'hasFilters', array(), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return $this->valueHolder3af5c->hasFilters();
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

        $instance->initializer7a95e = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder3af5c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3af5c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3af5c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, '__get', ['name' => $name], $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        if (isset(self::$publicPropertiesd0581[$name])) {
            return $this->valueHolder3af5c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3af5c;

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

        $targetObject = $this->valueHolder3af5c;
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
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3af5c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3af5c;
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
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, '__isset', array('name' => $name), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3af5c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3af5c;
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
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, '__unset', array('name' => $name), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3af5c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3af5c;
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
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, '__clone', array(), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        $this->valueHolder3af5c = clone $this->valueHolder3af5c;
    }

    public function __sleep()
    {
        $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, '__sleep', array(), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;

        return array('valueHolder3af5c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7a95e = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7a95e;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7a95e && ($this->initializer7a95e->__invoke($valueHolder3af5c, $this, 'initializeProxy', array(), $this->initializer7a95e) || 1) && $this->valueHolder3af5c = $valueHolder3af5c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3af5c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3af5c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
