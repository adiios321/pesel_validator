<?php

namespace App\Controller;

use App\Service\PeselValidator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PeselController extends AbstractController
{
    #[Route('/', name: 'pesel_form')]
    public function index(Request $request, PeselValidator $validator): Response
    {
        $pesel = $request->request->get('pesel');
        $isValid = null;

        if ($pesel !== null) {
            $isValid = $validator->isValid($pesel);
        }

        return $this->render('pesel/index.html.twig', [
            'pesel' => $pesel,
            'is_valid' => $isValid,
        ]);
    }
}
