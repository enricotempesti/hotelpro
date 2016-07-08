<?php

namespace Hotel\Bundle\RoomsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HotelRoomsBundle:Default:index.html.twig');
    }
}
