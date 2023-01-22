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

    /**
     * [Create one book using book service]
     *
     * @return string
     * 
     */
    public function createBook($data)
    {
        return $this->performRequest('POST', '/books', $data);
    }

    /**
     * [Obtain one single book from the book service]
     *
     * @param mixed $book
     * 
     * @return string
     * 
     */
    public function obtainBook($book)
    {
        return $this->performRequest('GET', "/books/{$book}");
    }

    /**
     * [Update on instance of book using the book service]
     *
     * @return string
     * 
     */
    public function editBook($data, $book)
    {
        return $this->performRequest('Put', "/books/{$book}", $data);
    }

    /**
     * [Remove a single book using the book service]
     *
     * @param mixed $book
     * 
     * @return [type]
     * 
     */
    public function deleteBook($book)
    {
        return $this->performRequest('DELETE', "/books/{$book}");
    }
}
