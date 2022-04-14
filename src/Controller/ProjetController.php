<?php

namespace App\Controller;

use DateTime;
use App\Entity\User;

use App\Entity\Operation;
use App\Form\OperationType;
use App\Repository\UserRepository;
use App\Repository\OperationRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\ChiffreAffaireRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProjetController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     */
    public function index(UserRepository $repoUser, OperationRepository $repoOp): Response
    {
        $users = $repoUser->findAll();
        $operations = $repoOp->findAll();
        return $this->render('projet/index.html.twig', [
            'controller_name' => 'ProjetController',
            "users" => $users,
            "operations" => $operations
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
    public function CreateOp(Request $request, EntityManagerInterface $manager,UserRepository $repo)
    {
        $Operation = new Operation;
        $form = $this->createForm(OperationType::class, $Operation);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user = $repo->find($this->getUser());
            $Operation->setArchiver(true);
            $Operation->setUser($this->getUser());
            $user->setNbOperationEnCour(($user->getNbOperationEnCour()+1));
            $manager->persist($Operation,$user);
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

    /**
     * @Route("/operation/Terminer/{id}",  name="terminer_operation")
     */
    public function terminer(Operation $op, EntityManagerInterface $manager, UserRepository $repo,ChiffreAffaireRepository $repoA): Response
    {
        $ca = $repoA->find(1);
        if ($op->gettype() == "Petite") {
            $ca->setValeur($ca->getValeur() + 1000);
            $ca->setPetite($ca->getPetite() + 1000);
        }elseif($op->gettype() == "Moyenne"){
            $ca->setValeur($ca->getValeur() + 2500);
            $ca->setMoyenne($ca->getMoyenne() + 2500);
        }elseif ($op->gettype() == "Grosse") {
            $ca->setValeur($ca->getValeur() + 10000);
            $ca->setGrosse($ca->getGrosse() + 10000);
        }
        $ca->setDernierAjouts(DateTime::createFromFormat('d/m/Y à H:i',date('d/m/Y à H:i')));
        $user = $repo->find($this->getUser());
        $user->setNbOperationEnCour(($user->getNbOperationEnCour() - 1));
        $ca->setPourcentGrosse(($ca->getGrosse()*100)/$ca->getValeur());
        $ca->setPourcentMoyenne(($ca->getMoyenne()*100)/$ca->getValeur());
        $ca->setPourcentPetite(($ca->getPetite()*100)/$ca->getValeur());
        $op->setArchiver(false);
        $manager->persist($op,$ca);
        $manager->flush();
        return $this->redirectToRoute('app_home');
    }

    /**
     * @Route("/superadmin/ca", name="aff_ca")
     */
    public function AfficherCA(ChiffreAffaireRepository $repo,EntityManagerInterface $manager)
    {
        $ca = $repo->find(1);
        return $this->render('projet/AffChiAffaire.html.twig', [
            'Chiffre' => $ca
        ]);
    }
    
}


