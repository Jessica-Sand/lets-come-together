<?php

namespace App\Controller\Admin;

use App\Entity\UserRequest;
use App\Repository\UserRequestRepository;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("request", name="admin_request_")
 * @IsGranted("ROLE_ADMIN")
 */
class UserRequestController extends AbstractController
{
    /**
     * @Route("/list", name="list")
     */
    public function list(UserRequestRepository $userRequestRepository): Response
    {
        return $this->render('admin/user_request/list.html.twig', [
            'requests' => $userRequestRepository->findAll(),
        ]);
    }

    /**
     * @Route("/{id}", name="delete")
     * @return void
     */
    public function delete($id, UserRequestRepository $userRequestRepository, Request $request)
    {
        $submittedToken = $request->get('token');

        if ($this->isCsrfTokenValid('delete-request', $submittedToken)) {
            $userRequestToDelete = $userRequestRepository->find($id);
            if ($userRequestToDelete  === null) {
                throw $this->createNotFoundException('La ressource demandée n\'existe pas');
            }

            $em = $this->getDoctrine()->getManager();
            $em->remove($userRequestToDelete);
            $em->flush();

            $this->addFlash('success', 'La Requete a bien été supprimée');
            return $this->redirectToRoute('admin_request_list');
        } else {
            return new Response('Action interdite', 403);
        }
    }

    /**
     * @Route("/{id}/status", name="status_change")
     *
     * Function for change the status of the UserRequest in the DataBase
     */
    public function statusChange(UserRequest $userRequest)
    {
        $em = $this->getDoctrine()->getManager();
        if ($userRequest->getStatus() == 1) {
            $userRequest->setStatus(0);
            $em->flush();

            return $this->redirectToRoute('admin_request_list');
        }else{
            $userRequest->setStatus(1);
            $em->flush();

            return $this->redirectToRoute('admin_request_list');
        }
    }
}
