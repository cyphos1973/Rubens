<?php
// src/Rubens/CoreBundle/DataFixtures/ORM/VideosFixtures.php

namespace Rubens\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Rubens\CoreBundle\Entity\Video;

class VideosFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){
        $tab = array(
            array('title' => 'Big Buck Bunny', 'url' => 't4gjl-uwUHc', 'createdAt'=> new \DateTime ('2014-01-01 01:00:00'), 'posts'=> $this->getReference("post-1") ),
            array('title' => 'Gooseberry', 'url' => '0HtNEGzZtaA', 'createdAt'=> new \DateTime ('2014-02-14 10:00:00'), 'posts'=> $this->getReference("post-2") ),
            array('title' => 'Caminandes', 'url' => 'Z4C82eyhwgU', 'createdAt'=> new \DateTime ('2014-03-22 15:00:00'), 'posts'=> $this->getReference("post-3") ),
            array('title' => 'Elephants dream', 'url' => 'eFQxRd0isAQ', 'createdAt'=> new \DateTime ('2014-06-14 07:50:00'), 'posts'=> $this->getReference("post-3") ),
        );

        foreach($tab as $row){
            $categorie = new Video();
            $categorie->setTitle($row['title']);
            $categorie->setUrl($row['url']);
            $categorie->setCreatedAt($row['createdAt']);

            $manager->persist($categorie);
        }
        $manager->flush();
    }
    public function getOrder() {
        return 4;
    }

//    public function load(ObjectManager $manager){
//        $categorie = new Video();
//        $categorie->setTitle('Gooseberry');
//        $categorie->setUrl('OHOpb2fS-cM');
//        $categorie->setCreatedAt(new \DateTime('2014-01-02 13:00:09'));
//
//        $categorie->addPost($this->getReference('post1'));
//
//        $manager->persist($categorie);
//        $manager->flush();
//    }
//
//    public function getOrder() {
//        return 4;
//    }
}
