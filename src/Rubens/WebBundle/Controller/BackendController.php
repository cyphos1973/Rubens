<?php

namespace Rubens\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackendController extends Controller
{
    public function indexAction()
    {
        $users = $this->getDoctrine()
                 ->getManager()
                 ->getRepository('RubensCoreBundle:Utilisateur')
                 ->findBy(array(), null, '5', null);
        $posts = $this->getDoctrine()
                 ->getManager()
                 ->getRepository('RubensCoreBundle:Post')
                 ->findBy(array(), array('id'=>'DESC'), '5', null);

        return $this->render('RubensWebBundle:Backend:index.html.twig', array(
            'users' => $users,
            'posts' => $posts
        ));
    }
    public function profilAction() {
        return $this->render('RubensWebBundle:Backend:profil.html.twig');
    }
    
    public function changelogAction() {
        return $this->render('RubensWebBundle:Backend:changelog.html.twig');
    }    
}
