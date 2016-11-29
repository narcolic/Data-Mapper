<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class fypController extends Controller
{
    /**
     * @Route("/intropage", name="intro_page")
     */
    public function introAction(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render('intropage/intro.html.twig');
    }

    /**
     * @Route("/", name="mainpage_page")
     */
    public function indexAction(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render('mainpage/mainpage.html.twig');
    }

    /**
     * @Route("/comparisontool", name="comp_tool")
     */
    public function comptoolAction(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render('comptool/comparisontool.html.twig');
    }

    /**
     * @Route("/faq", name="faq")
     */
    public function faqAction(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render('mainpage/faq.html.twig');
    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutAction(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render('mainpage/about.html.twig');
    }

    /**
     * @Route("/fire", name="fire")
     */
    public function fireAction(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render('categories/fire.html.twig');
    }

    /**
     * @Route("/crime", name="crime")
     */
    public function crimeAction(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render('categories/crimerate.html.twig');
    }

    /**
     * @Route("/land", name="land")
     */
    public function landAction(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render('categories/land.html.twig');
    }

}
