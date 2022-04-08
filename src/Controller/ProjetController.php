<?php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Entity\User;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
    public function home(): Response
    {
        return $this->render('projet/home.html.twig', [
            'controller_name' => 'ProjetController',
        ]);
    }

    /**
     * @Route("/profile/operation", name="app_operation")
     */
    public function listOperation(): Response
    {
        return $this->render('projet/listOperation.html.twig', [
            'controller_name' => 'ProjetController',
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
}
