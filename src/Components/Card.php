<?php

namespace CodeviceCompany\LaravelUiKit\Components;

use Illuminate\View\Component;
use function view;

class Card extends Component
{
    public function __construct(
        public $title = false,
        public $description = false,
        public $actions = false,
    ) {
    }

    public function render()
    {
        return view('ui-kit::components.card');
    }
}
