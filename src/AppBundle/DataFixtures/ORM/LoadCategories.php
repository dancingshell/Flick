<?php
namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Category;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadCategories implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $categories =[
            'agriculture & forestry',
            'automotive',
            'business & information',
            'computers & technology',
            'construction & contractors',
            'education',
            'entertainment',
            'food & hospitality',
            'health & medicine',
            'legal & financial',
            'manufacturing & distribution',
            'marketing & communication',
            'merchants (retail)',
            'misc.',
            'personal care & services',
            'real estate',
            'travel & transportation'
        ];

        foreach ($categories as $name) {
            $category = new Category();
            $category->setName($name);
            $manager->persist($category);
        }
        $manager->flush();
    }
}