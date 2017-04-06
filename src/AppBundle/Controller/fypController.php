<?php

namespace AppBundle\Controller;

use Ob\HighchartsBundle\Highcharts\Highchart;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class fypController extends Controller
{
    /**
     * @Route("/intropage", name="intro_page")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
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
        return $this->render('intro_page/mainpage.html.twig');
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
     * @Route("/map", name="map")
     */
    public function mapAction(Request $request)
    {
        $firepoi = $this->getDoctrine()
            ->getRepository('AppBundle:FirePoi')
            ->findAll();

        $crimepoi = $this->getDoctrine()
            ->getRepository('AppBundle:CrimePoi')
            ->findAll();

        return $this->render('mainpage/map.html.twig',
            array(
                'viewFirepoi' => $firepoi,
                'viewCrimePoi' => $crimepoi));
    }

    /**
     * @Route("/statistics", name="statistics")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function statisticsAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(':statistics:statistics.html.twig');
    }

    /**
     * @Route("/generalinfo", name="general_info")
     */
    public function generalinfoAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render(':mainpage:ginfo.html.twig');
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
        $form = $this->createForm('Acme\Bundle\Type\ContactType',null,array(
            // To set the action use $this->generateUrl('route_identifier')
            'method' => 'POST'
        ));

        if ($request->isMethod('POST')) {
            // Refill the fields in case the form is not valid.
            $form->handleRequest($request);

            if($form->isValid()){
                // Send mail
                if($this->sendEmail($form->getData())){

                    // Everything OK, redirect to wherever you want ! :

                    return $this->redirectToRoute('about');
                }else{
                    // An error ocurred, handle
                    var_dump("Errooooor :(");
                }
            }
        }

        return $this->render('mainpage/about.html.twig', array(
            'form' => $form->createView()
        ));
    }

    private function sendEmail($data){
        $myappContactMail = 'narcolic832@gmail.com';
        $myappContactPassword = 'Onionada832@';

        // In this case we'll use the ZOHO mail services.
        // If your service is another, then read the following article to know which smpt code to use and which port
        // http://ourcodeworld.com/articles/read/14/swiftmailer-send-mails-from-php-easily-and-effortlessly
        $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465,'ssl')
            ->setUsername($myappContactMail)
            ->setPassword($myappContactPassword);

        $mailer = \Swift_Mailer::newInstance($transport);
        $message = \Swift_Message::newInstance("Our Code World Contact Form ". $data["subject"])
            ->setFrom(array($myappContactMail => "Message by ".$data["name"]))
            ->setTo(array($myappContactMail => $myappContactMail))
            ->setBody($data["message"]."<br>ContactMail :".$data["email"]);
        $result = $mailer->send($message);


        return $result;
    }

    /**
     * @Route("/fire", name="fire")
     */
    public function fireAction(Request $request)
    {

        $firepoi = $this->getDoctrine()
            ->getRepository('AppBundle:FirePoi')
            ->findAll();

        $brumfirepoi = $this->getDoctrine()
            ->getRepository('AppBundle:FirePoi')
            ->findBy(array('loc' => 'Birmingham'));

        $londonfirepoi = $this->getDoctrine()
            ->getRepository('AppBundle:FirePoi')
            ->findBy(array('loc' => 'London'));

        $manchfirepoi = $this->getDoctrine()
            ->getRepository('AppBundle:FirePoi')
            ->findBy(array('loc' => 'Manchester'));


        $crimepoi = $this->getDoctrine()
            ->getRepository('AppBundle:CrimePoi')
            ->findAll();


        // replace this example code with whatever you need
        return $this->render(
            'categories/fire.html.twig',
            array(
                'viewFirepoi' => $firepoi,
                'viewCrimePoi' => $crimepoi,
                'viewBrumFirePoi' => $brumfirepoi,
                'viewLondonFirePoi' => $londonfirepoi,
                'viewManchFirePoi' => $manchfirepoi,
            )
        );
    }

    /**
     * @Route("/crime", name="crime")
     */
    public function crimeAction(Request $request)
    {
        $crimepoi = $this->getDoctrine()
            ->getRepository('AppBundle:CrimePoi')
            ->findAll();

        // replace this example code with whatever you need
        return $this->render('categories/crimerate.html.twig', array('viewCrimepoi' => $crimepoi));
    }

    /**
     * @Route("/traffic", name="traffic")
     */
    public function trafficAction(Request $request)
    {

        // replace this example code with whatever you need
        return $this->render('categories/traffic.html.twig');
    }


    /**
     * @Route("/firestats", name="firestats")
     */
    public function firestatsAction(Request $request)
    {

        $brumfirepoi = $this->getDoctrine()
            ->getRepository('AppBundle:FirePoi')
            ->findBy(array('loc' => 'Birmingham'));

        $londonfirepoi = $this->getDoctrine()
            ->getRepository('AppBundle:FirePoi')
            ->findBy(array('loc' => 'London'));

        $manchfirepoi = $this->getDoctrine()
            ->getRepository('AppBundle:FirePoi')
            ->findBy(array('loc' => 'Manchester'));
// replace this example code with whatever you need
        return $this->render(
            'statistics/firestats.html.twig',
            array(
                'viewBrumFirePoi' => $brumfirepoi,
                'viewLondonFirePoi' => $londonfirepoi,
                'viewManchFirePoi' => $manchfirepoi,
            )
        );
    }

    /**
     * @Route("/crimestats", name="crimestats")
     */
    public function crimestatsAction(Request $request)
    {

        $brumfirepoi = $this->getDoctrine()
            ->getRepository('AppBundle:FirePoi')
            ->findBy(array('loc' => 'Birmingham'));

        $londonfirepoi = $this->getDoctrine()
            ->getRepository('AppBundle:FirePoi')
            ->findBy(array('loc' => 'London'));

        $manchfirepoi = $this->getDoctrine()
            ->getRepository('AppBundle:FirePoi')
            ->findBy(array('loc' => 'Manchester'));
// replace this example code with whatever you need
        return $this->render(
            'statistics/crimestats.html.twig',
            array(
                'viewBrumFirePoi' => $brumfirepoi,
                'viewLondonFirePoi' => $londonfirepoi,
                'viewManchFirePoi' => $manchfirepoi,
            )
        );
    }

}
