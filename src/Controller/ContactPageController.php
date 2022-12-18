<?php

namespace App\Controller;

use App\Repository\ContactInformationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactPageController extends AbstractController
{
    public function __construct(
        private ContactInformationRepository $contactInformationRepository
    )
    {
    }

    #[Route('/contact', name: 'blog-contact')]
    public function index(): Response
    {
        $contactInformations = $this->contactInformationRepository->findAll();

        return $this->render('contact_page/index.html.twig', [
            'contactInformations' => $contactInformations,
        ]);
    }
}
