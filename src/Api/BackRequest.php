<?php
namespace App\Api;

use GuzzleHttp\Client;

class BackRequest {

  public function request($path, $query = []) {
    $client = new Client([
      'base_uri' => getenv('API_URI') . '/api/',
      'timeout' => 30
    ]);
    $options = [
      'headers' => [
        'Content-Type' => 'application/json',
        'Accept' => 'application/json'
      ],
      'query' => $query
    ];

    $response = $client->request('GET', $path, $options);

    $body = $response->getBody();

    return json_decode($body, 'json');
  }

  public function subRequest($fields) {
    $client = new Client([
      'base_uri' => getenv('API_URI') . '/subrequest?_format=json',
      'timeout' => 30
    ]);
    $option = [
      'headers' => [
        'Content-Type' => 'application/json',
        'Accept' => 'application/json'
      ]
    ];
    $response = $client->request('GET', $path, $option);
    return $response->getBody();
  }

  public function getFileBaseUrl($param) {
    return getenv('API_URI');
  }

}