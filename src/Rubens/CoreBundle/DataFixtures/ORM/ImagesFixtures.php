<?php
// src/Rubens/CoreBundle/DataFixtures/ORM/ImagesFixtures.php

namespace Rubens\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Rubens\CoreBundle\Entity\Image;

class ImagesFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){
//            $tab = array(
//		array('url' => 'infos-01.jpg', 'alt' => 'Vieux Eugène', 'createdAt'=> new \DateTime ('now'), 'posts'=> $this->getReference("post-1") ),
//		array('url' => 'infos-jo.jpg', 'alt' => 'Journal Officiel', 'createdAt'=> new \DateTime ('now'), 'posts'=> $this->getReference("post-2") ),
//		array('url' => 'infos-medaille_malaurie.jpg', 'alt' => 'Médaille d\'honneur', 'createdAt'=> new \DateTime ('now'), 'posts'=> $this->getReference("post-3") ),
//		array('url' => 'bureau-13-02-2010.jpg', 'alt' => 'Bureau', 'createdAt'=> new \DateTime ('now'), 'posts'=> $this->getReference("post-4") ),
//                array('url' => 'football-25-06-2014.jpg', 'alt' => 'Football', 'createdAt'=> new \DateTime ('now'), 'posts'=> $this->getReference("post-4") ),
//                array('url' => 'brasil2014.jpg', 'alt' => 'Bresil - Pari', 'createdAt'=> new \DateTime ('now'), 'posts'=> $this->getReference("post-4") ),
//                array('url' => 'brasil2014_2.jpg', 'alt' => 'Bresil - Wall', 'createdAt'=> new \DateTime ('now'), 'posts'=> $this->getReference("post-4") ),
//                array('url' => 'bandeau.jpg', 'alt' => 'Bandeau', 'createdAt'=> new \DateTime ('now'), 'posts'=> $this->getReference("post-4") ),
//	    );

            $documents = array(
		array('url' => 'ferrari-1.jpg', 'alt' => 'Ferrari 1', 'createdAt'=> new \DateTime ('now'), 'post'=> $this->getReference("post-1") ),
		array('url' => 'ferrari-2.jpg', 'alt' => 'Ferrari 2', 'createdAt'=> new \DateTime ('now'), 'post'=> $this->getReference("post-2") ),
		array('url' => 'ferrari-3.jpg', 'alt' => 'Ferrari 3', 'createdAt'=> new \DateTime ('now'), 'post'=> $this->getReference("post-3") ),
		array('url' => 'ferrari-4.jpg', 'alt' => 'Ferrari 4', 'createdAt'=> new \DateTime ('now'), 'post'=> $this->getReference("post-4") ),
                array('url' => 'ferrari-5.jpg', 'alt' => 'Ferrari 5', 'createdAt'=> new \DateTime ('now'), 'post'=> $this->getReference("post-5") ),
                array('url' => 'ferrari-6.jpg', 'alt' => 'Ferrari 6', 'createdAt'=> new \DateTime ('now'), 'post'=> $this->getReference("post-6") ),
                array('url' => 'ferrari-7.jpg', 'alt' => 'Ferrari 7', 'createdAt'=> new \DateTime ('now'), 'post'=> $this->getReference("post-7") ),
                array('url' => 'ferrari-8.jpg', 'alt' => 'Ferrari 8', 'createdAt'=> new \DateTime ('now'), 'post'=> $this->getReference("post-8") ),
                array('url' => 'ferrari-9.jpg', 'alt' => 'Ferrari 9', 'createdAt'=> new \DateTime ('now'), 'post'=> $this->getReference("post-9") ),
                array('url' => 'ferrari-10.jpg', 'alt' => 'Ferrari 10', 'createdAt'=> new \DateTime ('now'), 'post'=> $this->getReference("post-9") ),
                array('url' => 'ferrari-11.jpg', 'alt' => 'Ferrari 11', 'createdAt'=> new \DateTime ('now'), 'post'=> $this->getReference("post-9") ),
                array(
                    'url' => 'ferrari-12.jpg', 
                    'alt' => 'Ferrari 12', 
                    'createdAt'=> new \DateTime ('now'), 
                    'post'=> $this->getReference("post-9") ),                
	    );
	    foreach($documents as $i => $image){
                $i++;
                
                $document = new Image();
                $document->setUrl($image['url']);
                $document->setAlt($image['alt']);
                $document->setCreatedAt($image['createdAt']);
                $document->setUpdatedAt($document->getCreatedAt());

                $manager->persist($document);
                $this->addReference("image-" . $i, $document);
	    }

	    $manager->flush();
    }
    public function getOrder() {
        return 3;
    }

//    public function load(ObjectManager $manager){
//        $document = new Image();
//        $document->setUrl('bureau-13-02-2010.jpg');
//        $document->setAlt('Bureau');
//        $document->setCreatedAt(new \DateTime('2014-01-02 13:00:09'));
//        $document->setUpdatedAt(new \DateTime('2014-01-02 13:00:09'));
//
//        $document->addPost($this->getReference('post1'));
//
//        $manager->persist($document);
//        $manager->flush();
//    }
//
//    public function getOrder() {
//        return 3;
//    }
}
