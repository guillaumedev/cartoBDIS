<?php

namespace Carto\FicheBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Carto\FicheBundle\Entity\Fiche;


class FicheController extends Controller
{

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
	
}
