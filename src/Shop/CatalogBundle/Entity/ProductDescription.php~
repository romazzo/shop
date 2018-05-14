<?php

namespace Shop\CatalogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductDescription
 *
 * @ORM\Table(name="product_description")
 * @ORM\Entity(repositoryClass="Shop\CatalogBundle\Repository\ProductDescriptionRepository")
 */
class ProductDescription
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
     * @ORM\Column(name="color", type="string", length=255)
     */
    private $color;

    /**
     * @var string
     *
     * @ORM\Column(name="materials", type="string", length=255)
     */
    private $materials;

    /**
     * @var string
     *
     * @ORM\Column(name="style", type="string", length=255)
     */
    private $style;

    /**
     * @var string
     *
     * @ORM\Column(name="season", type="string", length=255)
     */
    private $season;

    /**
     * @var string
     *
     * @ORM\Column(name="brand", type="string", length=255)
     */
    private $brand;

    /**
     * @ORM\ManyToOne(targetEntity="Shop\CatalogBundle\Entity\Product", inversedBy="productdescriptions")
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
     * Set color
     *
     * @param string $color
     * @return ProductDescription
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string 
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set materials
     *
     * @param string $materials
     * @return ProductDescription
     */
    public function setMaterials($materials)
    {
        $this->materials = $materials;

        return $this;
    }

    /**
     * Get materials
     *
     * @return string 
     */
    public function getMaterials()
    {
        return $this->materials;
    }

    /**
     * Set style
     *
     * @param string $style
     * @return ProductDescription
     */
    public function setStyle($style)
    {
        $this->style = $style;

        return $this;
    }

    /**
     * Get style
     *
     * @return string 
     */
    public function getStyle()
    {
        return $this->style;
    }

    /**
     * Set season
     *
     * @param string $season
     * @return ProductDescription
     */
    public function setSeason($season)
    {
        $this->season = $season;

        return $this;
    }

    /**
     * Get season
     *
     * @return string 
     */
    public function getSeason()
    {
        return $this->season;
    }

    /**
     * Set brand
     *
     * @param string $brand
     * @return ProductDescription
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return string 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set products
     *
     * @param \Shop\CatalogBundle\Entity\Product $products
     * @return ProductDescription
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
