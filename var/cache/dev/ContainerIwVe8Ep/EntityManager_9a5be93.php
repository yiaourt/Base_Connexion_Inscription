<?php

namespace ContainerIwVe8Ep;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldercf66a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer92359 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb11bc = [
        
    ];

    public function getConnection()
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'getConnection', array(), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'getMetadataFactory', array(), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'getExpressionBuilder', array(), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'beginTransaction', array(), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'getCache', array(), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'transactional', array('func' => $func), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'commit', array(), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->commit();
    }

    public function rollback()
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'rollback', array(), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'getClassMetadata', array('className' => $className), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'createQuery', array('dql' => $dql), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'createNamedQuery', array('name' => $name), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'createQueryBuilder', array(), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'flush', array('entity' => $entity), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'clear', array('entityName' => $entityName), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->clear($entityName);
    }

    public function close()
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'close', array(), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->close();
    }

    public function persist($entity)
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'persist', array('entity' => $entity), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'remove', array('entity' => $entity), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'refresh', array('entity' => $entity), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'detach', array('entity' => $entity), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'merge', array('entity' => $entity), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'contains', array('entity' => $entity), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'getEventManager', array(), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'getConfiguration', array(), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'isOpen', array(), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'getUnitOfWork', array(), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'getProxyFactory', array(), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'initializeObject', array('obj' => $obj), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'getFilters', array(), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'isFiltersStateClean', array(), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'hasFilters', array(), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return $this->valueHoldercf66a->hasFilters();
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

        $instance->initializer92359 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldercf66a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldercf66a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldercf66a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, '__get', ['name' => $name], $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        if (isset(self::$publicPropertiesb11bc[$name])) {
            return $this->valueHoldercf66a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf66a;

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

        $targetObject = $this->valueHoldercf66a;
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
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf66a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldercf66a;
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
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, '__isset', array('name' => $name), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf66a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldercf66a;
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
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, '__unset', array('name' => $name), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldercf66a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldercf66a;
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
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, '__clone', array(), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        $this->valueHoldercf66a = clone $this->valueHoldercf66a;
    }

    public function __sleep()
    {
        $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, '__sleep', array(), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;

        return array('valueHoldercf66a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer92359 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer92359;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer92359 && ($this->initializer92359->__invoke($valueHoldercf66a, $this, 'initializeProxy', array(), $this->initializer92359) || 1) && $this->valueHoldercf66a = $valueHoldercf66a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldercf66a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldercf66a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
