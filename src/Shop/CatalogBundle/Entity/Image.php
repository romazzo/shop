<?php

namespace Shop\CatalogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="Shop\CatalogBundle\Repository\ImageRepository")
 */
class Image
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
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;

    /**
    * @ORM\ManyToOne(targetEntity="Shop\CatalogBundle\Entity\Product", inversedBy="images")
    * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
    */
    private $products;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Image
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set products
     *
     * @param \Shop\CatalogBundle\Entity\Product $products
     * @return Image
     */
    public function setProducts(\Shop\CatalogBundle\Entity\Product $products = null)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Get products
     *
     * @return \Shop\CatalogBundle\Entity\Product 
     */
    public function getProducts()
    {
        return $this->products;
    }
}
