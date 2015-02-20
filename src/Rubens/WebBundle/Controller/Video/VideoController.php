<?php

namespace Rubens\WebBundle\Controller\Video;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Rubens\CoreBundle\Entity\Video;
use Rubens\CoreBundle\Form\VideoType;

/**
 * Video controller.
 *
 */
class VideoController extends Controller
{

    /**
     * Lists all Video entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('RubensCoreBundle:Video')->findAll();

        return $this->render('RubensWebBundle:Backend/Video:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Video entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Video();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $this->get('session')->getFlashBag()->add('notice', 'Une vidéo vient d\'être crée.');
            
            return $this->redirect($this->generateUrl('rubens_admin_video_show', array('id' => $entity->getId())));
        }

        return $this->render('RubensWebBundle:Backend/Video:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Video entity.
    *
    * @param Video $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Video $entity)
    {
        $form = $this->createForm(new VideoType(), $entity, array(
            'action' => $this->generateUrl('rubens_admin_video_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Enregistrer'));

        return $form;
    }

    /**
     * Displays a form to create a new Video entity.
     *
     */
    public function newAction()
    {
        $entity = new Video();
        $form   = $this->createCreateForm($entity);

        return $this->render('RubensWebBundle:Backend/Video:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Video entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RubensCoreBundle:Video')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Video entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RubensWebBundle:Backend/Video:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Video entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RubensCoreBundle:Video')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Video entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('RubensWebBundle:Backend/Video:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Video entity.
    *
    * @param Video $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Video $entity)
    {
        $form = $this->createForm(new VideoType(), $entity, array(
            'action' => $this->generateUrl('rubens_admin_video_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Modifier'));

        return $form;
    }
    /**
     * Edits an existing Video entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('RubensCoreBundle:Video')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Video entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();
            
            $this->get('session')->getFlashBag()->add('notice', 'Une vidéo vient d\'être modifiée.');
            
            return $this->redirect($this->generateUrl('rubens_admin_video_homepage', array('id' => $id)));
        }

        return $this->render('RubensWebBundle:Backend/Video:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Video entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('RubensCoreBundle:Video')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Video entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('rubens_admin_homepage'));
    }

    /**
     * Creates a form to delete a Video entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rubens_admin_video_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Supprimer'))
            ->getForm()
        ;
    }
}
