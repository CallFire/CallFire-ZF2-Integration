<?php
namespace CallFire\Config;

class Api extends AbstractConfig
{
    protected $username;
    
    protected $password;
    
    protected $clientNamespace;
    
    protected $clientFacade;
    
    protected $clientType;
    
    public function getUsername() {
        return $this->username;
    }
    
    public function setUsername($username) {
        $this->username = $username;
        return $this;
    }
    
    public function getPassword() {
        return $this->password;
    }
    
    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }
    
    public function getClientNamespace() {
        return $this->clientNamespace;
    }
    
    public function setClientNamespace($clientNamespace) {
        $this->clientNamespace = $clientNamespace;
        return $this;
    }
    
    public function getClientFacade() {
        return $this->clientFacade;
    }
    
    public function setClientFacade($clientFacade) {
        $this->clientFacade = $clientFacade;
        return $this;
    }
    
    public function getClientType() {
        return $this->clientType;
    }
    
    public function setClientType($clientType) {
        $this->clientType = $clientType;
        return $this;
    }
}
