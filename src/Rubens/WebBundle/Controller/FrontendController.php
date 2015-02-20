<?php

namespace Rubens\WebBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Rubens\CoreBundle\Form\ContactType;

/**
 * Post controller.
 *
 */
class FrontendController extends Controller
{

    /**
     * Lists all Post entities.
     *
     */
    public function indexAction()
    {
    $posts = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('RubensCoreBundle:Post')
                     ->findBy(
                                array(
                                    'published'=> true
                                ),
                                array(
                                    'id'=>'DESC'
                                ),
                                1
                     );
    $breves1 = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('RubensCoreBundle:Post')
                     ->findBy(
                                array(
                                    'published'=> true
                                ),
                                array(
                                    'id'=>'DESC'
                                ),
                                1,1
                     );
    $breves2 = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('RubensCoreBundle:Post')
                     ->findBy(
                                array(
                                    'published'=> true
                                ),
                                array(
                                    'id'=>'DESC'
                                ),
                                1,2
                     );

    $chronos = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('RubensCoreBundle:Post')
                     ->findBy(
                                array(
                                    'published'=> true
                                ),
                                array(
                                    'id'=>'DESC'
                                ),
                                4,3
                     );

    return $this->render('RubensWebBundle:Frontend:content.html.twig', array(
      'posts' => $posts,
      'breves1' => $breves1,
      'breves2' => $breves2,
      'chronos' => $chronos
    ));
    }
    public function voirAction($id)
    {
        $post = $this->getDoctrine()
                      ->getManager()
                      ->getRepository('RubensCoreBundle:Post')
                      ->find($id);
        $chronos = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('RubensCoreBundle:Post')
                     ->findBy(
                                array(),
                                array(
                                    'id'=>'DESC'
                                )
                     );
        return $this->render('RubensWebBundle:Frontend:voir.html.twig', array(
            'post' => $post,
            'chronos' => $chronos
        ));
    }
    public function archivesAction()
    {

        $findarchives = $this->getDoctrine()->getManager()->getRepository('RubensCoreBundle:Post')->findBy(
                                    array(),
                                    array(
                                        'id'=>'DESC'
                                        )
                                    );
        $archives  = $this->get('knp_paginator')->paginate($findarchives, $this->get('request')->query->get('page', 1),5);

        return $this->render('RubensWebBundle:Frontend:archives.html.twig', array(
              'archives' => $archives
            ));
    }

    public function galeriesAction()
    {
        $em = $this->getDoctrine()->getManager();

        $images = $em->getRepository('RubensCoreBundle:Image')->findAll();
        $images  = $this->get('knp_paginator')->paginate($images, $this->get('request')->query->get('page', 1),8);
        return $this->render('RubensWebBundle:Frontend:galeries.html.twig', array(
            'images' => $images,
        ));
    }

    public function videosAction()
    {
        $em = $this->getDoctrine()->getManager();

        $videos = $em->getRepository('RubensCoreBundle:Video')->findAll();
        $videos  = $this->get('knp_paginator')->paginate($videos, $this->get('request')->query->get('page', 1),8);
        return $this->render('RubensWebBundle:Frontend:videos.html.twig', array(
            'videos' => $videos,
        ));
    }
    
    /**
    * @Route("/contact", _name="contact")
    * @Template()
    */
    public function contactAction(Request $request)
    {
        $form = $this->createForm(new ContactType());

        if ($request->isMethod('POST')) {
            $form->bind($request);

            if ($form->isValid()) {
                $message = \Swift_Message::newInstance()
                    ->setSubject($form->get('subject')->getData())
                    ->setFrom($form->get('email')->getData())
                    ->setTo('gilles.bouchonneau@gmail.com')
                    ->setBody(
                        $this->renderView(
                            'RubensWebBundle:Frontend:contact.html.twig',
                            array(
                                'ip' => $request->getClientIp(),
                                'nom' => $form->get('nom')->getData(),
                                'message' => $form->get('message')->getData()
                            )
                        )
                    );

                $this->get('mailer')->send($message);

                $request->getSession()->getFlashBag()->add('success', 'Your email has been sent! Thanks!');

                return $this->redirect($this->generateUrl('rubens_web_contact'));
            }
        }

        return array(
            'form' => $form->createView()
        );
    }
    public function bureauAction()
    {
        return $this->render('RubensWebBundle:Frontend:bureau.html.twig');
    }
    public function historiqueAction()
    {
        return $this->render('RubensWebBundle:Frontend:historique.html.twig');
    }
    public function fssfAction()
    {
        return $this->render('RubensWebBundle:Frontend:fssf.html.twig');
    }
    public function cissAction()
    {
        return $this->render('RubensWebBundle:Frontend:ciss.html.twig');
    }
    public function diversAction()
    {
        return $this->render('RubensWebBundle:Frontend:divers.html.twig');
    }
    public function agendaAction()
    {
        return $this->render('RubensWebBundle:Frontend:agenda.html.twig');
    }

    public function mentionsAction()
    {
        return $this->render('RubensWebBundle:Frontend:mentions.html.twig');
    }
    public function proposAction()
    {
        return $this->render('RubensWebBundle:Frontend:propos.html.twig');
    }
    public function planAction()
    {
        return $this->render('RubensWebBundle:Frontend:plan.html.twig');
    }
    public function testAction()
    {
        $findarchives = $this->getDoctrine()->getManager()->getRepository('RubensCoreBundle:Post')->findBy(
                                    array(),
                                    array(
                                        'id'=>'DESC'
                                        )
                                    );
        $archives  = $this->get('knp_paginator')->paginate($findarchives, $this->get('request')->query->get('page', 1),2);

        return $this->render('RubensWebBundle:Frontend:test.html.twig', array(
              'archives' => $archives
            ));

    }

}
