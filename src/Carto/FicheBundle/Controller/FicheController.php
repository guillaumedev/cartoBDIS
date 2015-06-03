<?php

namespace Carto\FicheBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
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
		
		$listFiches = $repository->findAll();
		$res=array();
		foreach($listFiches as $marker){
			$fiche = new Fiche();
			$fiche->id = $marker->getID();
			$fiche->latitude = $marker->getLatitude();
			$fiche->longitude = $marker->getLongitude();
			$fiche->presentation = $marker->getPresentation();
			$fiche->nom = $marker->getNom();
			array_push($res, $fiche);
		}
		header("Content-Type: application/json; charset=utf-8");
		$json = json_encode($res, JSON_UNESCAPED_UNICODE);
		return $this->render('CartoFicheBundle:Fiche:json.html.twig', array(
			'json' => $json	));
		  
    }
}
