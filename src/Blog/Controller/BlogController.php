<?php

namespace Blog\Controller;

use Blog\Model\ArticleModel;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class BlogController
{
    public function indexAction(Application $app)
    {
        $articles = ArticleModel::take($app['app.blog']['articlesPerPage'])->get();
        dump($articles);

        return $app['twig']->render('@Blog/article-list.html.twig', [
            'articles' => $articles,
        ]);
    }

    public function articleAction(Request $request, Application $app)
    {
        $article = $request->attributes->get('article');
        if (empty($article)) {
            $app->abort(404, 'The requested article was not found.');
        }

        return $app['twig']->render('@Blog/article-page.html.twig', [
            'article' => $article,
        ]);
    }

    public function apiAction(Request $request, Application $app)
    {
        $article = new ArticleModel();
        $article->article_title = 'Add';
        $article->save();

        return $app->json([
            'add' => $article->article_id,
        ]);
    }
}