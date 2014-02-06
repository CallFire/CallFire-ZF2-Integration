<?php
namespace CallFire\Config\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

use CallFire\Config;

class Api implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Config');
        $apiConfig = $config['callfire']['api'];

        return new Config\Api($apiConfig);
    }
}
