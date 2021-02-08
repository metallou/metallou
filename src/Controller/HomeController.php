<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * 
 */
class HomeController extends AbstractController
{
    /**
     * 
     */
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }

    /**
     * 
     */
    public function experiences(): Response
    {
        return $this->render('experiences.html.twig');
    }
    
    /**
     * 
     */
    public function studies(): Response
    {
        return $this->render('studies.html.twig');
    }
    
    /**
     * 
     */
    public function projects(): Response
    {
        return $this->render('projects.html.twig');
    }
    
    /**
     * 
     */
    public function resume(): Response
    {
        return $this->render('resume.html.twig');
    }
}