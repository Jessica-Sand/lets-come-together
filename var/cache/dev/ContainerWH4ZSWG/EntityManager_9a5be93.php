<?php

namespace ContainerWH4ZSWG;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb0dfe = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7ec95 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescef9b = [
        
    ];

    public function getConnection()
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'getConnection', array(), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'getMetadataFactory', array(), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'getExpressionBuilder', array(), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'beginTransaction', array(), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'getCache', array(), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'transactional', array('func' => $func), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->transactional($func);
    }

    public function commit()
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'commit', array(), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->commit();
    }

    public function rollback()
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'rollback', array(), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'getClassMetadata', array('className' => $className), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'createQuery', array('dql' => $dql), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'createNamedQuery', array('name' => $name), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'createQueryBuilder', array(), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'flush', array('entity' => $entity), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'clear', array('entityName' => $entityName), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->clear($entityName);
    }

    public function close()
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'close', array(), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->close();
    }

    public function persist($entity)
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'persist', array('entity' => $entity), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'remove', array('entity' => $entity), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'refresh', array('entity' => $entity), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'detach', array('entity' => $entity), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'merge', array('entity' => $entity), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'contains', array('entity' => $entity), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'getEventManager', array(), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'getConfiguration', array(), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'isOpen', array(), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'getUnitOfWork', array(), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'getProxyFactory', array(), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'initializeObject', array('obj' => $obj), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'getFilters', array(), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'isFiltersStateClean', array(), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'hasFilters', array(), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return $this->valueHolderb0dfe->hasFilters();
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

        $instance->initializer7ec95 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb0dfe) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb0dfe = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb0dfe->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, '__get', ['name' => $name], $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        if (isset(self::$publicPropertiescef9b[$name])) {
            return $this->valueHolderb0dfe->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb0dfe;

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

        $targetObject = $this->valueHolderb0dfe;
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
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb0dfe;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb0dfe;
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
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, '__isset', array('name' => $name), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb0dfe;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb0dfe;
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
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, '__unset', array('name' => $name), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb0dfe;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb0dfe;
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
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, '__clone', array(), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        $this->valueHolderb0dfe = clone $this->valueHolderb0dfe;
    }

    public function __sleep()
    {
        $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, '__sleep', array(), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;

        return array('valueHolderb0dfe');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7ec95 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7ec95;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7ec95 && ($this->initializer7ec95->__invoke($valueHolderb0dfe, $this, 'initializeProxy', array(), $this->initializer7ec95) || 1) && $this->valueHolderb0dfe = $valueHolderb0dfe;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb0dfe;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb0dfe;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
