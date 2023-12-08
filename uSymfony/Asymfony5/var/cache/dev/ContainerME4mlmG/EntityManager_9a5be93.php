<?php

namespace ContainerME4mlmG;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder63c16 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5dfa1 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1bb00 = [
        
    ];

    public function getConnection()
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'getConnection', array(), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'getMetadataFactory', array(), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'getExpressionBuilder', array(), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'beginTransaction', array(), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'getCache', array(), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'transactional', array('func' => $func), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'commit', array(), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->commit();
    }

    public function rollback()
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'rollback', array(), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'getClassMetadata', array('className' => $className), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'createQuery', array('dql' => $dql), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'createNamedQuery', array('name' => $name), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'createQueryBuilder', array(), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'flush', array('entity' => $entity), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'clear', array('entityName' => $entityName), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->clear($entityName);
    }

    public function close()
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'close', array(), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->close();
    }

    public function persist($entity)
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'persist', array('entity' => $entity), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'remove', array('entity' => $entity), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'detach', array('entity' => $entity), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'merge', array('entity' => $entity), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'contains', array('entity' => $entity), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'getEventManager', array(), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'getConfiguration', array(), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'isOpen', array(), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'getUnitOfWork', array(), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'getProxyFactory', array(), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'initializeObject', array('obj' => $obj), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'getFilters', array(), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'isFiltersStateClean', array(), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'hasFilters', array(), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return $this->valueHolder63c16->hasFilters();
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

        $instance->initializer5dfa1 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder63c16) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder63c16 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder63c16->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, '__get', ['name' => $name], $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        if (isset(self::$publicProperties1bb00[$name])) {
            return $this->valueHolder63c16->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder63c16;

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

        $targetObject = $this->valueHolder63c16;
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
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder63c16;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder63c16;
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
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, '__isset', array('name' => $name), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder63c16;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder63c16;
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
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, '__unset', array('name' => $name), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder63c16;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder63c16;
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
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, '__clone', array(), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        $this->valueHolder63c16 = clone $this->valueHolder63c16;
    }

    public function __sleep()
    {
        $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, '__sleep', array(), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;

        return array('valueHolder63c16');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5dfa1 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5dfa1;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5dfa1 && ($this->initializer5dfa1->__invoke($valueHolder63c16, $this, 'initializeProxy', array(), $this->initializer5dfa1) || 1) && $this->valueHolder63c16 = $valueHolder63c16;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder63c16;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder63c16;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
