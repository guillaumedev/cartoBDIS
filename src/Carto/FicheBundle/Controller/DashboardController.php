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
class DashboardController extends Controller
{

    /**
     * Liste toutes les catégories
     *
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $request)
    {

    }

    /**
     *
     * @Template()
     */
    public function dashboardAction()
    {
        $em = $this->getDoctrine()->getManager();

        $category = $em->getRepository('CartoFicheBundle:Categorie')->findAll();

        return array(
            'category' => $category
        );
    }

    public function charteAction()
    {

    }
}
