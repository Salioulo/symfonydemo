<?php

namespace Projet\GeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use symfony\Component\DependencyInjection\ContainerAware,
	symfony\Component\HttpFoundation\RedirectResponse;
use Projet\GeneralBundle\Entity\Demandes;
Use Projet\GeneralBundle\Form\DemandesForm;

class DemandeController extends Controller
{
 	public function ajouterAction()
	{
		$message="Soumettre demande";
		$em=$this->getDoctrine()->getManager();
		
		$demande = new Demandes;
		$form = $this->createForm(new DemandesForm(), $demande);
	
		$request = $this->getRequest();
		
		if($request->getMethod()=='POST')
		{
			$form->handleRequest($request);
		
			if($form->isValid())
			{
				$em->persist($demande);
				$em->flush();
				$message="Demande soumise avec succes";
			}
		}
		return $this->render('ProjetGeneralBundle:Demande:ajouter.html.twig',
			array ('form' => $form->createView(),
			'message'=>$message,
			      )
	        );
	}

	public function listerAction()
	{
		$em = $this->container->get('doctrine')->getEntityManager();
		$demandes = $em->getRepository('ProjetGeneralBundle:Demandes')->findAll();
		return $this->container->get('templating')->renderResponse('ProjetGeneralBundle:Demande:lister.html.twig', array(
		'demandes' => $demandes));
	}
	public function contactAction()
	{
		return $this->container->get('templating')->renderResponse('ProjetGeneralBundle:Demande:contact.html.twig');
	}
	public function equipeAction()
	{
		return $this->container->get('templating')->renderResponse('ProjetGeneralBundle:Demande:equipe.html.twig');
	}
	public function connecterAction()
	{
		return $this->container->get('templating')->renderResponse('ProjetGeneralBundle:Demande:connecter.html.twig');
	}
}













