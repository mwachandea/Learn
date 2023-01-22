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

    /**
     * [Create one author using author service]
     *
     * @return string
     * 
     */
    public function createAuthor($data)
    {
        return $this->performRequest('POST', '/authors', $data);
    }

    /**
     * [Obtain one single author from the author service]
     *
     * @param mixed $author
     * 
     * @return string
     * 
     */
    public function obtainAuthor($author)
    {
        return $this->performRequest('GET', "/authors/{$author}");
    }

    /**
     * [Update on instance of author using the author service]
     *
     * @return string
     * 
     */
    public function editAuthor($data, $author)
    {
        return $this->performRequest('PUT', "/authors/{$author}", $data);
    }

    /**
     * [Remove a single author using the author service]
     *
     * @param mixed $author
     * 
     * @return [type]
     * 
     */
    public function deleteAuthor($author)
    {
        return $this->performRequest('DELETE', "/authors/{$author}");
    }
}
