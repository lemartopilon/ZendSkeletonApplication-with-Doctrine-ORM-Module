<?php
namespace Application\Entity;
use Doctrine\ORM\Mapping as ORM;

/** @ORM\Entity */
class User {
    /**
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    protected $id;

    /** @ORM\Column(type="string") */
    protected $fullName;


    // getters/setters
    /**
     * @param String $fullName
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }

    /**
     * @return String
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param Integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return Integer
     */
    public function getId()
    {
        return $this->id;
    }



}
