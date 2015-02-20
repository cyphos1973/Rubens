<?php
// src/Rubens/CoreBundle/DataFixtures/ORM/CategoriesFixtures.php

namespace Rubens\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Rubens\CoreBundle\Entity\Categorie;

class CategoriesFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){
        $tab = array(
            array('title' => 'FSSF', 'createdAt'=> new \DateTime ('2014-05-14'), 'posts'=> $this->getReference("post-1") ),
            array('title' => 'CISS', 'createdAt'=> new \DateTime ('2014-05-14'), 'posts'=> $this->getReference("post-2") ),
            array('title' => 'Historique', 'createdAt'=> new \DateTime ('2014-05-14'), 'posts'=> $this->getReference("post-3") ),
            array('title' => 'Divers', 'createdAt'=> new \DateTime ('2014-05-14'), 'posts'=> $this->getReference("post-4") ),
            array('title' => 'CERA', 'createdAt'=> new \DateTime ('2014-05-14'), 'posts'=> $this->getReference("post-5") ),
        );

        foreach($tab as $row){
            $categorie = new Categorie();
            $categorie->setTitle($row['title']);
            $categorie->setCreatedAt($row['createdAt']);

            $manager->persist($categorie);
        }
        $manager->flush();
    }
    public function getOrder() {
        return 2;
    }

//    public function load(ObjectManager $manager){
//        $categorie = new Categorie();
//        $categorie->setTitle('Symfony1');
//        $categorie->setCreatedAt(new \DateTime('2014-01-02 13:00:09'));
//
//        $categorie->addPost($this->getReference('post1'));
//
//        $manager->persist($categorie);
//        $manager->flush();
//    }
//
//    public function getOrder() {
//        return 1;
//    }
}
