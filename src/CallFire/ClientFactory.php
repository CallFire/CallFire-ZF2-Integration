<?php
namespace CallFire;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\AbstractFactoryInterface;

class ClientFactory implements AbstractFactoryInterface
{
    public function canCreateServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {
        $apiConfig = $serviceLocator->get('CallFire\Config\Api');
    
        return (substr($requestedName, 0, strlen($apiConfig->getClientNamespace())) === $apiConfig->getClientNamespace());
    }
    
    public function createServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {
        $apiConfig = $serviceLocator->get('CallFire\Config\Api');
        
        $clientServiceName = substr($requestedName, strlen($apiConfig->getClientNamespace()) + 2);
        $facade = $apiConfig->getClientFacade();
        $clientType = $apiConfig->getClientType();
        
        return $facade::$clientType($apiConfig->getUsername(), $apiConfig->getPassword(), $clientServiceName);
    }
}
