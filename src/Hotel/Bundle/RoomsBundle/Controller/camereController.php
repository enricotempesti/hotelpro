<?php

namespace Hotel\Bundle\RoomsBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Hotel\Bundle\RoomsBundle\Entity\camere;
use Hotel\Bundle\RoomsBundle\Form\camereType;

/**
 * camere controller.
 *
 * @Route("/camere")
 */
class camereController extends Controller
{

    /**
     * Lists all camere entities.
     *
     * @Route("/", name="camere")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('HotelRoomsBundle:camere')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new camere entity.
     *
     * @Route("/", name="camere_create")
     * @Method("POST")
     * @Template("HotelRoomsBundle:camere:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new camere();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('camere_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a camere entity.
     *
     * @param camere $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(camere $entity)
    {
        $form = $this->createForm(new camereType(), $entity, array(
            'action' => $this->generateUrl('camere_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new camere entity.
     *
     * @Route("/new", name="camere_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new camere();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a camere entity.
     *
     * @Route("/{id}", name="camere_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HotelRoomsBundle:camere')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find camere entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing camere entity.
     *
     * @Route("/{id}/edit", name="camere_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HotelRoomsBundle:camere')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find camere entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a camere entity.
    *
    * @param camere $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(camere $entity)
    {
        $form = $this->createForm(new camereType(), $entity, array(
            'action' => $this->generateUrl('camere_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing camere entity.
     *
     * @Route("/{id}", name="camere_update")
     * @Method("PUT")
     * @Template("HotelRoomsBundle:camere:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('HotelRoomsBundle:camere')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find camere entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('camere_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a camere entity.
     *
     * @Route("/{id}", name="camere_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('HotelRoomsBundle:camere')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find camere entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('camere'));
    }

    /**
     * Creates a form to delete a camere entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('camere_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
