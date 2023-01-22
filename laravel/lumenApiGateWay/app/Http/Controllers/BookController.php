<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Services\BookService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class BookController extends Controller
{
    use ApiResponser;

    /**
     * [The service to consume the books microservice]
     *
     * @var $BookService
     */
    public $bookService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    /**
     * Return the list of bookss
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->successResponse($this->bookService->obtainBooks());
    }

    /**
     * Create one new book
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Show one book
     * @return Illuminate\Http\Response
     */
    public function show($book)
    {

    }

    /**
     * Update one book
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $book)
    {

    }

    /**
     * Delete one book
     * @return Illuminate\Http\Response
     */
    public function destory($book)
    {

    }
}
