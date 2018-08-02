<?php

namespace Projet\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use symfony\Component\DependencyInjection\ContainerAware,
	symfony\Component\HttpFoundation\RedirectResponse;
use Projet\GeneralBundle\Entity\Demandes;

class DefaultController extends Controller
{
 	public function indexAction()
	{
		return $this->container->get('templating')->renderResponse('ProjetGeneralBundle:Default:index.html.twig');
	}
}
