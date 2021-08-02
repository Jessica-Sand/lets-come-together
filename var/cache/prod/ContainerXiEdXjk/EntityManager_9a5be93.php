<?php

namespace ContainerXiEdXjk;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder70e0a = null;
    private $initializer63bd4 = null;
    private static $publicPropertiesee912 = [
        
    ];
    public function getConnection()
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'getConnection', array(), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'getMetadataFactory', array(), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'getExpressionBuilder', array(), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'beginTransaction', array(), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'getCache', array(), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->getCache();
    }
    public function transactional($func)
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'transactional', array('func' => $func), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->transactional($func);
    }
    public function commit()
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'commit', array(), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->commit();
    }
    public function rollback()
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'rollback', array(), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'getClassMetadata', array('className' => $className), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'createQuery', array('dql' => $dql), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'createNamedQuery', array('name' => $name), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'createQueryBuilder', array(), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'flush', array('entity' => $entity), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'clear', array('entityName' => $entityName), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->clear($entityName);
    }
    public function close()
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'close', array(), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->close();
    }
    public function persist($entity)
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'persist', array('entity' => $entity), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'remove', array('entity' => $entity), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'refresh', array('entity' => $entity), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'detach', array('entity' => $entity), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'merge', array('entity' => $entity), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'contains', array('entity' => $entity), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'getEventManager', array(), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'getConfiguration', array(), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'isOpen', array(), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'getUnitOfWork', array(), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'getProxyFactory', array(), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'initializeObject', array('obj' => $obj), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'getFilters', array(), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'isFiltersStateClean', array(), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'hasFilters', array(), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return $this->valueHolder70e0a->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer63bd4 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder70e0a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder70e0a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder70e0a->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, '__get', ['name' => $name], $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        if (isset(self::$publicPropertiesee912[$name])) {
            return $this->valueHolder70e0a->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70e0a;
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
        $targetObject = $this->valueHolder70e0a;
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
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70e0a;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder70e0a;
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
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, '__isset', array('name' => $name), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70e0a;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder70e0a;
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
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, '__unset', array('name' => $name), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70e0a;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder70e0a;
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
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, '__clone', array(), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        $this->valueHolder70e0a = clone $this->valueHolder70e0a;
    }
    public function __sleep()
    {
        $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, '__sleep', array(), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
        return array('valueHolder70e0a');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer63bd4 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer63bd4;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer63bd4 && ($this->initializer63bd4->__invoke($valueHolder70e0a, $this, 'initializeProxy', array(), $this->initializer63bd4) || 1) && $this->valueHolder70e0a = $valueHolder70e0a;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder70e0a;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder70e0a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
