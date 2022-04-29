<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class HomeController extends AbstractController
{
    public function index():Response
    {
       // get the user information and notifications somehow

       // the template path is the relative file path from `templates/`
       return $this->render('home.html.twig');
    }
}