<?php

namespace ContainerGJLBiHk;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder3e441 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer04810 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb8198 = [
        
    ];

    public function getConnection()
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'getConnection', array(), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'getMetadataFactory', array(), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'getExpressionBuilder', array(), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'beginTransaction', array(), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'getCache', array(), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->getCache();
    }

    public function transactional($func)
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'transactional', array('func' => $func), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'wrapInTransaction', array('func' => $func), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'commit', array(), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->commit();
    }

    public function rollback()
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'rollback', array(), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'getClassMetadata', array('className' => $className), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'createQuery', array('dql' => $dql), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'createNamedQuery', array('name' => $name), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'createQueryBuilder', array(), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'flush', array('entity' => $entity), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'clear', array('entityName' => $entityName), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->clear($entityName);
    }

    public function close()
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'close', array(), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->close();
    }

    public function persist($entity)
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'persist', array('entity' => $entity), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'remove', array('entity' => $entity), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'detach', array('entity' => $entity), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'merge', array('entity' => $entity), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'getRepository', array('entityName' => $entityName), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'contains', array('entity' => $entity), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'getEventManager', array(), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'getConfiguration', array(), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'isOpen', array(), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'getUnitOfWork', array(), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'getProxyFactory', array(), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'initializeObject', array('obj' => $obj), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'getFilters', array(), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'isFiltersStateClean', array(), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'hasFilters', array(), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return $this->valueHolder3e441->hasFilters();
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

        $instance->initializer04810 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder3e441) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder3e441 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder3e441->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, '__get', ['name' => $name], $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        if (isset(self::$publicPropertiesb8198[$name])) {
            return $this->valueHolder3e441->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3e441;

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

        $targetObject = $this->valueHolder3e441;
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
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3e441;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder3e441;
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
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, '__isset', array('name' => $name), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3e441;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder3e441;
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
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, '__unset', array('name' => $name), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder3e441;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder3e441;
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
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, '__clone', array(), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        $this->valueHolder3e441 = clone $this->valueHolder3e441;
    }

    public function __sleep()
    {
        $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, '__sleep', array(), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;

        return array('valueHolder3e441');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer04810 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer04810;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer04810 && ($this->initializer04810->__invoke($valueHolder3e441, $this, 'initializeProxy', array(), $this->initializer04810) || 1) && $this->valueHolder3e441 = $valueHolder3e441;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder3e441;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder3e441;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
