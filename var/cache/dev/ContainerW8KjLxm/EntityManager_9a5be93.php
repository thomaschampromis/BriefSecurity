<?php

namespace ContainerW8KjLxm;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd412a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer9fef2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2a70e = [
        
    ];

    public function getConnection()
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'getConnection', array(), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'getMetadataFactory', array(), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'getExpressionBuilder', array(), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'beginTransaction', array(), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'getCache', array(), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'transactional', array('func' => $func), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'commit', array(), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->commit();
    }

    public function rollback()
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'rollback', array(), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'getClassMetadata', array('className' => $className), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'createQuery', array('dql' => $dql), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'createNamedQuery', array('name' => $name), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'createQueryBuilder', array(), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'flush', array('entity' => $entity), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'clear', array('entityName' => $entityName), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->clear($entityName);
    }

    public function close()
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'close', array(), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->close();
    }

    public function persist($entity)
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'persist', array('entity' => $entity), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'remove', array('entity' => $entity), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'refresh', array('entity' => $entity), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'detach', array('entity' => $entity), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'merge', array('entity' => $entity), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'contains', array('entity' => $entity), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'getEventManager', array(), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'getConfiguration', array(), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'isOpen', array(), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'getUnitOfWork', array(), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'getProxyFactory', array(), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'initializeObject', array('obj' => $obj), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'getFilters', array(), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'isFiltersStateClean', array(), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'hasFilters', array(), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return $this->valueHolderd412a->hasFilters();
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

        $instance->initializer9fef2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd412a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd412a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd412a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, '__get', ['name' => $name], $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        if (isset(self::$publicProperties2a70e[$name])) {
            return $this->valueHolderd412a->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd412a;

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

        $targetObject = $this->valueHolderd412a;
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
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd412a;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd412a;
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
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, '__isset', array('name' => $name), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd412a;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd412a;
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
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, '__unset', array('name' => $name), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd412a;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd412a;
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
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, '__clone', array(), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        $this->valueHolderd412a = clone $this->valueHolderd412a;
    }

    public function __sleep()
    {
        $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, '__sleep', array(), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;

        return array('valueHolderd412a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer9fef2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer9fef2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer9fef2 && ($this->initializer9fef2->__invoke($valueHolderd412a, $this, 'initializeProxy', array(), $this->initializer9fef2) || 1) && $this->valueHolderd412a = $valueHolderd412a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd412a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd412a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
