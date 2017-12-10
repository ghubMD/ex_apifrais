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
use PdoGsb;

/**
 * Description of FraishorsforfaitRestController
 *
 * @author md
 */
class FraishorsforfaitRestController extends FOSRestController
{
    /**
     * @ApiDoc(resource=true, description="Get frais au forfait")
     */
    public function getFraishorsforfaitMoisAction($idVisiteur, $mois)
    {

    }

    /**
     * @ApiDoc(resource=true, description="Post crée un frais hors forfait")
     */
    public function postFraishorsforfaitAction(Request $request)
    {

    }
    
     /**
     * @ApiDoc(resource=true, description="Delete frais au forfait")
     */
    public function deleteFraishorsforfaitAction(Request $request)
    {

    }
}
