<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CardController
{
    /**
     * @Route("/card/{filter}")
     */
    public function indexAction( $filter  = "new" )
    {
        return new Response(
            '<html><body>Added card records: '.$filter.'</body></html>'
        );
    }
    
    /**
     * @Route("/card/edit/{id}")
     */
    public function editCardAction( $id = "0" )
    {
        return new Response(
            json_encode($id),
            200,
            array('Content-Type' => 'application/json')
        );
    }

}