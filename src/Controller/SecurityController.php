<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
     /**
     * @Route("/superadmin/registration", name="app_registration")
     * @Route("/superadmin/{id}/edit", name="app_edit_user")
     */
    public function registration(User $user = null, Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder) {
        
        if (!$user) {
            $user = new User();
        }
        

        $form = $this->createForm(RegistrationType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hash = $encoder->encodePassword($user,$user->getPassword());
            if ($user->getRoles() == ["ROLE_USER"] ) {
                $user->setNbOperationAutoriser(1);
            }elseif ($user->getRoles() == ["ROLE_ADMIN"]) {
                $user->setNbOperationAutoriser(3);
            }elseif ($user->getRoles() == ["ROLE_SUPER_ADMIN"]) {
                $user->setNbOperationAutoriser(5);
            }
            $user->setNbOperationEnCour(0);
            $user->setPassword($hash);
            $manager->persist($user);
            $manager->flush();

            return $this->redirectToRoute("app_show_users");
        }

        return $this->render("security/registration.html.twig", [
            "form" => $form->createView(),
            "editMode" => $user->getId() !== null
        ]);
    }


    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    /**
     * @Route("/logout", name="app_logout", methods={"GET"})
     */
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }



}
