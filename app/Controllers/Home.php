<?php

namespace App\Controllers;

use GuzzleHttp\Client;
use CodeIgniter\Controller;

class Home extends BaseController
{

    public function index(): string
    {
        // Ensure session is started
        $session = session();

        // Create Guzzle client
        $client = new Client();

        // API key for NewsAPI.org
        $apiKey = '4297c38bb14d4dd7af10bc575b82f961';

        // Define the sources
        $sources = [
            'bbc-news',
            'cnn',
            'techcrunch',
            'the-new-york-times',
            //Tambah sumber berita disini

            // Existing sources

            // // Additional sources
            // 'reuters', // Global news with high-quality images
            // 'national-geographic', // Engaging articles and stunning photography
            // 'the-guardian', // Reputable international news source with strong visuals
            // 'the-economist', // In-depth analysis and global coverage with infographics
            // 'vice-news', // Unconventional news reporting with creative visuals
            // 'vox', // Explanatory journalism with clear visuals and videos
        ];

        // Initialize an array to store articles
        $articles = [];

        // Fetch articles from each source
        foreach ($sources as $source) {
            $url = "https://newsapi.org/v2/top-headlines?sources={$source}&apiKey={$apiKey}&pageSize=1";

            try {
                $response = $client->request('GET', $url);
                $data = json_decode($response->getBody()->getContents(), true);

                // Fetch the first article from the current source
                if (!empty($data['articles'])) {
                    // Add source information to each article
                    foreach ($data['articles'] as $article) {
                        $article['source_name'] = $source;
                        $articles[] = $article;
                    }
                }
            } catch (\Exception $e) {
                // Log the error if needed
                // Continue to the next source
            }
        }

        // Ensure there are at least four articles
        $article1 = $articles[0] ?? null;
        $article2 = $articles[1] ?? null;
        $article3 = $articles[2] ?? null;
        $article4 = $articles[3] ?? null;
        $article5 = $articles[4] ?? null;
        $article6 = $articles[5] ?? null;
        $article7 = $articles[6] ?? null;
        $article8 = $articles[7] ?? null;

        // Pass the data to the view
        return view('news-view', [
            'article1' => $article1,
            'article2' => $article2,
            'article3' => $article3,
            'article4' => $article4,
            'article5' => $article5,
            'article6' => $article6,
            'article7' => $article7,
            'article8' => $article8
        ]);
    }

    public function detail($id): string
    {
        $session = session();
        $article = $session->get('article' . $id);

        if (!$article) {
            return view('detail/detail-new', ['article' => null, 'error' => 'Article not found']);
        }

        return view('detail/detail-new', ['article' => $article]);
    }

    //     $session = session();
    //     $article = $session->get($id);

    //     if (!$article) {
    //         $data = ['article' => null, 'error' => 'Article not found'];
    //     } else {
    //         $data = ['article' => $article];
    //     }

    //     return view('detail/detail-new', $data);
    // }
}
