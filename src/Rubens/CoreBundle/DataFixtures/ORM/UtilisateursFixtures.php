<?php
// src/Rubens/CoreBundle/DataFixtures/ORM/UtilisateursFixtures.php

namespace Rubens\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use Rubens\CoreBundle\Entity\Utilisateur;

class UtilisateursFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager){
        $tab = array(
            array('prenom' => 'Gilles', 'nom' => 'BOUCHONNEAU', 'username' => 'cyphos', 'email'=>'gilles.bouchonneau@gmail.com', 'enabled'=>true, 'password'=>'test', 'locked'=>false,'expired'=>false, 'roles'=>'ROLE_SUPER_ADMIN', 'credentials_expired'=>false),
            array('prenom' => 'David', 'nom' => 'BECKAMP', 'username' => 'david', 'email'=>'david.beckamp@gmail.com', 'enabled'=>true, 'password'=>'test', 'locked'=>false,'expired'=>false, 'roles'=>'ROLE_ADMIN', 'credentials_expired'=>false),
            array('prenom' => 'Ségolène', 'nom' => 'ROYAL', 'username' => 'segolene', 'email'=>'segolene.royal@gmail.com', 'enabled'=>true, 'password'=>'test', 'locked'=>false,'expired'=>false, 'roles'=>'ROLE_USER', 'credentials_expired'=>false),
        );

        foreach($tab as $row){
            $user = new Utilisateur();
            $user->setPrenom($row['prenom']);
            $user->setNom($row['nom']);
            $user->setUsername($row['username']);
            $user->setEmail($row['email']);
            $user->setEnabled($row['enabled']);
            $user->setPlainPassword($row['password']);
            $user->setLocked(false);
            $user->setExpired(false);
            $user->setRoles(array($row['roles']));
            $user->setCredentialsExpired(false);

            $manager->persist($user);
        }
        $manager->flush();
    }
    public function getOrder() {
        return 5;
    }

//    public function load(ObjectManager $manager){
//        $user = new User();
//        $user->setEmail('gilles.bouchonneau@gmail.com');
//        $user->setUsername('cyphos');
//        $user->setEnabled(true);
//        $user->setPlainPassword('test');
//        $user->setLocked(false);
//        $user->setExpired(false);
//        $user->setRoles('ROLE_SUPER_ADMIN');
//        $user->setCredentialsExpired(false);
//        $manager->persist($user);
//        $manager->flush();
//    }
}
