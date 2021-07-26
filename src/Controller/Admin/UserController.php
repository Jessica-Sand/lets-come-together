<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Form\Type\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/user", name="admin_user_")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/list", name="list")
     */
    public function list(UserRepository $userRepository): Response
    {
        return $this->render('admin/user/list.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit")
     * @return void
     */
    public function edit(User $user, Request $request): Response 
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            dd($user);
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash('success', 'L\'utilisateur ' . $user->getPseudo() . ' a bien été mis à jour');
            
        }

        return $this->render('admin/user/edit.html.twig', [
            'form' => $form->createView(),
            'user' => $user
        ]);
    }

    /**
     * @Route("/{id}/status", name="status_change")
     *
     * Function for change the status of the User in the DataBase
     */
    public function statusChange(User $user)
    {
        $em = $this->getDoctrine()->getManager();
        if ($user->getStatus() == 1) {
            $user->setStatus(0);
            $em->flush();

            return $this->redirectToRoute('admin_user_list');
        }else{
            $user->setStatus(1);
            $em->flush();

            return $this->redirectToRoute('admin_user_list');
        }
    }

}
