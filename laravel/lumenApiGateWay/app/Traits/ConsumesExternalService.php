<?php

namespace App\Traits;

use GuzzleHttp\Client;

trait ConsumesExternalService
{
    /**
     * @return string
     */
    public function performRequest($method, $requiredUrl, $formParams =[], $headers = [])
    {
        $client = new Client([
            'base_uri' => $this->baseUri,
        ]);

        $response = $client->request($method, $requiredUrl, ['form_params' => $formParams, 'headers' => $headers]);

        return $response->getBody()->getContents();
    }
}