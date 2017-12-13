<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdminUser
 *
 * @ORM\Table(name="admin_users")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AdminUserRepository")
 */
class AdminUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private $name;
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $role;
    /**
     * return int
     */
    public function getRole()
    {
       return $this->role; 
    }
}
