<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('blog/home.html.twig', [
            'version' => 0.1,
            'author'  => 'Alain Guillon',
            'pseudo'  => 'Zyrass',
            'age'     => 35
        ]);
    }

    /**
     * @Route("/blog/article/69", name="blog_show_article")
     */
    public function show()
    {
        return $this->render('/blog/show.html.twig');
    }
}
