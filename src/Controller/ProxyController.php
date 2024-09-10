<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ProxyController
{
    private $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    
    #[Route('/proxy/{path}', name: 'app_proxy', requirements: ['path' => '.+'], methods: ['GET', 'POST', 'OPTIONS'])]
    public function proxy(Request $request, $path): Response
    {
        $authentication = new \Http\Message\Authentication\Bearer('AaayDcmaQsTOuerTdn9xxqCqMxFBPvQsLttFKR9ZfiUbHVA8nxiyWYK3wHx9dGd2');
        $genius = new \Genius\Genius($authentication);
        $upvoteAnnotation = $genius->getAnnotationsResource()->get(11852248);
        dd($upvoteAnnotation);

        // $url = 'https://api.genius.com/' . $path;

        // $options = [
        //     'headers' => [
        //         'Authorization' => 'Bearer AaayDcmaQsTOuerTdn9xxqCqMxFBPvQsLttFKR9ZfiUbHVA8nxiyWYK3wHx9dGd2', // Remplace par ton token
        //         'Content-Type' => 'application/json',
        //         'Origin' => $request->headers->get('Origin'),
        //         'Accept' => 'application/json',
        //     ],
        //     'query' => $request->query->all(),
        // ];

        // $response = $this->httpClient->request(
        //     $request->getMethod(),
        //     $url,
        //     $options
        // );

        // return new Response(
        //     $response->getContent(),
        //     $response->getStatusCode(),
        //     ['Content-Type' => $response->getHeaders(false)['content-type'][0] ?? 'application/json']
        // );
    }
}