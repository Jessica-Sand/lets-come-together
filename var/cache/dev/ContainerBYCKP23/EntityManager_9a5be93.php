<?php

namespace ContainerBYCKP23;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8615b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerfa4d6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd771e = [
        
    ];

    public function getConnection()
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'getConnection', array(), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'getMetadataFactory', array(), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'getExpressionBuilder', array(), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'beginTransaction', array(), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'getCache', array(), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->getCache();
    }

    public function transactional($func)
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'transactional', array('func' => $func), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->transactional($func);
    }

    public function commit()
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'commit', array(), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->commit();
    }

    public function rollback()
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'rollback', array(), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'getClassMetadata', array('className' => $className), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'createQuery', array('dql' => $dql), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'createNamedQuery', array('name' => $name), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'createQueryBuilder', array(), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'flush', array('entity' => $entity), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'clear', array('entityName' => $entityName), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->clear($entityName);
    }

    public function close()
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'close', array(), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->close();
    }

    public function persist($entity)
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'persist', array('entity' => $entity), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'remove', array('entity' => $entity), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'refresh', array('entity' => $entity), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'detach', array('entity' => $entity), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'merge', array('entity' => $entity), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'getRepository', array('entityName' => $entityName), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'contains', array('entity' => $entity), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'getEventManager', array(), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'getConfiguration', array(), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'isOpen', array(), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'getUnitOfWork', array(), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'getProxyFactory', array(), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'initializeObject', array('obj' => $obj), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'getFilters', array(), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'isFiltersStateClean', array(), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'hasFilters', array(), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return $this->valueHolder8615b->hasFilters();
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

        $instance->initializerfa4d6 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8615b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8615b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8615b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, '__get', ['name' => $name], $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        if (isset(self::$publicPropertiesd771e[$name])) {
            return $this->valueHolder8615b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8615b;

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

        $targetObject = $this->valueHolder8615b;
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
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8615b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8615b;
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
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, '__isset', array('name' => $name), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8615b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8615b;
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
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, '__unset', array('name' => $name), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8615b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8615b;
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
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, '__clone', array(), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        $this->valueHolder8615b = clone $this->valueHolder8615b;
    }

    public function __sleep()
    {
        $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, '__sleep', array(), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;

        return array('valueHolder8615b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerfa4d6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerfa4d6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerfa4d6 && ($this->initializerfa4d6->__invoke($valueHolder8615b, $this, 'initializeProxy', array(), $this->initializerfa4d6) || 1) && $this->valueHolder8615b = $valueHolder8615b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8615b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8615b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
