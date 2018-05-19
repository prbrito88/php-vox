<?php
/**
 * Created by PhpStorm.
 * User: lab05usuario26
 * Date: 12/05/2018
 * Time: 15:06
 */

namespace AppBundle\Controller;

use Domain\Model\Oportunidade;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class OportunidadeController extends Controller
{
    /**
     * @Route("/oportunidade/salvar")
     * @Method("POST")
     * @param Request $request
     */
    public function SalvarAction(Request $request) {
        /*
        Exemplo .json:

        {
            "descricao": "Analista Programador",
            "periodoInicial": "01/06/2018",
            "periodoFinal": "01/07/2018"
        }

        */

        #dump($request);
        #dump($request->getContent()); die;

        $serializerService = $this->get('infra.serializer.service');
        try {
            $oportunidade = $serializerService->converter($request->getContent(), Oportunidade::class);
            dump($oportunidade); die;
        } catch (Exception $exc) {
            dump($exc->getTraceAsString());
            die;
        }
    }
}