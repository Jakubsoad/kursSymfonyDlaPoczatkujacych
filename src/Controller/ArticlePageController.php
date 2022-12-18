<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use App\Service\ArticleProvider;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticlePageController extends AbstractController
{
    public function __construct(
        private ArticleRepository $articleRepository,
        private ArticleProvider $articleProvider
    )
    {
    }

    #[Route('/articles', 'blog-articles')]
    public function showArticles(): Response
    {
        $articles = $this->articleRepository->findAll();
        $parameters = [];
        if ($articles) {
            $parameters = $this->articleProvider->transformDataForTwig($articles);
        }

        return $this->render('articles/articles.html.twig', $parameters);
    }

    #[Route('/article/{article}', 'blog-article')]
    public function showArticle(Article $article): Response
    {
        $transformedArticle = $this->articleProvider->prepareOneArticle($article, shortenContent: false);

        return $this->render('articles/article.html.twig', ['article' => $transformedArticle]);
    }
}
