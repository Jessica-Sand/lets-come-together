<?php

namespace App\Controller;

use App\Repository\DepartmentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/api/v1", name="api_v1_")
 */
class DepartmentController extends AbstractController
{
    /**
     * @Route("/departments", name="departments")
     */
    public function list(DepartmentRepository $departmentRepository): Response
    {
        return $this->json($departmentRepository->findAll(), 200, [], [
            'groups' => 'Departments'
        ]);
    }

    /**
     * @Route("/departments/{id}", name="departments_users")
     */
    public function show($id, DepartmentRepository $departmentRepository): Response
    {
        return $this->json($departmentRepository->findOneBy(['id' => $id]), 200, [], [
            'groups' => 'Departments_Users'
        ]);
    }
}
