<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Application\Entity\User;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {

        echo "A".PHP_EOL;
        $userService = $this->getServiceLocator()->get('UserService');

        echo $userService->stringUser();

        $user = new User();
        $user->setFullName('Test User');

        echo "B".PHP_EOL;

        $userService->addUser($user);

        echo "C".PHP_EOL;

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

    public function testAction()
    {
        return new ViewModel();
    }
}
