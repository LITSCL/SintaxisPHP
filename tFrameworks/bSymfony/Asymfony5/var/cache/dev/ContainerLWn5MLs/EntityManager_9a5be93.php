<?php

namespace ContainerLWn5MLs;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder2dd99 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera8100 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties6f2ee = [
        
    ];

    public function getConnection()
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'getConnection', array(), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'getMetadataFactory', array(), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'getExpressionBuilder', array(), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'beginTransaction', array(), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'getCache', array(), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->getCache();
    }

    public function transactional($func)
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'transactional', array('func' => $func), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'wrapInTransaction', array('func' => $func), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'commit', array(), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->commit();
    }

    public function rollback()
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'rollback', array(), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'getClassMetadata', array('className' => $className), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'createQuery', array('dql' => $dql), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'createNamedQuery', array('name' => $name), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'createQueryBuilder', array(), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'flush', array('entity' => $entity), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'clear', array('entityName' => $entityName), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->clear($entityName);
    }

    public function close()
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'close', array(), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->close();
    }

    public function persist($entity)
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'persist', array('entity' => $entity), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'remove', array('entity' => $entity), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'detach', array('entity' => $entity), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'merge', array('entity' => $entity), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'getRepository', array('entityName' => $entityName), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'contains', array('entity' => $entity), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'getEventManager', array(), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'getConfiguration', array(), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'isOpen', array(), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'getUnitOfWork', array(), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'getProxyFactory', array(), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'initializeObject', array('obj' => $obj), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'getFilters', array(), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'isFiltersStateClean', array(), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'hasFilters', array(), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return $this->valueHolder2dd99->hasFilters();
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

        $instance->initializera8100 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder2dd99) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder2dd99 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder2dd99->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, '__get', ['name' => $name], $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        if (isset(self::$publicProperties6f2ee[$name])) {
            return $this->valueHolder2dd99->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2dd99;

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

        $targetObject = $this->valueHolder2dd99;
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
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2dd99;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder2dd99;
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
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, '__isset', array('name' => $name), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2dd99;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder2dd99;
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
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, '__unset', array('name' => $name), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder2dd99;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder2dd99;
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
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, '__clone', array(), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        $this->valueHolder2dd99 = clone $this->valueHolder2dd99;
    }

    public function __sleep()
    {
        $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, '__sleep', array(), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;

        return array('valueHolder2dd99');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera8100 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera8100;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera8100 && ($this->initializera8100->__invoke($valueHolder2dd99, $this, 'initializeProxy', array(), $this->initializera8100) || 1) && $this->valueHolder2dd99 = $valueHolder2dd99;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder2dd99;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder2dd99;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
