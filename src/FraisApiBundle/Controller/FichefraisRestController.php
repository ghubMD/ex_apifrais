<?php

namespace FraisApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
require_once("include/fct.inc.php");
require_once ("include/class.pdogsb.inc.php");

use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Response;  
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Doctrine\Common\Collections\ArrayCollection;
use PdoGsb;

class FichefraisRestController extends FOSRestController
{
    /**
     * @ApiDoc(resource=true, description="Get est le premier frais du mois")
     */
    public function getEstpremierfraisMoisAction($idVisiteur, $mois)
    {

    }
    
    /**
     * @ApiDoc(resource=true, description="Get les mois disponibles pour un visiteur")
     */
    public function getLesmoisdisponiblesAction($idVisiteur)
    {
        $pdo = PdoGsb::getPdoGsb();
        $lesMois = $pdo->getLesMoisDisponibles($idVisiteur);
      
        if (!$lesMois)
        {
            throw new NotFoundHttpException('Mois non disponibles [idVisiteur='.$idVisiteur.']');
            //return new JsonResponse(['message' => 'Place not found'], Response::HTTP_NOT_FOUND);
        }

        return new JsonResponse($lesMois);
    }

     /**
     * @ApiDoc(resource=true, description="Get les mois disponibles pour un visiteur")
     */
    public function getNbjustificatifsMoisAction($idVisiteur, $mois)
    {

    }
    
    /**
     * @ApiDoc(resource=true, description="Get informations d'une fiche de frais")
     */
    public function getFichefraisMoisAction($idVisiteur, $mois)
    {

    }
    
        
    /**
    * @ApiDoc(description="Post Création fiche de frais")
    */
    public function postFichefraisAction(Request $request)
    {
       
    }
    
    /**
     * @ApiDoc(resource=true, description="Get les années disponibles pour un visiteur")
     */
    public function getLesanneesdisponiblesAction($idVisiteur)
    {

    }
    
    /**
    * @ApiDoc(
    *  resource=true,
    *  description="Get statistiques année"
    * )
    */
    public function getStatsannuellesAnneeAction($idVisiteur, $annee)
    {

    }
    
    /**
     * @ApiDoc(
     *  resource=true,
     *  description="Get statistiques frais au forfait"
     * )
    */
    public function getStatstotauxAction($idVisiteur)
    {

    }
}
