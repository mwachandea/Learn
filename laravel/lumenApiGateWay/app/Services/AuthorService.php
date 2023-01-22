<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class AuthorService
{
    use ConsumesExternalService;

    /**
     * [The base url to consume the author service]
     *
     * @var
     */
    public $baseUri;

    
    /**
     * [Description for __construct]
     *
     * 
     */
    public function __construct()
    {
        $this->baseUri = config('services.authors.base_url');
    }

    /**
     * [Obtain the full list of authors from the author service]
     *
     * @return string
     * 
     */
    public function obtainAuthors()
    {
        return $this->performRequest('GET', '/authors');
    }
}
