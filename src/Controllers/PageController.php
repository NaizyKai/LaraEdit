<?php

namespace LaraEdit\LaraEdit\Controllers;

use Illuminate\Routing\Controller;

class PageController extends Controller {

    public function getIndex()
    {
        return view('laraedit::pages.test');
    }
    
}
