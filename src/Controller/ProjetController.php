<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Operation;

use App\Form\OperationType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\OperationRepository;

class ProjetController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     */
    public function index(): Response
    {
        return $this->render('projet/index.html.twig', [
            'controller_name' => 'ProjetController',
        ]);
    }

     /**
     * @Route("/profile/home", name="app_home")
     */
    public function home(OperationRepository $repo): Response
    {
        $Operations = $repo->findAll();
        return $this->render('projet/home.html.twig', [
            'controller_name' => 'ProjetController',
            'Operations' => $Operations,
            'id' => $this->getUser()
        ]);
    }

    /**
     * @Route("/superadmin/delete/{id}", name="app_delete", methods={"POST"})
     */
    public function delete(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user);
        }

        return $this->redirectToRoute('app_show_users', [], Response::HTTP_SEE_OTHER);
    }

     /**
     * @Route("/operation/create", name="app_createOp")
     */
    public function CreateOp(Request $request, EntityManagerInterface $manager)
    {
        $Operation = new Operation;
        $form = $this->createForm(OperationType::class,$Operation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $Operation->setUser($this->getUser());
            $manager->persist($Operation);
            $manager->flush();
            return $this->redirectToRoute("app_home");
        }
        return $this->render('projet/CreateOp.html.twig', [
            'form' => $form->createView()
            
        ]);
    }

    /**
     * @Route("/operation", name="app_operation")
     */
    public function listOperation(OperationRepository $repo): Response
    {
        $Operations = $repo->findAll();
        return $this->render('projet/listOperation.html.twig', [
            'controller_name' => 'ProjetController',
            'Operations' => $Operations,
            'id' => $this->getUser()
        ]);
    }
    
}


