<?php
// src/Rubens/CoreBundle/DataFixtures/ORM/DocumentsFixtures.php

namespace Rubens\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Rubens\CoreBundle\Entity\Document;

class DocumentsFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){
        $tab = array(
            array('title' => 'Circulaire N°1', 'type' => 'PDF', 'url' => 'circulaire_1.pdf', 'createdAt'=> new \DateTime ('2014-05-14'), 'published' => true),
            array('title' => 'PV N°1', 'type' => 'PDF', 'url' => 'circulaire_1.pdf', 'createdAt'=> new \DateTime ('2014-05-14'), 'published' => true),
            array('title' => 'Circulaire N°2', 'type' => 'PDF', 'url' => 'circulaire_1.pdf', 'createdAt'=> new \DateTime ('2014-05-14'), 'published' => true),
            array('title' => 'AG N°1', 'type' => 'PDF', 'url' => 'circulaire_1.pdf', 'createdAt'=> new \DateTime ('2014-05-14'), 'published' => true),
            array('title' => 'PV N°2', 'type' => 'PDF', 'url' => 'circulaire_1.pdf', 'createdAt'=> new \DateTime ('2014-05-14'), 'published' => true),
        );

        foreach($tab as $row){
            $document = new Document();
            $document->setTitle($row['title']);
            $document->setType($row['type']);
            $document->setUrl($row['url']);
            $document->setCreatedAt($row['createdAt']);
            $document->setUpdatedAt($document->getCreatedAt());
            $document->setPublished($row['published']);
            $document->setPublishedAt($document->getCreatedAt());

            $manager->persist($document);
        }
        $manager->flush();
    }
    public function getOrder() {
        return 2;
    }

//    public function load(ObjectManager $manager){
//        $document = new Document();
//        $document->setTitle('Symfony1');
//        $document->setCreatedAt(new \DateTime('2014-01-02 13:00:09'));
//
////        $document->setPost($this->getReference('post-1'));
//        $document->setPost($manager->merge($this->getReference('post-1')));
//        $manager->persist($document);
//        $manager->flush();
//    }
//
//    public function getOrder() {
//        return 3;
//    }
}
