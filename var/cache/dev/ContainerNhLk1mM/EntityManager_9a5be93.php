<?php

namespace ContainerNhLk1mM;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf2aa5 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer20dde = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9adcc = [
        
    ];

    public function getConnection()
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'getConnection', array(), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'getMetadataFactory', array(), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'getExpressionBuilder', array(), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'beginTransaction', array(), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'getCache', array(), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->getCache();
    }

    public function transactional($func)
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'transactional', array('func' => $func), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->transactional($func);
    }

    public function commit()
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'commit', array(), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->commit();
    }

    public function rollback()
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'rollback', array(), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'getClassMetadata', array('className' => $className), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'createQuery', array('dql' => $dql), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'createNamedQuery', array('name' => $name), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'createQueryBuilder', array(), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'flush', array('entity' => $entity), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'clear', array('entityName' => $entityName), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->clear($entityName);
    }

    public function close()
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'close', array(), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->close();
    }

    public function persist($entity)
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'persist', array('entity' => $entity), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'remove', array('entity' => $entity), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'refresh', array('entity' => $entity), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'detach', array('entity' => $entity), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'merge', array('entity' => $entity), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'getRepository', array('entityName' => $entityName), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'contains', array('entity' => $entity), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'getEventManager', array(), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'getConfiguration', array(), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'isOpen', array(), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'getUnitOfWork', array(), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'getProxyFactory', array(), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'initializeObject', array('obj' => $obj), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'getFilters', array(), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'isFiltersStateClean', array(), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'hasFilters', array(), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return $this->valueHolderf2aa5->hasFilters();
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

        $instance->initializer20dde = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf2aa5) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf2aa5 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf2aa5->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, '__get', ['name' => $name], $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        if (isset(self::$publicProperties9adcc[$name])) {
            return $this->valueHolderf2aa5->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2aa5;

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

        $targetObject = $this->valueHolderf2aa5;
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
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2aa5;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf2aa5;
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
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, '__isset', array('name' => $name), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2aa5;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf2aa5;
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
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, '__unset', array('name' => $name), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf2aa5;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf2aa5;
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
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, '__clone', array(), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        $this->valueHolderf2aa5 = clone $this->valueHolderf2aa5;
    }

    public function __sleep()
    {
        $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, '__sleep', array(), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;

        return array('valueHolderf2aa5');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer20dde = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer20dde;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer20dde && ($this->initializer20dde->__invoke($valueHolderf2aa5, $this, 'initializeProxy', array(), $this->initializer20dde) || 1) && $this->valueHolderf2aa5 = $valueHolderf2aa5;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf2aa5;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf2aa5;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
