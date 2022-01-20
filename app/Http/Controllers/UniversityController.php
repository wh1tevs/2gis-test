<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class UniversityController extends Controller
{
    private $api_url = 'http://universities.hipolabs.com/search';

    /**
     * Universities array
     * @var array
     */
    private $universities;

    /**
     * Items per page
     * @var int
     */
    private $limit = 10;

    /**
     * Pages count
     * @var int
     */
    private $pages;

    /**
     * Current page
     * @var int
     */
    private $page;

    /**
     * Search query
     * @var string
     */
    private $search;

    public function __construct() {
        $page = ($_GET['page'] ?? 1);
        $this->search = $_GET['search'] ?? '';

        $request = Http::get($this->api_url, [ 'name' => $this->search ])
            ->collect()
            ->chunk($this->limit);

        $this->pages = $request->count();
        $this->page = $page >= $this->pages ? $this->pages : $page;
        $this->universities = $request[$this->page - 1];

    }

    public function show() {
        return view('index', [
            'universities' => $this->universities,
            'pages' => $this->pages,
            'page' => $this->page,
            'search' => $this->search
        ]);
    }
}
