<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="products")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRepository")
 */
class Product
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
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
     * @ORM\Column(type="string", length=100)
     */
    private $name;
    /**
     * Get name
     * 
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @ORM\Column(type="string", length=40)
     */
    private $sku;
    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }
}
