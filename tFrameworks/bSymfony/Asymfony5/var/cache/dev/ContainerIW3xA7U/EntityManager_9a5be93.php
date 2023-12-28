<?php

namespace ContainerIW3xA7U;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder94eff = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6b97d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa43db = [
        
    ];

    public function getConnection()
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'getConnection', array(), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'getMetadataFactory', array(), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'getExpressionBuilder', array(), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'beginTransaction', array(), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'getCache', array(), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'transactional', array('func' => $func), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'commit', array(), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->commit();
    }

    public function rollback()
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'rollback', array(), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'getClassMetadata', array('className' => $className), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'createQuery', array('dql' => $dql), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'createNamedQuery', array('name' => $name), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'createQueryBuilder', array(), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'flush', array('entity' => $entity), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'clear', array('entityName' => $entityName), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->clear($entityName);
    }

    public function close()
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'close', array(), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->close();
    }

    public function persist($entity)
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'persist', array('entity' => $entity), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'remove', array('entity' => $entity), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'detach', array('entity' => $entity), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'merge', array('entity' => $entity), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'contains', array('entity' => $entity), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'getEventManager', array(), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'getConfiguration', array(), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'isOpen', array(), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'getUnitOfWork', array(), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'getProxyFactory', array(), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'initializeObject', array('obj' => $obj), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'getFilters', array(), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'isFiltersStateClean', array(), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'hasFilters', array(), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return $this->valueHolder94eff->hasFilters();
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

        $instance->initializer6b97d = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder94eff) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder94eff = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder94eff->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, '__get', ['name' => $name], $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        if (isset(self::$publicPropertiesa43db[$name])) {
            return $this->valueHolder94eff->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder94eff;

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

        $targetObject = $this->valueHolder94eff;
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
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder94eff;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder94eff;
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
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, '__isset', array('name' => $name), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder94eff;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder94eff;
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
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, '__unset', array('name' => $name), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder94eff;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder94eff;
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
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, '__clone', array(), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        $this->valueHolder94eff = clone $this->valueHolder94eff;
    }

    public function __sleep()
    {
        $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, '__sleep', array(), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;

        return array('valueHolder94eff');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6b97d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6b97d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6b97d && ($this->initializer6b97d->__invoke($valueHolder94eff, $this, 'initializeProxy', array(), $this->initializer6b97d) || 1) && $this->valueHolder94eff = $valueHolder94eff;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder94eff;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder94eff;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
