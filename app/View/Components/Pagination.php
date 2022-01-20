<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Pagination extends Component
{
    /**
     * Available pages around current
     * @var int
     */
    private $pages_around = 4;

    /**
     * Pages count
     * @var int
     */
    public $pages;

    /**
     * Current page
     * @var int
     */
    public $page;

    /**
     * Pages range start from
     * @var int
     */
    public $start;

    /**
     * Pages range end at
     * @var int
     */
    public $end;

    /**
     * Link
     * @var string
     */
    public $to;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pages, $page, $to)
    {
        $this->pages = $pages;
        $this->page = $page;
        $this->to = $to;

        $this->start = ($this->page - $this->pages_around) > 0
            ? $this->page - $this->pages_around
            : 1;
        $this->end = ($this->page + $this->pages_around) < $this->pages
            ? $this->page + $this->pages_around
            : $pages;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.pagination');
    }
}
