<?php
/**
 * Created by PhpStorm.
 * User: Одмен
 * Date: 13.04.18
 * Time: 23:15
 */

namespace Shop\CatalogBundle\DataFixtures\ORM;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Shop\CatalogBundle\Entity\Category;
use Shop\CatalogBundle\Entity\Product;

class ProductLoad extends Fixture{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $productRepo = $manager->getRepository(Category::class);
        for($i = 1; $i <= 3; $i++){
            $product = new Product();
            $product->setName("Product ".$i);
            $product->setPrice("111.4".$i);
            $product->setImage("/images/".$i);
            $product->setShows(1);
            $product->setRating($i);
            $category = $productRepo->findOneByName("Category ".$i);
            if($category){
                $product->setCategory($category);
            }
            $product->setCreatedAt(new \DateTime());
            $manager->persist($product);
        }
        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            CategoryLoad::class,
        );
    }


} 