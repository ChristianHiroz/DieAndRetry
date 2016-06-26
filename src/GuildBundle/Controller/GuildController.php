<?php

namespace GuildBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GuildController extends Controller
{
    /**
     * @Route("/group",name="group")
     * @Template()
     */
    public function indexAction(){
        return array("user" => $this->getUser());
    }
}
