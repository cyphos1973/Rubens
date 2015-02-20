<?php
// src/Rubens/CoreBundle/DataFixtures/ORM/PostsFixtures.php

namespace Rubens\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Rubens\CoreBundle\Entity\Post;

class PostsFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){
        $posts = array(
                array(
                    'title' => 'Historique',
                    'subtitle' => 'Depuis le début',
                    'chapo' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise ',
                    'body' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.',
                    'createdAt' => new \DateTime('2014-01-02 13:00:09'),
                    'published' => true,
                    'enabledVideo' => false),
                array('title' => 'Le Lorem Ipsum 2',
                    'subtitle' => 'Test 2',
                    'chapo' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise l',
                    'body' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.',
                    'createdAt' => new \DateTime('2014-02-02 14:38:56'),
                    'published' => true,
                    'enabledVideo' => false),
                array('title' => 'Le Lorem Ipsum 3',
                    'subtitle' => 'Test 3',
                    'chapo' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise ',
                    'body' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.',
                    'createdAt' => new \DateTime('2014-03-02 12:40:34'),
                    'published' => true,
                    'enabledVideo' => false),
                array('title' => 'Le Lorem Ipsum 4',
                    'subtitle' => 'Test 4',
                    'chapo' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise ',
                    'body' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.',
                    'createdAt' => new \DateTime('2014-04-06 13:30:00'),
                    'published' => true,
                    'enabledVideo' => false),
                array('title' => 'Le Lorem Ipsum 5',
                    'subtitle' => 'Test 5',
                    'chapo' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise ',
                    'body' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.',
                    'createdAt' => new \DateTime('2014-05-14 13:30:00'),
                    'published' => true,
                    'enabledVideo' => false),
                array('title' => 'Le Lorem Ipsum 6',
                    'subtitle' => 'Test 6',
                    'chapo' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise ',
                    'body' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.',
                    'createdAt' => new \DateTime('2014-04-06 13:30:00'),
                    'published' => true,
                    'enabledVideo' => false),
                array('title' => 'Le Lorem Ipsum 7',
                    'subtitle' => 'Test 7',
                    'chapo' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise l',
                    'body' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.',
                    'createdAt' => new \DateTime('2014-02-02 14:38:56'),
                    'published' => true,
                    'enabledVideo' => false),
                array('title' => 'Le Lorem Ipsum 8',
                    'subtitle' => 'Test 8',
                    'chapo' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise ',
                    'body' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.',
                    'createdAt' => new \DateTime('2014-03-02 12:40:34'),
                    'published' => true,
                    'enabledVideo' => false),
                array('title' => 'Le Lorem Ipsum 9',
                    'subtitle' => 'Test 9',
                    'chapo' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise ',
                    'body' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.',
                    'createdAt' => new \DateTime('2014-04-06 13:30:00'),
                    'published' => true,
                    'enabledVideo' => false),
              );
              $i=0;
	    foreach($posts as $i => $post){
                $i++;

                $document = new Post();
                $document->setTitle($post['title']);
                $document->setSubtitle($post['subtitle']);
                $document->setChapo($post['chapo']);
                $document->setBody($post['body']);
                $document->setCreatedAt($post['createdAt']);
                $document->setUpdatedAt($document->getCreatedAt());
                $document->setPublished($post['published']);
                $document->setPublishedAt($document->getCreatedAt());
                $document->setEnabledVideo($post['enabledVideo']);

                $this->addReference("post-".$i, $document);
                $manager->persist($document);

            }
            $manager->flush();
  }
    public function getOrder() {
        return 1;
    }

//    public function load(ObjectManager $manager){
//        $document = new Post();
//        $document->setTitle('Le Lorem Ipsum 7');
//        $document->setSubtitle('test 7');
//        $document->setChapo('Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise');
//        $document->setBody('Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.');
//        $document->setCreatedAt(new \DateTime('2014-01-02 13:00:09'));
//        $document->setUpdatedAt($document->getCreatedAt());
//        $document->setPublished(true);
//        $document->setPublishedAt($document->getCreatedAt());
//        $document->setEnabledVideo(true);
//
//        $this->addReference('post1', $document);
//        $manager->persist($document);
//        $manager->flush();
//
//        }
//
//    public function getOrder() {
//        return 0;
//    }
}
