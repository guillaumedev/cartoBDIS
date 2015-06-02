<?php

namespace Carto\FicheBundle\Controller;
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 02/06/2015
 * Time: 14:19
 **/


use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Carto\FicheBundle\Form\TagType;
use Carto\FicheBundle\Entity\Tag;

Class TagController extends Controller
{
    public function showAction()
    {
        $em = $this->getDoctrine()->getManager();
        $tags  = $em->getRepository('CartoFicheBundle:Tag')->findAll();

        return $this->render('CartoFicheBundle:Tag:tag.html.twig', array('tags' => $tags));

        //var_dump($tags);die;
    }
    public function addAction()
    {
        $em = $this->getDoctrine()->getManager();
        $tags  = $em->getRepository('CartoFicheBundle:Tag')->findAll();


        if($this->getRequest()->isMethod("POST")) {
            $tag = new Tag();
            $form = $this->createForm(new TagType,$tag);
            $form->bind($this->getRequest());
            $em->persist($tag);
            $em->flush();

            return $this->redirect($this->generateUrl('carto_fiche_tag_add'));
        } else {
            $form = $this->createForm(new TagType);
            return $this->render('CartoFicheBundle:Tag:tag-form.html.twig', array('form' => $form->createView()));
        }
    }
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $tag  = $em->getRepository('CartoFicheBundle:Tag')->find($id);
        $form = $this->createForm(new TagType,$tag);

        if($this->getRequest()->isMethod("POST")) {

            $form->bind($this->getRequest());
            $em->persist($tag);
            $em->flush();

            return $this->redirect($this->generateUrl('carto_fiche_tag_edit',array('id'=>$tag->getId())));
        } else {
            return $this->render('CartoFicheBundle:Tag:tag-edit.html.twig', array('form' => $form->createView(), 'tag' => $tag));
        }
    }

}