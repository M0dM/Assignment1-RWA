<?php

namespace ITB\Bundle\UltimateFrisbeeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class TournamentController extends Controller
{
    /**
     * @Route("/tournaments", name="uf_tournament")
     * @Template("ITBUltimateFrisbeeBundle:Tournament:tournament.html.twig", vars={"null"})
     */
    public function indexAction(){
    }
    
    /**
     * @Route("/tournaments/calendar", name="uf_tournament_calendar")
     * @Template("ITBUltimateFrisbeeBundle:Tournament:tournamentCalendar.html.twig", vars={"null"})
     */
    public function tournamentCalendarAction(){
    }
    
}
