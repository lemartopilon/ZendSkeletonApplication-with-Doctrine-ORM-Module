<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

use Application\Entity\User;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {

        /*$objectManager = $this->getServiceLocator()
            ->get('Doctrine\ORM\EntityManager');

        $user2 = new User();
        $user2->setFullName('Michaël Gallego');
        $objectManager->persist($user2);

        $user3 = new User();
        $user3->setFullName('Kyle Spraggs');
        $objectManager->persist($user3);

        $objectManager->flush();

        die(); // yes, I'm lazy*/

        return new ViewModel();
    }
}
