<?php

namespace Carto\FicheBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Carto\FicheBundle\Entity\Fiche;
use Carto\FicheBundle\Form\FicheType;

class FicheController extends Controller
{

    /**
     * Liste l'ensemble des Fiches
     */
    public function indexAction()
    {
		
        $repository = $this	
		  ->getDoctrine()
		  ->getManager()
		  ->getRepository('CartoFicheBundle:Fiche');
		
		//$listFiches = $repository->findByRegion("Basse-Normandie");
		$listFiches = $repository->findAll();
		
		//$listFiches = $this->getDoctrine()->getRepository('CartoFicheBundle:Fiche')->findAll();
		//var_dump($listFiches);exit;
		$res=array();
		foreach($listFiches as $marker){			
			array_push($res, ($marker));
		}
		//header("Content-Type: application/json; charset=utf-8");
		$json = json_encode($res);
		//var_dump(json_decode($json,true));
		echo $json;
		exit();
		return $this->render('CartoFicheBundle:Fiche:json.html.twig', array(
			'json' => $json	));
		  
    }
	
	public function searchAction(Request $request){
		//print_r($_POST);
		//$postData = $request->request->get('contact');
		$postData = $request->request->all();
		$search=json_decode($postData['test']);
		$finalSearch=array();
		//var_dump($search);exit;
		$repository = $this->getDoctrine()->getManager()->getRepository('CartoFicheBundle:Fiche');
		if(isset($search->ville)){
			$resSearch = $repository->searchVille($search->search);
			$finalSearch = array_merge($finalSearch, $resSearch);	
		}
		
		if(isset($search->nom)){
			$resSearch = $repository->searchNom($search->search);
			$finalSearch = array_merge($finalSearch, $resSearch);	
		}
		/*if(isset($search->status)){
			$resSearch = $repository->searchStatus($search->search);
			array_merge($finalSearch, $resSearch);	
		}*/
		
		//var_dump($finalSearch);exit;
		
		$res=array();
		foreach($finalSearch as $marker){
			$fiche = new Fiche();
			$fiche->id = $marker->getID();
			$fiche->latitude = $marker->getLatitude();
			$fiche->longitude = $marker->getLongitude();
			//$fiche->presentation = $marker->getPresentation();
			$fiche->nom = $marker->getNom();
			//$fiche->presentation = $marker->getPresentation();
			//$fiche->contacts = $marker->getContacts();
			
			array_push($res, ($fiche));
		}

		header("Content-Type: application/json; charset=utf-8");

		$json = json_encode($res);
		echo $json;
		exit;
	}

	public function testAction(){
		$repository = $this	
		  ->getDoctrine()
		  ->getManager()
		  ->getRepository('CartoFicheBundle:Fiche');
		$resSearch = $repository->findAll();
		
		var_dump($resSearch);	
	}
	

		print_r(json_encode($res, JSON_UNESCAPED_UNICODE));
		  
    }

    /**
     * Creates a new Fiche entity.
     * @Method("POST")
     * @Template("CartoFicheBundle:Fiche:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Fiche();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('carto_fiche_dashboard_dashboard'));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }


    /**
     * Creates a form to create a Fiche entity.
     *
     * @param Fiche $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Fiche $entity)
    {
        $form = $this->createForm(new FicheType(), $entity, array(
            'action' => $this->generateUrl('carto_fiche_fiche_create'),
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
        $entity = new Fiche();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

}
