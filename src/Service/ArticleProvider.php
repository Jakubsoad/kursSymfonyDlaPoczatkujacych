<?php

namespace App\Service;

use App\Entity\Article;

class ArticleProvider
{
    public function __construct(
        private ImageProvider $imageProvider
    ) {
    }

    public function transformDataForTwig(array $articles): array
    {
        $transformedData = [];
        /** @var Article $article */
        foreach ($articles as $article) {
            $transformedData['articles'][] = $this->prepareOneArticle($article);
        }

        return $transformedData;
    }

    public function prepareOneArticle(Article $article, bool $shortenContent = true): array
    {
        $transformedImagesData = $this->imageProvider->transformDataForTwig(
            $article->getImages()->toArray()
        );

        if ($shortenContent) {
            $content = substr($article->getContent(), 0, 30) . '...';
        } else {
            $content = $article->getContent();
        }

        return [
            'title' => $article->getTitle(),
            'content' => $content,
            'link' => 'article/' . $article->getId(),
            'dateAdded' => $article->getDateAdded(),
            'images' => $transformedImagesData,
        ];
    }
}
