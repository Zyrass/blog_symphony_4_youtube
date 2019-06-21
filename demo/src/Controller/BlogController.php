<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        $repo = $this->getDoctrine()->getRepository(Article::class);

        // Permet de récupérer l'article 12
        // $article = $repo->find(12);

        // Permet de récupérer un article avec comme titre : Titre de l'article
        // $article = $repo->findOneByTitle('Titre de l\'article');

        // Permet de récupérer tout les articles avec comme titre : Titre de l'article.
        // $articles = $repo->findByTitle('Titre de l\'article');

        // Permet de récupérer tout les articles.
        $articles = $repo->findAll();

        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'articles' => $articles
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
     * @Route("/blog/article/{id}", name="blog_show_article")
     */
    public function show($id)
    {
        $repo = $this->getDoctrine()->getRepository(Article::class);
        $article = $repo->find($id);
        return $this->render('/blog/show.html.twig', [
            'article' => $article
        ]);
    }
}
