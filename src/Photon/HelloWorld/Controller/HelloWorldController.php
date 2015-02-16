<?php
// src/Photon/HelloWorld/Controller/HelloWorld.php
namespace Photon\HelloWorld\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HelloWorldController extends Controller {

    /**
     * @Route("/HelloWorld")
     */
    public function HelloWorldAction()
    {
    $response = new Response(
        '<h1>Hello, World!</h1>',
        Response::HTTP_OK,
        array('content-type' => 'text/html')
    );
        return $response;
    }
}
