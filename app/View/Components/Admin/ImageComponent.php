<?php

namespace App\View\Components\Admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ImageComponent extends Component
{
    public $name ;
    public $value ;
    /**
     * Create a new component instance.
     */

    public function __construct( string $name   , string $value = null)
    {
        //
        $this->name = $name ;
        $this->value = $value ; 

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.image-component');
    }
}
