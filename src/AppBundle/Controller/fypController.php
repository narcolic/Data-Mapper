<?php

namespace AppBundle\Controller;

use Ob\HighchartsBundle\Highcharts\Highchart;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class fypController extends Controller
{

    /**
     * @Route("/", name="mainpage_page")
     * @return \Symfony\Component\HttpFoundation\Response
     * @internal param Request $request
     */
    public function indexAction()
    {

        // replace this example code with whatever you need
        return $this->render('intro_page/mainpage.html.twig');
    }

    /**
     * @Route("/map", name="map")
     * @return \Symfony\Component\HttpFoundation\Response
     * @internal param Request $request
     */
    public function mapAction()
    {
        $firepoi = $this->getDoctrine()
            ->getRepository('AppBundle:CrimePoiMap')
            ->findAll();

        $crimepoi = $this->getDoctrine()
            ->getRepository('AppBundle:CrimePoi')
            ->findAll();

        return $this->render(
            'mainpage/map.html.twig',
            array(
                'viewFirepoi' => $firepoi,
                'viewCrimePoi' => $crimepoi,
            )
        );
    }

    /**
     * @Route("/generalinfo", name="general_info")
     * @return \Symfony\Component\HttpFoundation\Response
     * @internal param Request $request
     */
    public function generalinfoAction()
    {
        // replace this example code with whatever you need
        return $this->render(':mainpage:ginfo.html.twig');
    }

    /**
     * @Route("/faq", name="faq")
     * @return \Symfony\Component\HttpFoundation\Response
     * @internal param Request $request
     */
    public function faqAction()
    {

        // replace this example code with whatever you need
        return $this->render('mainpage/faq.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function contactAction(Request $request)
    {
        $form = $this->createForm(
            'Acme\Bundle\Type\ContactType',
            null,
            array(
                // To set the action use $this->generateUrl('route_identifier')
                'method' => 'POST',
            )
        );

        if ($request->isMethod('POST')) {
            // Refill the fields in case the form is not valid.
            $form->handleRequest($request);

            if ($form->isValid()) {
                // Send mail
                if ($this->sendEmail($form->getData())) {

                    // Everything OK, redirect to wherever you want ! :

                    return $this->redirectToRoute('contact');
                } else {
                    // An error occurred, handle
                    var_dump("Error :(");
                }
            }
        }

        return $this->render(
            ':mainpage:contact.html.twig',
            array(
                'form' => $form->createView(),
            )
        );
    }

    private function sendEmail($data)
    {
        $myappContactMail = 'narcolic832@gmail.com';
        $myappContactPassword = 'Onionada832@';

        // In this case we'll use the ZOHO mail services.
        // If your service is another, then read the following article to know which smpt code to use and which port
        // http://ourcodeworld.com/articles/read/14/swiftmailer-send-mails-from-php-easily-and-effortlessly
        $transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
            ->setUsername($myappContactMail)
            ->setPassword($myappContactPassword);

        $mailer = \Swift_Mailer::newInstance($transport);
        $message = \Swift_Message::newInstance("Our Code World Contact Form ".$data["subject"])
            ->setFrom(array($myappContactMail => "Message by ".$data["name"]))
            ->setTo(array($myappContactMail => $myappContactMail))
            ->setBody($data["message"]."<br>ContactMail :".$data["email"]);
        $result = $mailer->send($message);


        return $result;
    }

    /**
     * @Route("/firestats", name="firestats")
     * @return \Symfony\Component\HttpFoundation\Response
     * @internal param Request $request
     */
    public function firestatsAction()
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
     * @return \Symfony\Component\HttpFoundation\Response
     * @internal param Request $request
     */
    public function crimestatsAction()
    {

        $brumfirepoi = $this->getDoctrine()
            ->getRepository('AppBundle:CrimePoi')
            ->findBy(array('idloc' => 'West Midlands'));

        $londonfirepoi = $this->getDoctrine()
            ->getRepository('AppBundle:CrimePoi')
            ->findBy(array('idloc' => 'City of London'));

        $manchfirepoi = $this->getDoctrine()
            ->getRepository('AppBundle:CrimePoi')
            ->findBy(array('idloc' => 'Durham'));

// replace this example code with whatever you need
        return $this->render(
            'statistics/crimestats.html.twig',
            array(
                'viewBrumCrimePoi' => $brumfirepoi,
                'viewLondonCrimePoi' => $londonfirepoi,
                'viewManchCrimePoi' => $manchfirepoi,
            )
        );
    }

}
