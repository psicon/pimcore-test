<?php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ContentController extends FrontendController
{
    /**
     * @Template
     * @param Request $request
     * @return array
     */
    public function defaultAction (Request $request)
    {
        return [];
    }
    
   
}