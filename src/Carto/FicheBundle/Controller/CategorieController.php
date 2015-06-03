<?php

namespace Carto\FicheBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Carto\FicheBundle\Entity\Categorie;
use Carto\FicheBundle\Form\CategorieType;
use Carto\FicheBundle\Form\CategorieEditType;


/**
 * Customer controller.
 *
 * @Route("/Customer")
 */
class CategorieController extends Controller
{

    /**
     * Liste toutes les catégories
     *
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $category= $em->getRepository('CartoFicheBundle:Categorie')->findAll();

//        $paginator = $this->get('knp_paginator');
//        $pagination = $paginator->paginate(
//            $customers,
//            $request->query->get('page', 1),
//            10
//        );

        return array(
            'category' => $category,
        );
    }

    /**
     * Creates a new Meeting entity.
     *
     * @Method("POST")
     * @Template("CartoFicheBundle:Categorie:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Categorie();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('carto_fiche_categorie_index'));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
        }


    /**
     * Creates a form to create a Categorie entity.
     *
     * @param Categorie $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Categorie $entity)
    {
        $form = $this->createForm(new CategorieType(), $entity, array(
            'action' => $this->generateUrl('carto_fiche_categorie_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Categorie entity.
     *
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Categorie();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Categorie entity.
     *
     * @Route("/{reference}", name="meeting_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $meeting = $em->getRepository('CartoFicheBundle:Categorie')->find($id);

        if (!$meeting) {
            throw $this->createNotFoundException('Unable to find Meeting entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'meeting' => $meeting,
        );
    }

    /**
     * Displays a form to edit an existing Categorie entity.
     *
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $categorie = $em->getRepository('CartoFicheBundle:Categorie')->find($id);

        if (!$categorie) {
            throw $this->createNotFoundException('Unable to find Categorie entity.');
        }

        $editForm = $this->createEditForm($categorie);

        return array(
            'categorie'      => $categorie,
            'form'   => $editForm->createView(),
        );
    }

    /**
     * Creates a form to edit a Categorie entity.
     *
     * @param Categorie $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Categorie $entity)
    {
        $form = $this->createForm(new CategorieEditType(), $entity, array(
            'action' => $this->generateUrl('carto_fiche_categorie_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Categorie entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CartoFicheBundle:Categorie')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Meeting entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);


        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('carto_fiche_categorie_index'));
        }
        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }
}
