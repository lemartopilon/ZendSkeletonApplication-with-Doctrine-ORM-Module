<?php

namespace Application\Service;

use Application\Entity\User;
use Zend\ServiceManager\ServiceManager;
use Zend\ServiceManager\ServiceManagerAwareInterface;

class UserService implements ServiceManagerAwareInterface{

    protected $sm;

    /**
     * Set service manager
     *
     * @param \Zend\ServiceManager\ServiceManager $serviceManager
     * @return UserService
     */
    public function setServiceManager(ServiceManager $serviceManager)
    {
        $this->sm = $serviceManager;
        return $this;
    }

    /*
     * Retrieve service manager instance
     *
     * @return ServiceManager
     */
    public function getServiceManager()
    {
        return $this->sm;
    }

    public function stringUser(){
        return "TOTO";
    }

    /**
     * @param \Application\Entity\User $user
     */
    public function addUser(User $user){
        //Doctrine\Common\Persistence\ObjectManager
        $objectManager = $this->sm->get('Doctrine\ORM\EntityManager');
        $objectManager->persist($user);
        $objectManager->flush();
    }


}