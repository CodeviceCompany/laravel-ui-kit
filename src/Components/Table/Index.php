<?php

namespace CodeviceCompany\LaravelUiKit\Components\Table;

use Illuminate\View\Component;
use function view;

class Index extends Component
{
    public function __construct(
        public $title = null,
        public $description = null,
        public $actions = null,
        public $thead = null,
    ) {
    }

    public function render()
    {
        return view('ui-kit::components.table.index');
    }
}
