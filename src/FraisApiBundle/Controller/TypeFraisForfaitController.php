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
 * Description of TypeFraisForfait
 *
 * @author md
 */
class TypeFraisForfaitController extends FOSRestController {
    /**
    * @ApiDoc(
    *  resource=true,
    *  description="Get les id frais forfait"
    * )
    */
    public function getLesidfraisforfaitAction()
    {

    }
}
