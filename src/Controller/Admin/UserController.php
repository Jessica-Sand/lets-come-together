<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
    public function list(): Response
    {
        return $this->render('admin/user/list.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
