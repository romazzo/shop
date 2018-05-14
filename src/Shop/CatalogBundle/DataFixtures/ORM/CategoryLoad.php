<?php
/**
 * Created by PhpStorm.
 * User: Одмен
 * Date: 13.04.18
 * Time: 23:13
 */

namespace Shop\CatalogBundle\DataFixtures\ORM;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Shop\CatalogBundle\Entity\Category;

class CategoryLoad extends Fixture{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i <= 3; $i++){
            $term = new Category();
            $term->setName("Category ".$i);
            $term->setDescription("DESCRIPTION ".$i);
            $manager->persist($term);
        }
        $manager->flush();
    }


} 