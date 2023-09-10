<?php

namespace App\Controller;

use App\Entity\Formulaire;
use App\Form\FormType;
use App\Repository\FormulaireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormController extends AbstractController
{
    #[Route('/form', name: 'app_form')]
    public function index(): Response
    {
        return $this->render('form/index.html.twig', [
            'controller_name' => 'FormController',
        ]);
    }
    #[Route('/form/list', name: 'app_list_form')]
    public function getAllClass(FormulaireRepository $repo) : Response
    {
        //recuperer la liste des classes 
        $rep=$repo->findall();

        //retourner view list et envoyer la liste des classes 
        return $this->render('form/list.html.twig', [
            'form' => $rep,
        ]);
    }
    #[Route('/form/add', name: 'app_form_add')]
    public function new(Request $request): Response
    {
        $formulaire = new Formulaire();
        $form = $this->createForm(FormType::class, $formulaire);
    
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($formulaire);
            $entityManager->flush();
    
            // Set a success flash message
            $this->addFlash('success', 'Formulaire ajouté avec succès.');
    
            // Redirect to the new URL
            return $this->redirectToRoute('app_form_add'); // Replace with your desired route
        }
    
        return $this->render('form/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    
    
    
    
    
    
}
