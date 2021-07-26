<?php

namespace App\Controller\Admin;

use App\Entity\Instrument;
use App\Entity\UserApp;
use App\Form\RegistrationUserAppType;
use App\Repository\GenreRepository;
use App\Repository\InstrumentRepository;
use App\Repository\UserAppRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

/**
 * @Route("", name="admin_")
 * @IsGranted("ROLE_ADMIN")
 */
class AdminController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(GenreRepository $genreRepository, InstrumentRepository $instrumentRepository): Response
    {
        return $this->render('admin/layout.html.twig', [
            'genres' => $genreRepository,
            'instruments' => $instrumentRepository
        ]);
    }

    /**
     * @Route("/add", name="add")
     * @return void
     * 
     * @IsGranted("ROLE_SUPER_ADMIN")
     */
    public function add(Request $request, UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = new UserApp();

        $form = $this->createForm(RegistrationUserAppType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $user->setPassword($passwordHasher->hashPassword($user,$form->get('password')->getData()));
            
            $em = $this->getDoctrine()->getManager();

            $em->persist($user);
            $em->flush();

            // Flash message
            $this->addFlash('info', 'L\'utilisateur ' . $user->getLastname() . ' a bien été créée');
            return $this->redirectToRoute('admin_list');
        }

        return $this->render('admin/userApp/add.html.twig', [
            'form' => $form->createView(),
        ]);  
    }

    /**
     * @Route("/{id}/edit", name="edit", methods={"GET","POST"})
     */
    public function edit(Request $request, UserApp $user, UserPasswordHasherInterface $passwordHasher): Response
    {
        // On va tester que seul le propriétaire du compte
        // ou un SuperAdmin a le droit de modifier les infos utilisateur
        // Symfony appelle la méthode supports du Voter UserVoter
        $this->denyAccessUnlessGranted('ADMIN_EDIT', $user, 'Vous n\'êtes pas autorisé à modifier ce profil');
        // $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $form = $this->createForm(RegistrationUserAppType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // On récupère le mot de passe en clair
            $plainPassword = $form->get('password')->getData();

            // On ne modifie le mot de passe qui si celui-ci
            // a été saisi dans le formulaire
            if ($plainPassword) {
                // On hash le mot de passe
                $hashedPassword = $passwordHasher->hashPassword(
                    $user,
                    $plainPassword
                );

                // on met à jour la propriété 'password' avec le nouveau
                // mot de passe hashé
                $user->setPassword($hashedPassword);
            }


            $this->getDoctrine()->getManager()->flush();

            $this->addFlash('info', 'L\'utilisateur ' . $user->getLastname() . ' a bien été modifié');
            return $this->redirectToRoute('admin_list');
        }

        return $this->render('admin/userApp/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="delete", methods={"POST"})
     */
    public function delete(Request $request, UserApp $user): Response
    {
        $this->denyAccessUnlessGranted('ADMIN_DELETE', $user, 'Vous n\'êtes pas autorisé à supprimer ce profil');

        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($user);
            $entityManager->flush();
        }

        $this->addFlash('info', 'L\'utilisateur ' . $user->getLastname() . ' a bien été supprimer');
        return $this->redirectToRoute('admin_list');
    }

    /**
     * @Route("/list", name="list")
     *
     * @return void
     */
    public function list(UserAppRepository $userAdminRepository)
    {
        return $this->render('admin/userApp/list.html.twig', [
            'users' => $userAdminRepository->findAll(),
        ]);
    }

    
}
