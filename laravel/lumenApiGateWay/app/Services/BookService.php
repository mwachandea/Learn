<?php

namespace App\Services;

use App\Traits\ConsumesExternalService;

class BookService
{
    use ConsumesExternalService;

    /**
     * [The base url to consume the books service]
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
        $this->baseUri = config('services.books.base_url');
    }

    /**
     * [Obtain the full list of books from the book service]
     *
     * @return string
     * 
     */
    public function obtainBooks()
    {
        return $this->performRequest('GET', '/books');
    }
}
