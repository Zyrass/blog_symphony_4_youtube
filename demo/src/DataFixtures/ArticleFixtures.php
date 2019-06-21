<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Article;

class ArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ( $i = 1; $i <= 10; $i++) {
            $article = new Article();
            $article->setTitle("Titre de l'article n°$i")
                    ->setContent("<p class='lead'>Contenu de l'article n°$i <br /> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita quas error non, ad beatae libero blanditiis eum vero sequi commodi sunt reprehenderit a dignissimos quo maxime, perspiciatis deleniti amet numquam.</p>")
                    ->setImage("http://placehold.it/600x200")
                    ->setCreatedAt(new \DateTime());
            $manager->persist($article);
        }
        $manager->flush();
    }
}
