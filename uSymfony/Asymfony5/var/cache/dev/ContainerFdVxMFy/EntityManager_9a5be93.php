<?php

namespace ContainerFdVxMFy;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6427e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4b7b8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1712e = [
        
    ];

    public function getConnection()
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'getConnection', array(), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'getMetadataFactory', array(), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'getExpressionBuilder', array(), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'beginTransaction', array(), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'getCache', array(), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'transactional', array('func' => $func), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'commit', array(), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->commit();
    }

    public function rollback()
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'rollback', array(), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'getClassMetadata', array('className' => $className), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'createQuery', array('dql' => $dql), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'createNamedQuery', array('name' => $name), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'createQueryBuilder', array(), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'flush', array('entity' => $entity), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'clear', array('entityName' => $entityName), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->clear($entityName);
    }

    public function close()
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'close', array(), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->close();
    }

    public function persist($entity)
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'persist', array('entity' => $entity), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'remove', array('entity' => $entity), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'detach', array('entity' => $entity), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'merge', array('entity' => $entity), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'contains', array('entity' => $entity), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'getEventManager', array(), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'getConfiguration', array(), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'isOpen', array(), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'getUnitOfWork', array(), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'getProxyFactory', array(), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'initializeObject', array('obj' => $obj), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'getFilters', array(), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'isFiltersStateClean', array(), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'hasFilters', array(), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return $this->valueHolder6427e->hasFilters();
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

        $instance->initializer4b7b8 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder6427e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6427e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6427e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, '__get', ['name' => $name], $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        if (isset(self::$publicProperties1712e[$name])) {
            return $this->valueHolder6427e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6427e;

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

        $targetObject = $this->valueHolder6427e;
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
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6427e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6427e;
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
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, '__isset', array('name' => $name), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6427e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6427e;
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
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, '__unset', array('name' => $name), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6427e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6427e;
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
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, '__clone', array(), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        $this->valueHolder6427e = clone $this->valueHolder6427e;
    }

    public function __sleep()
    {
        $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, '__sleep', array(), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;

        return array('valueHolder6427e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4b7b8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4b7b8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4b7b8 && ($this->initializer4b7b8->__invoke($valueHolder6427e, $this, 'initializeProxy', array(), $this->initializer4b7b8) || 1) && $this->valueHolder6427e = $valueHolder6427e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6427e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6427e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
