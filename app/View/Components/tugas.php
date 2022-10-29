<?php

namespace App\View\Components;

use Illuminate\View\Component;

class table extends Component
{
    public $badan;
    public $header;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($header, $badan)
    {
        $this->header = $header;
        $this->badan = $badan;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tugas');
    }
}
