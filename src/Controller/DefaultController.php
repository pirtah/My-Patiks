<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
  /**
   * Affiche la page d'accueil
   */
  #[Route('/', name: 'app_default_controller')]
  /* #[IsGranted('ROLE_USER')] */
  public function display(): Response
  {
    return $this->render('default.html.twig');
  }
}
